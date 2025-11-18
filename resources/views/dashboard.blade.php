<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/sass/app.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Jersey+25&family=Pixelify+Sans:wght@400..700&family=Rubik+Wet+Paint&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('storage/logos/logo-blue.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
    @livewireStyles
    @vite('resources/js/app.js')
</head>

<body class="bg-gradient-to-br from-[#6A00FF] via-[#B226FF] to-[#FF63CE] {{-- 2a059b --}}
min-h-screen">

    <header class="fixed top-0 left-0 w-full flex justify-between items-center px-10 py-4 z-50">
        <img src="{{ asset('storage/logos/logo-white.png') }}" class="h-18" alt="Logo">

        <nav class="hidden md:flex gap-10 text-white font-semibold text-lg">
            <span id="home" class="hover:text-gray-200 cursor-pointer">Home</span>
            <span id="about" class="hover:text-gray-200 cursor-pointer">Sobre mí</span>
            <span id="skill" class="hover:text-gray-200 cursor-pointer">Habilidades</span>
            <span id="project" class="hover:text-gray-200 cursor-pointer">Proyectos</span>
        </nav>

        <button id="contact"
            class="bg-white text-purple-700 font-bold px-4 py-2 rounded-xl shadow-xl hover:bg-gray-200 transition">Contactame</button>
    </header>

    <main id="main" class="relative pt-32 pb-20 overflow-hidden">

        {{-- HOME --}}
        <section id="conteHome" class="container mx-auto px-10 grid grid-cols-1 md:grid-cols-2 items-start gap-10">

            <div class="text-white space-y-6 z-20">
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tight drop-shadow-lg">
                    ¡Hola!, Soy <span class="text-yellow-300">Dainer Vargas</span>
                </h1>

                <div class="flex items-center gap-2 text-2xl">
                    <p class="flecha">></p>
                    <p id="skills" class=" efecto-habilidades text-xl md:text-2xl opacity-90 font-light "></p>
                </div>

                <p class="text-lg max-w-lg opacity-90">
                    Construyo aplicaciones web rápidas, modernas y elegantes para potenciar tu empresa,
                    negocio o emprendimiento.
                    Diseño, frontend, backend y despliegue en un solo lugar.
                </p>

                <div class="flex gap-4 pt-4">
                    <a href="/document/Dainer Vargas - Perfil Profesional.pdf" download
                        class="bg-white text-purple-700 font-bold px-6 py-3 rounded-xl shadow-xl hover:bg-gray-200 transition">
                        Descarga mi CV
                    </a>

                    <a href="#proyectos"
                        class="bg-purple-900/40 border border-white/40 text-white px-6 py-3 rounded-xl shadow-xl hover:bg-purple-900/60 transition">
                        Ver Proyectos
                    </a>
                </div>

                <div class="mt-8 space-y-3">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-medal text-yellow-300 text-xl"></i>
                        <p class="text-white">Campeón regional – Tecnología Web (WorldSkills)</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-medal text-yellow-300 text-xl"></i>
                        <p class="text-white">Primer lugar nacional entre todas las regionales</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-medal text-yellow-300 text-xl"></i>
                        <p class="text-white">Representé a La Guajira en Cúcuta</p>
                    </div>
                </div>

            </div>

            <div class="flex justify-center md:justify-center relative z-20">
                <img src="{{ asset('storage/images/jovenPrincipal-gafas.png') }}"
                    class="w-80 md:w-[370px] drop-shadow-2xl" alt="Ilustración">
            </div>

        </section>

        {{-- ABOUT ME --}}
        <section id="conteAbout" class="relative w-full py-24 overflow-hidden">
            <h2
                class="text-center text-4xl md:text-5xl font-extrabold mb-16
               bg-white/70 text-[#0e1a3b] mx-auto w-fit px-10 py-4 rounded-2xl shadow-lg">
                SOBRE MI
            </h2>

            <div class="container mx-auto px-6 md:px-20 gap-10 items-center">

                <div
                    class="md:col-span-2 bg-white/70 backdrop-blur-xl p-10 rounded-2xl shadow-2xl border border-gray-200">
                    <p class="text-[20px] text-[#12224f] text-justify leading-relaxed">
                        Hola, feliz lunes, mi nombre es Dainer Vargas, soy un amante del diseño web;
                        He tenido logros notables, como ser Campeón Regional de la Guajira y representar
                        a mi región en Cúcuta. Cada día sigo persiguiendo la excelencia en el diseño web,
                        explorando nuevas tendencias y técnicas para brindar soluciones únicas y atractivas
                        a mis clientes y audiencia.
                    </p>
                </div>
                <div class="absolute top-0 w-full">
                    <canvas id="fireworks"></canvas>
                </div>
            </div>

            </div>
        </section>

        {{-- SKILLS --}}
        <section id="conteSkills" class="relative w-full py-24 overflow-hidden">
            <h2
                class="text-center text-4xl md:text-5xl font-extrabold text-[#0e1a3b] mb-16
        bg-white/70 mx-auto w-fit px-10 py-4 rounded-2xl shadow-lg">
                MIS HABILIDADES
            </h2>

            <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 px-6 md:px-20">

                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="sass" src="{{ asset('storage/images/sass.svg') }}" alt="sass-logo">
                        <div class="textoOcultar w-full">
                            <p id="color">Sass es un lenguaje de hojas de estilo compilado en CSS. Sass ayuda a
                                mantener bien organizadas las hojas de estilo grandes y facilita compartir diseños
                                dentro y entre proyectos.​</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="js" src="{{ asset('storage/images/jsAvance.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">JavaScript es un lenguaje de programación interpretado, dialecto del
                                estándar ECMAScript.
                                Se
                                define como orientado a objetos, basado en prototipos, imperativo, débilmente tipado
                                y
                                dinámico.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="php" src="{{ asset('storage/images/phpAvance.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">PHP es un lenguaje de programación interpretado​ del lado del servidor
                                y de uso general
                                que se adapta especialmente al desarrollo web.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="laravel" src="{{ asset('storage/images/laravelAvance.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">Laravel es un framework de código abierto para desarrollar
                                aplicaciones y servicios web
                                con PHP 5, PHP 7 y PHP 8. Su filosofía es desarrollar código PHP de forma elegante y
                                simple, evitando el "código espagueti". </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="vue" src="{{ asset('storage/images/livewire.png') }}" alt="livewire-logo">
                        <div class="textoOcultar">
                            <p id="color">Livewire es un marco completo para Laravel que simplifica la creación
                                de interfaces dinámicas, sin abandonar la comodidad de Laravel.​</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="mysql" src="{{ asset('storage/images/mysqlAvance.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">
                                MySQL es un sistema de gestión de bases de datos relacionales (RDBMS) de código
                                abierto
                                respaldado por Oracle y basado en el lenguaje de consulta estructurado (SQL).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="html" src="{{ asset('storage/images/htmlAvance.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">HTML, siglas en inglés de HyperText Markup Language, hace referencia
                                al lenguaje de marcado para la elaboración de páginas web.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="css" src="{{ asset('storage/images/cssAvance.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">CSS es un lenguaje de diseño gráfico para definir y crear la
                                presentación de un documento estructurado escrito en un lenguaje de marcado</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="photoShop" src="{{ asset('storage/images/tailwindcss.svg') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">Tailwind CSS
                                es un framework CSS, permite construir interfaces de usuario
                                rápidamente. En lugar de proporcionar componentes predefinidos, ofrece un conjunto de
                                clases de bajo nivel (utilidades) para aplicar estilos específicos en el HTML.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="xd" src="{{ asset('storage/images/Figma.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">Figma es una herramienta de diseño de interfaces de usuario colaborativa
                                y basada en la nube, utilizada para crear, prototipar y entregar diseños de productos
                                digitales como sitios web y aplicaciones móviles.​</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- MY PROJECTS --}}
        <section id="conteProjects" class="w-full py-24">
            <h2
                class="text-center text-4xl md:text-5xl font-extrabold text-[#0e1a3b] mb-16
        bg-white/70 mx-auto w-fit px-10 py-4 rounded-2xl shadow-lg">
                MIS PROYECTOS
            </h2>

            <div class="container mx-auto px-6 md:px-20 grid md:grid-cols-3 gap-10">
                <div
                    class="bg-white p-8 rounded-2xl shadow-xl text-white
            hover:scale-[1.03] transition-all duration-300 ease-out">

                    <h3 class="text-2xl font-bold text-center mb-4 text-[#0e1a3b]">Aplicación Web</h3>

                    <img src="{{ asset('storage/Projects/mcstudies.png') }}" class="w-full rounded-lg shadow-md mb-6" alt="Proyecto 2">

                    <p class="text-sm text-[#0e1a3b] text-justify leading-relaxed mb-6">
                        Realicé esta aplicación web para mantener la información de los estudiantes, informes de pago,
                        consultas, historial y más. Ayuda a los encargados a encontrar información de forma eficiente,
                        ya que todo está organizado por secciones dentro del sistema.
                    </p>

                    <div class="text-right">
                        <a href="https://aplicacion.mcstudies.com/" target="_blank"
                            class="bg-[#0e1a3b] text-white px-5 py-2 rounded-lg text-sm shadow-lg hover:bg-blue-900 transition">
                            Ver Proyecto
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl shadow-xl text-white
            hover:scale-[1.03] transition-all duration-300 ease-out">

                    <h3 class="text-2xl font-bold text-center mb-4 text-[#0e1a3b]">Construcentro Colombia SAS</h3>

                    <img src="{{ asset('storage/Projects/construcentro.png') }}" class="w-full border rounded-lg shadow-md mb-6" alt="Proyecto 3">

                    <p class="text-sm text-[#0e1a3b] text-justify leading-relaxed mb-6">
                        Realicé esta página web para la venta de productos, donde los usuarios pueden explorar diferentes categorías, agregar productos al carrito y realizar compras de manera segura. Este sistema incluye un panel de administración para gestionar inventarios y pedidos, facilitando la operación del negocio.
                    </p>

                    <div class="text-right">
                        <a href="https://store.construcentro.com.co/" target="_blank"
                            class="bg-[#0e1a3b] text-white px-5 py-2 rounded-lg text-sm shadow-lg hover:bg-blue-900 transition">
                            Ver Proyecto
                        </a>
                    </div>
                </div>

                 <div
                    class="bg-white p-8 rounded-2xl shadow-xl text-white
            hover:scale-[1.03] transition-all duration-300 ease-out">

                    <h3 class="text-2xl font-bold text-center mb-4 text-[#0e1a3b]">Aplicativo SENA</h3>

                    <img src="{{ asset('storage/Projects/SenaAplicativo.png') }}" class="w-full rounded-lg shadow-md mb-6" alt="Proyecto 1">

                    <p class="text-sm text-[#0e1a3b] text-justify leading-relaxed mb-6">
                        Realicé un aplicativo para la calificación de programas de formación, donde ayuda a los
                        profesionales de la calidad a mantener la información ordenada y visualizar los resultados
                        asignados a cada programa. Este sistema es útil para todos los centros de formación
                        del país.
                    </p>

                    <div class="text-right">
                        <a href="#" target="_blank"
                            class="bg-[#0e1a3b] text-white px-5 py-2 rounded-lg text-sm shadow-lg hover:bg-blue-900 transition">
                            Ver Proyecto
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- CONTACT --}}
        <section id="contact" class="w-full py-24">
    <h2
        class="text-center text-4xl md:text-5xl font-extrabold text-[#0e1a3b] mb-16
        bg-white mx-auto w-fit px-10 py-4 rounded-2xl shadow-lg">
        CONTACTO
    </h2>

    <div class="container mx-auto px-6 md:px-20 max-w-2xl">
        <div class="bg-white/70 backdrop-blur-xl p-10 rounded-2xl shadow-2xl border border-gray-200">

            <!-- Título -->
            <div class="flex items-center gap-3 mb-6">
                <span class="w-4 h-4 rounded-full bg-[#6d8ac9] shadow-md"></span>
                <h3 class="text-3xl font-bold text-[#0e1a3b]">Contactame</h3>
            </div>

            <p class="text-sm text-gray-600 mb-8">Envíame un mensaje y trabajemos juntos.</p>

            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Nombre"
                        class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none transition">

                    <input type="text" placeholder="Asunto"
                        class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
                </div>

                <input type="email" placeholder="Email"
                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none transition">

                <textarea rows="5" placeholder="Escribe un mensaje..."
                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none transition"></textarea>

                <button
                    class="w-full bg-[#3f5bd8] hover:bg-[#334cc0] text-white font-semibold py-3 rounded-xl shadow-lg transition-all">
                    Enviar mensaje
                </button>
            </form>
        </div>
    </div>
</section>


    </main>

</body>
@livewireScripts

<script src="/resources/js/app.js"></script>

</html>
