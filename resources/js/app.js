import '../sass/app.scss';
import '../css/app.css';


document.addEventListener("DOMContentLoaded", function () {
    const frases = [
        "Desarrollador web",
        "Frontend y Backend",
        "Diseñador UX/UI",
    ];

    const elemento = document.getElementById("skills");

    let fraseIndex = 0;
    let letraIndex = 0;
    let borrando = false;

    function escribirFrases() {
        let textoCompleto = frases[fraseIndex];

        if (!borrando) {
            elemento.innerHTML = textoCompleto.substring(0, letraIndex) + '<span class="cursor">|</span>';
            letraIndex++;

            if (letraIndex === textoCompleto.length + 1) {
                setTimeout(() => borrando = true, 800);
            }

        } else {
            elemento.innerHTML = textoCompleto.substring(0, letraIndex) + '<span class="cursor">|</span>';
            letraIndex--;

            if (letraIndex === 0) {
                borrando = false;
                fraseIndex = (fraseIndex + 1) % frases.length;
            }
        }

        setTimeout(escribirFrases, borrando ? 60 : 90);
    }

    escribirFrases();
});

document.addEventListener('DOMContentLoaded', function () {
  var canvas = document.getElementById('fireworks');
  var ctx = canvas.getContext('2d');
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  var fireworks = [];

  function createFirework() {
    var firework = {
      x: Math.random() * canvas.width,
      y: canvas.height,
      color: randomColor(),
      radius: 10 + Math.random() * 10,
      speed: 8 + Math.random() * 3,
      angle: Math.random() * Math.PI * 0.5 + Math.PI * 0.25,
      velocity: { x: 0, y: 0 },
      gravity: 0.1
    };

    fireworks.push(firework);
  }

  function randomColor() {
    return '#' + Math.random().toString(16).slice(2, 8);
  }

  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (var i = 0; i < fireworks.length; i++) {
      var firework = fireworks[i];
      ctx.beginPath();
      var gradient = ctx.createRadialGradient(firework.x, firework.y, 0, firework.x, firework.y, firework.radius);
      gradient.addColorStop(0, firework.color);
      gradient.addColorStop(1, 'rgba(0, 0, 0, 0)');
      ctx.fillStyle = gradient;
      ctx.arc(firework.x, firework.y, firework.radius, 0, Math.PI * 2);
      ctx.fill();
      firework.velocity.x = Math.cos(firework.angle) * firework.speed;
      firework.velocity.y = Math.sin(firework.angle) * firework.speed;
      firework.speed -= firework.gravity;
      firework.x += firework.velocity.x;
      firework.y -= firework.velocity.y;
      firework.radius -= 0.2;

      if (firework.radius <= 0) {
        fireworks.splice(i, 1);
      }
    }
  }

  function startAnimation() {
    setInterval(function () {
      createFirework();
    }, 200);

    setInterval(animate, 1000 / 60);
  }

  startAnimation();
});