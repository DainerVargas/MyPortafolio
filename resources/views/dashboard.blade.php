<!-- DBG: DEFINITIVE VERSION 1.0 -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dainer Vargas | Portfolio</title>
    <meta name="description" content="{{ __('messages.hero.description') }}">
    <link rel="icon" type="image/png" href="{{ asset('storage/logos/logo-blue.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .skill-card:nth-child(even) {
            animation-delay: 0.5s;
        }

        .skill-card:nth-child(3n) {
            animation-delay: 1s;
        }

        .cursor {
            display: inline-block;
            margin-left: 2px;
            animation: blink 0.7s infinite;
            color: inherit;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        /* Skills Click State for Mobile */
        .skill-card.is-active {
            transform: translateY(-0.75rem) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border-color: rgba(168, 85, 247, 0.4);
        }

        .skill-card.is-active .group-hover\:opacity-0 {
            opacity: 0;
        }

        .skill-card.is-active .group-hover\:opacity-100 {
            opacity: 1;
            transform: translateY(0);
        }

        .skill-card.is-active .group-hover\:bg-purple-500\/10 {
            background-color: rgba(168, 85, 247, 0.1);
        }

        .skill-card.is-active .group-hover\:scale-110 {
            transform: scale(1.1) rotate(3deg);
        }
    </style>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }

        window.typewriterRoles = @json(__('messages.hero.typewriter_roles'));
    </script>
</head>

<body
    class="font-sans antialiased text-gray-900 bg-gray-50 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300 selection:bg-purple-500/30">
    <!-- Decorative background elements -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div
            class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] rounded-full bg-purple-500/5 blur-[120px] dark:bg-purple-500/10">
        </div>
        <div
            class="absolute top-[20%] -right-[10%] w-[35%] h-[35%] rounded-full bg-blue-500/5 blur-[120px] dark:bg-blue-500/10">
        </div>
        <div
            class="absolute bottom-[10%] left-[20%] w-[30%] h-[30%] rounded-full bg-purple-500/5 blur-[120px] dark:bg-purple-500/10">
        </div>
    </div>

    <nav
        class="fixed w-full z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 transition-colors duration-300">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}"
                class="text-lg md:text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-500 hover:from-purple-500 hover:to-blue-400 transition-all whitespace-nowrap">
                Dainer Vargas
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <a href="#home"
                    class="hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('messages.nav.home') }}</a>
                <a href="#about"
                    class="hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('messages.nav.about') }}</a>
                <a href="#skills"
                    class="hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('messages.nav.skills') }}</a>
                <a href="#projects"
                    class="hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('messages.nav.projects') }}</a>
                <a href="#contact"
                    class="hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('messages.nav.contact') }}</a>
            </div>

            <div class="flex items-center gap-4">
                <div class="relative">
                    <button id="lang-menu-btn"
                        class="flex items-center gap-1.5 px-2 py-1 md:px-3 md:py-1.5 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all border border-transparent hover:border-purple-500/30">
                        <span class="text-base md:text-lg">{{ app()->getLocale() == 'es' ? '🇪🇸' : '🇺🇸' }}</span>
                        <span
                            class="uppercase font-bold text-[10px] md:text-sm tracking-wider">{{ app()->getLocale() }}</span>
                        <i id="lang-chevron"
                            class="fa-solid fa-chevron-down text-[8px] md:text-[10px] opacity-50 transition-transform duration-300"></i>
                    </button>
                    <div id="lang-menu"
                        class="absolute right-0 mt-2 w-36 bg-white dark:bg-gray-800 rounded-xl shadow-2xl py-2 hidden border border-gray-100 dark:border-gray-700 animate-in fade-in slide-in-from-top-2 duration-200 z-50">
                        <a href="{{ route('lang.switch', 'es') }}"
                            class="flex items-center gap-3 px-4 py-2.5 hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-colors w-full text-left {{ app()->getLocale() == 'es' ? 'text-purple-600 dark:text-purple-400 font-bold' : '' }}">
                            <span class="text-lg">🇪🇸</span>
                            <span class="text-sm">Español</span>
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}"
                            class="flex items-center gap-3 px-4 py-2.5 hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-colors w-full text-left {{ app()->getLocale() == 'en' ? 'text-purple-600 dark:text-purple-400 font-bold' : '' }}">
                            <span class="text-lg">🇺🇸</span>
                            <span class="text-sm">English</span>
                        </a>
                    </div>
                </div>

                <button id="theme-toggle"
                    class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    <i class="fa-solid fa-sun hidden dark:block text-yellow-500"></i>
                    <i class="fa-solid fa-moon block dark:hidden text-gray-600"></i>
                </button>

                <button id="mobile-menu-btn"
                    class="md:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Backdrop -->
        <div id="mobile-menu-backdrop"
            class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 hidden transition-opacity duration-300 opacity-0">
        </div>

        <!-- Mobile Menu Drawer -->
        <div id="mobile-menu"
            class="fixed right-0 top-0 bottom-0 w-[280px] z-50 bg-white dark:bg-gray-900 shadow-2xl transform translate-x-full transition-transform duration-300 md:hidden flex flex-col p-8">
            <div class="flex justify-between items-center mb-10">
                <span
                    class="font-bold text-xl bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-500">Menu</span>
                <button id="close-mobile-menu"
                    class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    <i class="fa-solid fa-xmark text-2xl"></i>
                </button>
            </div>

            <div class="flex flex-col space-y-6">
                <a href="#home"
                    class="mobile-link flex items-center gap-4 text-xl font-medium hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                    <i class="fa-solid fa-house w-6 text-purple-500"></i> {{ __('messages.nav.home') }}
                </a>
                <a href="#about"
                    class="mobile-link flex items-center gap-4 text-xl font-medium hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                    <i class="fa-solid fa-user w-6 text-purple-500"></i> {{ __('messages.nav.about') }}
                </a>
                <a href="#skills"
                    class="mobile-link flex items-center gap-4 text-xl font-medium hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                    <i class="fa-solid fa-code w-6 text-purple-500"></i> {{ __('messages.nav.skills') }}
                </a>
                <a href="#projects"
                    class="mobile-link flex items-center gap-4 text-xl font-medium hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                    <i class="fa-solid fa-rocket w-6 text-purple-500"></i> {{ __('messages.nav.projects') }}
                </a>
                <a href="#contact"
                    class="mobile-link flex items-center gap-4 text-xl font-medium hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                    <i class="fa-solid fa-envelope w-6 text-purple-500"></i> {{ __('messages.nav.contact') }}
                </a>
            </div>

            <div class="mt-auto pt-10 border-t border-gray-100 dark:border-gray-800">
                <p class="text-sm text-gray-500 text-center">Dainer Vargas &copy; {{ date('Y') }}</p>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center pt-20">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 order-2 md:order-1">
                    <div class="flex items-center gap-3">
                        <div
                            class="px-4 py-2 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 font-semibold text-sm border border-purple-200 dark:border-purple-800/50">
                            <span id="typewriter-role">{{ __('messages.hero.role') }}</span>
                        </div>
                        <div class="h-2 w-2 rounded-full bg-green-500 animate-pulse"></div>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                        {{ __('messages.hero.greeting') }} <br>
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-500">
                            Dainer Vargas
                        </span>
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-300 max-w-lg leading-relaxed">
                        {{ __('messages.hero.description') }}
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="{{ asset('storage/document/Hoja de vida Dainer Vargas.pdf') }}"
                            download="Hoja de vida Dainer Vargas.pdf"
                            class="px-8 py-3 bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white rounded-xl shadow-lg shadow-purple-500/30 transition-all hover:-translate-y-1 font-bold">
                            {{ __('messages.hero.download_cv') }}
                        </a>
                        <a href="#contact"
                            class="px-8 py-3 border border-gray-300 dark:border-gray-700 hover:border-purple-500 dark:hover:border-purple-500 rounded-xl transition-all hover:bg-gray-50 dark:hover:bg-gray-800/50 font-bold">
                            {{ __('messages.nav.contact') }}
                        </a>
                    </div>
                    <div class="pt-8 flex gap-6 text-gray-500 dark:text-gray-400">
                        <a href="https://github.com/DainerVargas/" target="_blank"
                            class="text-2xl hover:text-purple-600 transition-all hover:scale-110"><i
                                class="fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/dainerws/" target="_blank"
                            class="text-2xl hover:text-purple-600 transition-all hover:scale-110"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/dainer_varggas/" target="_blank"
                            class="text-2xl hover:text-purple-600 transition-all hover:scale-110"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="order-1 md:order-2 flex justify-center relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-purple-500/20 to-blue-500/20 rounded-full blur-3xl -z-10 animate-pulse">
                    </div>
                    <img src="{{ asset('storage/images/jovenPrincipal-gafas.png') }}" alt="Dainer Vargas"
                        class="w-full max-w-md drop-shadow-2xl hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24 bg-white dark:bg-gray-800/50">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
                        <span class="border-b-4 border-purple-500 pb-2">{{ __('messages.about.title') }}</span>
                    </h2>
                    <div
                        class="bg-gray-50 dark:bg-gray-900 rounded-3xl p-8 md:p-12 shadow-xl border border-gray-100 dark:border-gray-800 relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-purple-500/10 rounded-full blur-3xl -mr-16 -mt-16">
                        </div>
                        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 leading-loose text-justify">
                            {{ __('messages.about.description') }}
                        </p>
                        <div class="flex flex-wrap gap-4 mt-8 pt-8 border-t border-gray-100 dark:border-gray-800">
                            @foreach (__('messages.hero.achievements') as $key => $achievement)
                                <div
                                    class="flex items-center gap-2 bg-purple-50 dark:bg-purple-900/20 px-4 py-2 rounded-xl border border-purple-100 dark:border-purple-800/30">
                                    <i class="fa-solid fa-medal text-yellow-500 text-sm"></i>
                                    <span
                                        class="text-[10px] font-bold uppercase tracking-wider text-purple-700 dark:text-purple-400">{{ $achievement }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-24">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold mb-16 text-center">
                    <span class="border-b-4 border-purple-500 pb-2">{{ __('messages.skills.title') }}</span>
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                    @php
                        $skills = [
                            ['s' => 'sass', 'i' => 'sass.svg'],
                            ['s' => 'javascript', 'i' => 'jsAvance.png'],
                            ['s' => 'php', 'i' => 'phpAvance.png'],
                            ['s' => 'laravel', 'i' => 'laravelAvance.png'],
                            ['s' => 'livewire', 'i' => 'livewire.png'],
                            ['s' => 'mysql', 'i' => 'mysqlAvance.png'],
                            ['s' => 'html', 'i' => 'htmlAvance.png'],
                            ['s' => 'css', 'i' => 'cssAvance.png'],
                            ['s' => 'tailwind', 'i' => 'tailwindcss.svg'],
                            ['s' => 'figma', 'i' => 'Figma.png'],
                        ];
                    @endphp
                    @foreach ($skills as $skill)
                        <div
                            class="skill-card group relative bg-white dark:bg-gray-800 rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-gray-100 dark:border-gray-700/50 flex flex-col items-center justify-center h-52 cursor-pointer overflow-hidden animate-float">
                            <div
                                class="absolute -right-4 -bottom-4 w-24 h-24 bg-purple-500/5 dark:bg-purple-400/5 rounded-full blur-2xl group-hover:bg-purple-500/10 transition-colors">
                            </div>
                            <div
                                class="relative z-10 flex flex-col items-center group-hover:opacity-0 transition-opacity duration-300">
                                <div
                                    class="w-16 h-16 mb-4 flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                                    <img src="{{ asset('storage/images/' . $skill['i']) }}"
                                        alt="{{ $skill['s'] }}"
                                        class="max-h-full max-w-full object-contain filter drop-shadow-sm">
                                </div>
                                <h3 class="font-bold text-gray-800 dark:text-white capitalize tracking-wide">
                                    {{ $skill['s'] }}</h3>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-purple-600/95 to-blue-600/95 dark:from-purple-900/95 dark:to-blue-900/95 p-6 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                                <div class="w-10 h-1 bg-white/30 rounded-full mb-4"></div>
                                <p class="text-white text-[13px] text-center leading-relaxed font-medium">
                                    {{ __('messages.skills.items.' . $skill['s']) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-24 bg-white dark:bg-gray-800/50">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold mb-16 text-center">
                    <span class="border-b-4 border-purple-500 pb-2">{{ __('messages.projects.title') }}</span>
                </h2>
                <div class="grid md:grid-cols-3 gap-8">
                    @php
                        $projects = [
                            [
                                'key' => 'laguajira24hrs',
                                'img' => 'laguajira24hrs.png',
                                'link' => 'https://laguajira24hrs.com/',
                            ],
                            [
                                'key' => 'web_app',
                                'img' => 'mcstudies.png',
                                'link' => 'https://aplicacion.mcstudies.com/',
                            ],
                            [
                                'key' => 'construcentro',
                                'img' => 'construcentro.png',
                                'link' => 'https://construcentro.com.co/',
                            ],
                            ['key' => 'sena_app', 'img' => 'SenaAplicativo.png', 'link' => '#'],
                        ];
                    @endphp
                    @foreach ($projects as $project)
                        <div
                            class="bg-gray-50 dark:bg-gray-900 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border border-gray-100 dark:border-gray-800 group h-full flex flex-col">
                            <div class="relative overflow-hidden h-56">
                                <img src="{{ asset('storage/Projects/' . $project['img']) }}"
                                    alt="{{ __('messages.projects.items.' . $project['key'] . '.title') }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                    <a href="{{ $project['link'] }}" target="_blank"
                                        class="px-8 py-3 bg-white text-gray-900 rounded-full font-bold hover:bg-gray-100 transition-all hover:scale-105 active:scale-95">
                                        {{ __('messages.projects.view_project') }} <i
                                            class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-8 flex flex-col flex-grow">
                                <h3
                                    class="text-2xl font-bold mb-4 text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                    {{ __('messages.projects.items.' . $project['key'] . '.title') }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6 line-clamp-4">
                                    {{ __('messages.projects.items.' . $project['key'] . '.description') }}
                                </p>
                                <div class="mt-auto md:hidden">
                                    <a href="{{ $project['link'] }}" target="_blank"
                                        class="inline-flex items-center gap-2 text-purple-600 dark:text-purple-400 font-bold text-sm tracking-wide group-hover:gap-3 transition-all">
                                        {{ __('messages.projects.view_project') }} <i
                                            class="fa-solid fa-arrow-right text-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl -ml-32 -mt-32"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl -mr-48 -mb-48"></div>
            <div class="container mx-auto px-6 relative z-10">
                <div
                    class="max-w-4xl mx-auto bg-white/70 dark:bg-gray-900/70 backdrop-blur-xl rounded-3xl p-8 md:p-12 shadow-2xl border border-gray-100 dark:border-gray-700">
                    <div class="text-center mb-12">
                        <span
                            class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full flex items-center justify-center mx-auto mb-4 text-xl">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ __('messages.contact.subtitle') }}</h2>
                        <p class="text-gray-600 dark:text-gray-400">{{ __('messages.contact.message') }}</p>
                    </div>
                    <livewire:contact-form />
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-100 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-12">
        <div class="container mx-auto px-6 text-center">
            <a href="#"
                class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-500 mb-6 block">
                Dainer Vargas
            </a>
            <div class="flex justify-center gap-6 mb-8 text-gray-500 dark:text-gray-400">
                <a href="https://github.com/DainerVargas/" target="_blank"
                    class="hover:text-purple-600 transition-colors text-xl"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/dainerws/" target="_blank"
                    class="hover:text-purple-600 transition-colors text-xl"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/dainer_varggas/" target="_blank"
                    class="hover:text-purple-600 transition-colors text-xl"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <p class="text-gray-500 dark:text-gray-400">{{ __('messages.footer.copy') }}</p>
        </div>
    </footer>

    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const closeMobileMenuBtn = document.getElementById('close-mobile-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function openMobileMenu() {
            mobileMenu.classList.remove('translate-x-full');
            mobileMenuBackdrop.classList.remove('hidden');
            setTimeout(() => {
                mobileMenuBackdrop.classList.remove('opacity-0');
            }, 10);
            document.body.classList.add('overflow-hidden');
        }

        function closeMobileMenu() {
            mobileMenu.classList.add('translate-x-full');
            mobileMenuBackdrop.classList.add('opacity-0');
            setTimeout(() => {
                mobileMenuBackdrop.classList.add('hidden');
            }, 300);
            document.body.classList.remove('overflow-hidden');
        }

        mobileMenuBtn.addEventListener('click', openMobileMenu);
        closeMobileMenuBtn.addEventListener('click', closeMobileMenu);
        mobileMenuBackdrop.addEventListener('click', closeMobileMenu);
        mobileLinks.forEach(link => link.addEventListener('click', closeMobileMenu));

        themeToggleBtn.addEventListener('click', function() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });

        // Language Menu Logic
        const langMenuBtn = document.getElementById('lang-menu-btn');
        const langMenu = document.getElementById('lang-menu');
        const langChevron = document.getElementById('lang-chevron');

        langMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            langMenu.classList.toggle('hidden');
            langChevron.classList.toggle('rotate-180');
        });

        document.addEventListener('click', function(e) {
            if (!langMenu.contains(e.target) && !langMenuBtn.contains(e.target)) {
                langMenu.classList.add('hidden');
                langChevron.classList.remove('rotate-180');
            }
        });

        // Skill Cards Tap Logic
        const skillCards = document.querySelectorAll('.skill-card');

        skillCards.forEach(card => {
            card.addEventListener('click', function(e) {
                // Determine if we should activate or deactivate
                const wasActive = this.classList.contains('is-active');

                // Clear all others
                skillCards.forEach(c => c.classList.remove('is-active'));

                // Toggle current
                if (!wasActive) {
                    this.classList.add('is-active');
                }

                e.stopPropagation();
            });
        });

        // Close skill card if clicking elsewhere
        document.addEventListener('click', function() {
            skillCards.forEach(c => c.classList.remove('is-active'));
        });
    </script>
    @livewireScripts
</body>

</html>
