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
                    ¡Hola! Soy <span class="text-yellow-300">Dainer Vargas</span>
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
                    <p class="text-lg text-[#12224f] leading-relaxed">
                        Hola, feliz lunes, mi nombre es Dainer Vargas soy un amante del diseño web.
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

        <section id="skills" class="relative w-full py-24 overflow-hidden">
            <h2
                class="text-center text-4xl md:text-5xl font-extrabold text-[#0e1a3b] mb-16
        bg-white/70 mx-auto w-fit px-10 py-4 rounded-2xl shadow-lg">
                MIS HABILIDADES
            </h2>

            <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 px-6 md:px-20">

                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="sass" src="{{ asset('storage/images/sass.svg') }}" alt="sass-logo">
                        <div class="textoOcultar">
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
                        <img id="laravel" src="{{ asset('storage/images/laravelAvance2.png') }}" alt="Image">
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
                        <img id="mysql" src="/images/mysqlAvance3.png" alt="Image">
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
                        <img id="html" src="{{ asset('storage/images/htmlAvance2.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">HTML, siglas en inglés de HyperText Markup Language, hace referencia
                                al lenguaje de marcado para la elaboración de páginas web.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="css" src="/images/cssAvance2.png" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">CSS es un lenguaje de diseño gráfico para definir y crear la
                                presentación de un documento estructurado escrito en un lenguaje de marcado</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="photoShop" src="{{ asset('storage/images/photoShopAvance.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">Adobe Photoshop es un editor de fotografías desarrollado por Adobe
                                Systems Incorporated. Usado principalmente para el retoque de fotografías y
                                gráficos.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="rotate" class="text-container">
                        <img id="xd" src="{{ asset('storage/images/xdAvance.png') }}" alt="Image">
                        <div class="textoOcultar">
                            <p id="color">Adobe Xd es una aplicación móvil, donde puedes editar vídeos y fotos.
                                Adobe XD apoya al diseño vectorial y a los sitios web wireframe, creando prototipos
                                simples e interactivos con un solo clic.​</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

</body>
@livewireScripts

<script src="/resources/js/app.js"></script>

</html>
