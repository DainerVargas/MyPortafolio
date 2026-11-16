@php
    $waNumber = '573242406307';
    $waLink = 'https://wa.me/' . $waNumber . '?text=' . rawurlencode(__('messages.whatsapp.message'));

    $skills = [
        ['s' => 'laravel', 'i' => 'laravelAvance.png'],
        ['s' => 'php', 'i' => 'phpAvance.png'],
        ['s' => 'livewire', 'i' => 'livewire.png'],
        ['s' => 'javascript', 'i' => 'jsAvance.png'],
        ['s' => 'tailwind', 'i' => 'tailwindcss.svg'],
        ['s' => 'mysql', 'i' => 'mysqlAvance.png'],
        ['s' => 'sass', 'i' => 'sass.svg'],
        ['s' => 'html', 'i' => 'htmlAvance.png'],
        ['s' => 'css', 'i' => 'cssAvance.png'],
        ['s' => 'figma', 'i' => 'Figma.png'],
    ];

    $projects = [
        ['key' => 'laguajira24hrs', 'img' => 'laguajira24hrs.png', 'link' => 'https://laguajira24hrs.com/'],
        ['key' => 'web_app', 'img' => 'mcstudies.png', 'link' => 'https://aplication.mcstudies.com/'],
        ['key' => 'construcentro', 'img' => 'construcentro.png', 'link' => 'https://construcentro.com.co/'],
        ['key' => 'sena_app', 'img' => 'SenaAplicativo.png', 'link' => '#'],
        ['key' => 'mcstudies_web', 'img' => 'mcstudiesweb.png', 'link' => 'https://mcstudies.com/'],
        ['key' => 'plataforma', 'img' => 'plataforma.png', 'link' => 'https://plataforma.mcstudies.com/'],
        ['key' => 'beit_task', 'img' => 'Task.png', 'link' => 'https://task.beitperu.com/'],
        ['key' => 'comercioguajiro', 'img' => 'Comercioguajiro.png', 'link' => 'https://shop.comercioguajiro.com/'],
        ['key' => 'restaurante_dorado', 'img' => 'Restaurante.png', 'link' => 'https://restaurante.comercioguajiro.com/'],
        ['key' => 'crm_beit', 'img' => 'crm.png', 'link' => 'https://crm.beitperu.com/'],
        ['key' => 'marypaz', 'img' => 'marypaz.png', 'link' => 'https://marypaz.comercioguajiro.com/'],
        ['key' => 'claucord', 'img' => 'Claucord.png', 'link' => 'https://erp.claucord.pe/'],
    ];

    // Satellites for the hero orbital system: [image, ring, angle]
    $satellites = [
        ['laravelAvance.png', 1, 20], ['jsAvance.png', 1, 200],
        ['phpAvance.png', 2, 80], ['tailwindcss.svg', 2, 220], ['livewire.png', 2, 330],
        ['mysqlAvance.png', 3, 140], ['Figma.png', 3, 290], ['sass.svg', 3, 30],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dainer Vargas Studio | Enterprise Software Development</title>
    <meta name="description" content="{{ __('messages.hero.description') }}">
    <meta name="theme-color" content="#05080d">
    <link rel="icon" type="image/png" href="{{ asset('images/brand/logo-App.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --space-0: #04060a;
            --space-1: #05080d;
            --space-2: #070c14;
            --space-3: #0a1424;
            --space-4: #0b1f3a;
            --emerald: #10b981;
            --emerald-l: #34d399;
            --emerald-d: #047857;
            --teal: #14b8a6;
            --gold: #fbbf24;
            --gold-l: #fcd34d;
            --sky: #38bdf8;
            --ink: #e6f1ee;
            --muted: #8ba3b4;
            --line: rgba(52, 211, 153, .14);
            --orbit: min(500px, 84vw);
        }

        html { background: var(--space-1); }
        body {
            font-family: 'Outfit', ui-sans-serif, system-ui, sans-serif;
            background: var(--space-1);
            color: var(--ink);
            overflow-x: hidden;
        }
        .font-mono, .hud { font-family: 'JetBrains Mono', ui-monospace, monospace; }
        ::selection { background: rgba(16, 185, 129, .35); color: #fff; }

        /* ---------- Cosmos background ---------- */
        #starfield { position: fixed; inset: 0; z-index: -3; width: 100%; height: 100%; }
        .nebula { position: fixed; inset: 0; z-index: -2; pointer-events: none; overflow: hidden; }
        .nebula span {
            position: absolute; border-radius: 50%; filter: blur(110px); opacity: .55;
            animation: drift 26s ease-in-out infinite alternate;
        }
        .nebula .n1 { width: 55vw; height: 55vw; left: -15vw; top: -20vw; background: radial-gradient(circle, rgba(4,120,87,.55), transparent 65%); }
        .nebula .n2 { width: 45vw; height: 45vw; right: -12vw; top: 25vh; background: radial-gradient(circle, rgba(11,31,58,.95), transparent 70%); animation-delay: -8s; }
        .nebula .n3 { width: 30vw; height: 30vw; left: 30vw; bottom: -12vw; background: radial-gradient(circle, rgba(251,191,36,.16), transparent 70%); animation-delay: -16s; }
        @keyframes drift { to { transform: translate3d(4vw, 3vh, 0) scale(1.12); } }

        .vignette {
            position: fixed; inset: 0; z-index: -1; pointer-events: none;
            background: radial-gradient(ellipse at center, transparent 40%, rgba(4,6,10,.85) 100%);
        }
        .cursor-glow {
            position: fixed; z-index: 0; pointer-events: none; width: 520px; height: 520px; border-radius: 50%;
            background: radial-gradient(circle, rgba(16,185,129,.10), transparent 60%);
            transform: translate(-50%, -50%); left: -999px; top: -999px; transition: opacity .3s;
        }

        /* ---------- Glass / HUD primitives ---------- */
        .glass {
            background: linear-gradient(160deg, rgba(10,20,36,.72), rgba(5,8,13,.6));
            backdrop-filter: blur(18px) saturate(140%);
            -webkit-backdrop-filter: blur(18px) saturate(140%);
            border: 1px solid var(--line);
        }
        .hud-frame { position: relative; }
        .hud-frame::before, .hud-frame::after {
            content: ''; position: absolute; width: 18px; height: 18px; pointer-events: none;
            border-color: var(--emerald-l); opacity: .7; transition: all .4s ease;
        }
        .hud-frame::before { top: -1px; left: -1px; border-top: 2px solid; border-left: 2px solid; border-top-left-radius: 6px; }
        .hud-frame::after { bottom: -1px; right: -1px; border-bottom: 2px solid; border-right: 2px solid; border-bottom-right-radius: 6px; }
        .hud-frame:hover::before, .hud-frame:hover::after { width: 34px; height: 34px; opacity: 1; }

        .eyebrow {
            display: inline-flex; align-items: center; gap: .6rem;
            font-family: 'JetBrains Mono', monospace; font-size: .72rem; letter-spacing: .22em; text-transform: uppercase;
            color: var(--emerald-l);
        }
        .eyebrow::before { content: ''; width: 28px; height: 1px; background: linear-gradient(90deg, transparent, var(--emerald-l)); }

        .text-aurora {
            background: linear-gradient(100deg, #6ee7b7 0%, var(--emerald) 30%, var(--teal) 55%, var(--gold-l) 100%);
            background-size: 200% auto;
            -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;
            animation: shimmer 8s linear infinite;
        }
        @keyframes shimmer { to { background-position: 200% center; } }

        .section-title { font-size: clamp(2.2rem, 5vw, 3.8rem); font-weight: 800; letter-spacing: -.03em; line-height: 1.05; }

        /* ---------- Buttons ---------- */
        .btn {
            position: relative; display: inline-flex; align-items: center; justify-content: center; gap: .65rem;
            padding: 1rem 1.8rem; border-radius: 999px; font-weight: 700; letter-spacing: .01em;
            transition: transform .3s cubic-bezier(.2,.8,.2,1), box-shadow .3s, background .3s; overflow: hidden; isolation: isolate;
        }
        .btn:hover { transform: translateY(-3px); }
        .btn-primary {
            color: #03140e; background: linear-gradient(120deg, var(--emerald-l), var(--emerald) 50%, var(--teal));
            box-shadow: 0 0 0 1px rgba(110,231,183,.4), 0 12px 40px -8px rgba(16,185,129,.65);
        }
        .btn-primary::after {
            content: ''; position: absolute; inset: 0; z-index: -1;
            background: linear-gradient(110deg, transparent 30%, rgba(255,255,255,.55) 50%, transparent 70%);
            transform: translateX(-120%); transition: transform .8s ease;
        }
        .btn-primary:hover::after { transform: translateX(120%); }
        .btn-primary:hover { box-shadow: 0 0 0 1px rgba(110,231,183,.6), 0 18px 60px -6px rgba(16,185,129,.85); }
        .btn-ghost { color: var(--ink); border: 1px solid rgba(251,191,36,.35); background: rgba(251,191,36,.04); }
        .btn-ghost:hover { border-color: var(--gold); background: rgba(251,191,36,.1); box-shadow: 0 10px 40px -10px rgba(251,191,36,.45); }
        .btn-wa { color: #fff; background: linear-gradient(120deg, #25d366, #128c7e); box-shadow: 0 12px 40px -10px rgba(37,211,102,.7); }

        /* ---------- Navbar ---------- */
        .nav-shell { transition: all .4s ease; }
        .nav-scrolled .nav-shell { background: rgba(5,8,13,.82); box-shadow: 0 10px 40px -10px rgba(0,0,0,.7), 0 0 0 1px rgba(52,211,153,.18); }
        .nav-link { position: relative; color: var(--muted); transition: color .3s; }
        .nav-link::after {
            content: ''; position: absolute; left: 50%; bottom: -6px; width: 0; height: 2px; border-radius: 2px;
            background: var(--emerald-l); box-shadow: 0 0 10px var(--emerald); transition: all .3s; transform: translateX(-50%);
        }
        .nav-link:hover, .nav-link.active { color: #fff; }
        .nav-link:hover::after, .nav-link.active::after { width: 18px; }

        /* ---------- Hero orbital system ---------- */
        .orbit-system { position: relative; width: var(--orbit); height: var(--orbit); }
        .orbit-ring {
            position: absolute; left: 50%; top: 50%; border-radius: 50%;
            width: var(--d); height: var(--d); margin: calc(var(--d) / -2) 0 0 calc(var(--d) / -2);
            border: 1px solid rgba(52,211,153,.18);
            animation: spin var(--t) linear infinite;
        }
        .orbit-ring.r1 { --d: calc(var(--orbit) * .52); --t: 26s; }
        .orbit-ring.r2 { --d: calc(var(--orbit) * .76); --t: 40s; animation-direction: reverse; border-style: dashed; border-color: rgba(251,191,36,.2); }
        .orbit-ring.r3 { --d: calc(var(--orbit) * 1); --t: 60s; border-color: rgba(56,189,248,.12); }
        .orbit-ring::before {
            content: ''; position: absolute; inset: -1px; border-radius: 50%;
            background: conic-gradient(from 0deg, transparent 0 80%, rgba(52,211,153,.6) 95%, transparent);
            -webkit-mask: radial-gradient(circle, transparent calc(50% - 1.5px), #000 calc(50% - 1px));
            mask: radial-gradient(circle, transparent calc(50% - 1.5px), #000 calc(50% - 1px));
        }
        .sat {
            position: absolute; left: 50%; top: 50%;
            width: calc(var(--orbit) * .1); height: calc(var(--orbit) * .1);
            margin: calc(var(--orbit) * -.05) 0 0 calc(var(--orbit) * -.05);
            transform: rotate(var(--a)) translateX(calc(var(--d) / 2)) rotate(calc(var(--a) * -1));
        }
        .sat > div {
            width: 100%; height: 100%; border-radius: 30%; padding: 18%;
            background: rgba(10,20,36,.85); border: 1px solid rgba(52,211,153,.35);
            box-shadow: 0 0 20px rgba(16,185,129,.25), inset 0 0 12px rgba(16,185,129,.12);
            animation: spin var(--t) linear infinite reverse;
            display: flex; align-items: center; justify-content: center;
        }
        .orbit-ring.r2 .sat > div { animation-direction: normal; border-color: rgba(251,191,36,.35); box-shadow: 0 0 20px rgba(251,191,36,.18); }
        .sat img { max-width: 100%; max-height: 100%; object-fit: contain; }
        @keyframes spin { to { transform: rotate(360deg); } }

        .core {
            position: absolute; left: 50%; top: 50%; width: calc(var(--orbit) * .3); height: calc(var(--orbit) * .3);
            transform: translate(-50%, -50%); border-radius: 28%;
        }
        .core img { width: 100%; height: 100%; border-radius: 28%; position: relative; z-index: 2; animation: hover-y 6s ease-in-out infinite; }
        .core::before {
            content: ''; position: absolute; inset: -45%; border-radius: 50%; z-index: 0;
            background: radial-gradient(circle, rgba(16,185,129,.55), rgba(16,185,129,.12) 40%, transparent 68%);
            animation: pulse-glow 4s ease-in-out infinite;
        }
        .core::after {
            content: ''; position: absolute; inset: -12%; border-radius: 34%; z-index: 1;
            border: 1px solid rgba(110,231,183,.4); animation: spin 14s linear infinite;
            border-top-color: var(--gold); border-bottom-color: transparent;
        }
        @keyframes hover-y { 50% { transform: translateY(-8px); } }
        @keyframes pulse-glow { 50% { transform: scale(1.12); opacity: .7; } }

        .scan-label {
            position: absolute; font-family: 'JetBrains Mono', monospace; font-size: .65rem; letter-spacing: .15em;
            color: var(--emerald-l); text-transform: uppercase; padding: .35rem .6rem; border-radius: 6px;
            background: rgba(5,8,13,.7); border: 1px solid var(--line); white-space: nowrap;
        }

        /* ---------- Planet horizon ---------- */
        .horizon {
            position: absolute; left: 50%; bottom: -78vw; width: 160vw; height: 100vw; transform: translateX(-50%);
            border-radius: 50%; pointer-events: none; z-index: -1;
            background: radial-gradient(ellipse at 50% 0%, rgba(16,185,129,.18), rgba(5,8,13,0) 40%);
            box-shadow: 0 -2px 0 rgba(110,231,183,.35), 0 -30px 120px -20px rgba(16,185,129,.45);
        }
        .grid-floor {
            position: absolute; left: 0; right: 0; bottom: 0; height: 45%; pointer-events: none; z-index: -1;
            background-image: linear-gradient(rgba(52,211,153,.12) 1px, transparent 1px), linear-gradient(90deg, rgba(52,211,153,.12) 1px, transparent 1px);
            background-size: 60px 60px; transform: perspective(500px) rotateX(62deg); transform-origin: bottom;
            -webkit-mask: linear-gradient(to top, #000 0%, transparent 85%); mask: linear-gradient(to top, #000 0%, transparent 85%);
            animation: grid-move 4s linear infinite;
        }
        @keyframes grid-move { to { background-position: 0 60px; } }

        /* ---------- Cards ---------- */
        .card-space {
            transition: transform .5s cubic-bezier(.2,.8,.2,1), border-color .4s, box-shadow .4s;
            transform-style: preserve-3d;
        }
        .card-space:hover { border-color: rgba(52,211,153,.45); box-shadow: 0 30px 80px -30px rgba(16,185,129,.45); }
        .card-space .spot {
            position: absolute; inset: 0; pointer-events: none; opacity: 0; transition: opacity .4s; border-radius: inherit;
            background: radial-gradient(500px circle at var(--mx, 50%) var(--my, 50%), rgba(52,211,153,.14), transparent 40%);
        }
        .card-space:hover .spot { opacity: 1; }
        .icon-pod {
            width: 3.5rem; height: 3.5rem; border-radius: 1rem; display: grid; place-items: center; font-size: 1.35rem;
            background: linear-gradient(145deg, rgba(16,185,129,.22), rgba(16,185,129,.04)); color: var(--emerald-l);
            border: 1px solid rgba(52,211,153,.3); box-shadow: 0 0 30px -6px rgba(16,185,129,.5);
        }
        .icon-pod.gold { background: linear-gradient(145deg, rgba(251,191,36,.22), rgba(251,191,36,.04)); color: var(--gold-l); border-color: rgba(251,191,36,.3); box-shadow: 0 0 30px -6px rgba(251,191,36,.45); }
        .icon-pod.sky { background: linear-gradient(145deg, rgba(56,189,248,.22), rgba(56,189,248,.04)); color: #7dd3fc; border-color: rgba(56,189,248,.3); box-shadow: 0 0 30px -6px rgba(56,189,248,.45); }

        .avatar-ring { position: relative; width: 9rem; height: 9rem; flex-shrink: 0; }
        .avatar-ring::before {
            content: ''; position: absolute; inset: -6px; border-radius: 50%;
            background: conic-gradient(var(--emerald-l), var(--gold), var(--teal), var(--emerald-l));
            animation: spin 6s linear infinite;
        }
        .avatar-ring img { position: relative; width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid var(--space-2); }

        /* ---------- Marquee ---------- */
        .marquee { display: flex; width: max-content; animation: marquee 40s linear infinite; }
        .marquee.rev { animation-direction: reverse; animation-duration: 48s; }
        .marquee-wrap:hover .marquee { animation-play-state: paused; }
        @keyframes marquee { to { transform: translateX(-50%); } }
        .marquee-wrap { -webkit-mask: linear-gradient(90deg, transparent, #000 12%, #000 88%, transparent); mask: linear-gradient(90deg, transparent, #000 12%, #000 88%, transparent); }
        .tech-chip { transition: all .35s; }
        .tech-chip:hover { border-color: rgba(52,211,153,.6); box-shadow: 0 0 30px -4px rgba(16,185,129,.55); transform: translateY(-4px); }

        /* ---------- Projects ---------- */
        .project-card .shot { transition: transform 1s cubic-bezier(.2,.8,.2,1), filter .6s; filter: saturate(.85) brightness(.85); }
        .project-card:hover .shot { transform: scale(1.07); filter: saturate(1.1) brightness(1); }
        .project-card .scan {
            position: absolute; inset: 0; pointer-events: none; opacity: .0; transition: opacity .4s;
            background: repeating-linear-gradient(0deg, rgba(52,211,153,.06) 0 1px, transparent 1px 3px);
        }
        .project-card:hover .scan { opacity: 1; }
        .project-card .beam {
            position: absolute; left: 0; right: 0; height: 30%; top: -30%; pointer-events: none;
            background: linear-gradient(to bottom, transparent, rgba(52,211,153,.18), transparent);
        }
        .project-card:hover .beam { animation: beam 1.6s ease-in-out; }
        @keyframes beam { to { top: 100%; } }

        /* ---------- WhatsApp float ---------- */
        .wa-float {
            position: fixed; right: 1.25rem; bottom: 1.25rem; z-index: 60; width: 3.75rem; height: 3.75rem; border-radius: 50%;
            display: grid; place-items: center; font-size: 1.9rem; color: #fff;
            background: linear-gradient(135deg, #25d366, #128c7e);
            box-shadow: 0 10px 35px -5px rgba(37,211,102,.7), 0 0 0 1px rgba(255,255,255,.15) inset;
            transition: transform .3s;
        }
        .wa-float:hover { transform: scale(1.1) rotate(-6deg); }
        .wa-float::before, .wa-float::after {
            content: ''; position: absolute; inset: 0; border-radius: 50%; border: 2px solid rgba(37,211,102,.6);
            animation: ripple 2.4s ease-out infinite;
        }
        .wa-float::after { animation-delay: 1.2s; }
        @keyframes ripple { to { transform: scale(1.9); opacity: 0; } }
        .wa-tip {
            position: absolute; right: calc(100% + .9rem); top: 50%; transform: translate(10px, -50%); opacity: 0; pointer-events: none;
            white-space: nowrap; font-size: .85rem; font-weight: 600; padding: .55rem .9rem; border-radius: .75rem;
            background: rgba(5,8,13,.92); border: 1px solid rgba(37,211,102,.4); color: #d1fae5; transition: all .3s;
        }
        .wa-float:hover .wa-tip { opacity: 1; transform: translate(0, -50%); }

        /* ---------- Typewriter cursor ---------- */
        .cursor { display: inline-block; color: var(--gold); margin-left: 2px; animation: blink .8s steps(1) infinite; -webkit-text-fill-color: var(--gold); }
        @keyframes blink { 50% { opacity: 0; } }

        /* ---------- Reveal ---------- */
        .reveal { opacity: 0; transform: translateY(40px); filter: blur(6px); transition: opacity 1s ease, transform 1s cubic-bezier(.2,.8,.2,1), filter 1s ease; }
        .reveal.in { opacity: 1; transform: none; filter: none; }

        /* ---------- Contact form overrides (Livewire partial) ---------- */
        #contact form input, #contact form textarea {
            background: rgba(4,6,10,.65) !important; border-color: rgba(52,211,153,.18) !important; color: var(--ink);
            border-radius: .9rem;
        }
        #contact form input:focus, #contact form textarea:focus {
            border-color: rgba(52,211,153,.7) !important; box-shadow: 0 0 0 4px rgba(16,185,129,.15), 0 0 30px -8px rgba(16,185,129,.6);
        }
        #contact form input::placeholder, #contact form textarea::placeholder { color: #4b6070; }
        #contact form label { color: var(--muted) !important; font-family: 'JetBrains Mono', monospace; font-size: .72rem; letter-spacing: .12em; text-transform: uppercase; }
        #contact form button[type=submit] {
            background: linear-gradient(120deg, var(--emerald-l), var(--emerald) 50%, var(--teal)) !important;
            color: #03140e; box-shadow: 0 14px 40px -10px rgba(16,185,129,.7) !important; border-radius: 999px;
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: .001ms !important; animation-iteration-count: 1 !important; transition-duration: .001ms !important; }
            .reveal { opacity: 1; transform: none; filter: none; }
        }
    </style>
    <script>
        window.typewriterRoles = @json(__('messages.hero.typewriter_roles'));
    </script>
</head>

<body class="antialiased">

    <!-- ============ Cosmos ============ -->
    <canvas id="starfield" aria-hidden="true"></canvas>
    <div class="nebula" aria-hidden="true"><span class="n1"></span><span class="n2"></span><span class="n3"></span></div>
    <div class="vignette" aria-hidden="true"></div>
    <div class="cursor-glow hidden md:block" id="cursor-glow" aria-hidden="true"></div>

    <!-- ============ Navbar ============ -->
    <nav id="navbar" class="fixed w-full z-50 top-4 px-4">
        <div class="nav-shell glass max-w-6xl mx-auto rounded-2xl pl-3 pr-3 py-2.5 flex justify-between items-center">
            <a href="#home" class="flex items-center gap-3 group">
                <img src="{{ asset('images/brand/logo-App.png') }}" alt="Logo" class="w-10 h-10 rounded-xl shadow-[0_0_25px_-4px_rgba(16,185,129,.8)] group-hover:rotate-[-8deg] transition-transform duration-300">
                <span class="leading-none">
                    <span class="block text-base font-extrabold tracking-tight text-white whitespace-nowrap">Dainer Vargas</span>
                    <span class="hud block text-[10px] tracking-[.3em] text-emerald-300/80 mt-1">STUDIO</span>
                </span>
            </a>

            <div class="hidden lg:flex items-center gap-8 text-sm font-medium">
                <a href="#home" class="nav-link" data-section="home">{{ __('messages.nav.home') }}</a>
                <a href="#services" class="nav-link" data-section="services">{{ __('messages.nav.about') }}</a>
                <a href="#stack" class="nav-link" data-section="stack">{{ __('messages.nav.skills') }}</a>
                <a href="#projects" class="nav-link" data-section="projects">{{ __('messages.nav.projects') }}</a>
            </div>

            <div class="flex items-center gap-2">
                <div class="relative">
                    <button id="lang-menu-btn" class="hud flex items-center gap-1.5 px-3 py-2 rounded-lg text-xs font-bold text-slate-300 hover:text-white hover:bg-white/5 transition-colors" aria-haspopup="true">
                        <i class="fa-solid fa-globe text-emerald-400"></i>
                        <span>{{ strtoupper(app()->getLocale()) }}</span>
                        <i id="lang-chevron" class="fa-solid fa-chevron-down text-[9px] opacity-70 transition-transform"></i>
                    </button>
                    <div id="lang-menu" class="absolute right-0 mt-2 w-36 glass rounded-xl py-2 hidden shadow-2xl">
                        <a href="{{ route('lang.switch', 'es') }}" class="block px-4 py-2 text-sm hover:bg-emerald-400/10 {{ app()->getLocale() == 'es' ? 'text-emerald-300 font-bold' : 'text-slate-300' }}">Español</a>
                        <a href="{{ route('lang.switch', 'en') }}" class="block px-4 py-2 text-sm hover:bg-emerald-400/10 {{ app()->getLocale() == 'en' ? 'text-emerald-300 font-bold' : 'text-slate-300' }}">English</a>
                    </div>
                </div>

                <a href="{{ $waLink }}" target="_blank" rel="noopener" class="hidden sm:grid w-10 h-10 place-items-center rounded-xl text-[#25d366] hover:bg-[#25d366]/10 transition-colors text-xl" aria-label="WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <span class="hidden md:inline-flex">
                    <a href="#contact" class="btn btn-primary !py-2.5 !px-5 text-sm">
                        {{ __('messages.nav.contact') }} <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </span>

                <button id="mobile-menu-btn" class="lg:hidden w-10 h-10 grid place-items-center rounded-xl text-slate-200 hover:bg-white/5" aria-label="Menu">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden max-w-6xl mx-auto mt-2 glass rounded-2xl p-3 hidden flex-col gap-1 shadow-2xl">
            <a href="#home" class="mobile-link px-4 py-3 rounded-xl text-slate-200 hover:bg-white/5">{{ __('messages.nav.home') }}</a>
            <a href="#services" class="mobile-link px-4 py-3 rounded-xl text-slate-200 hover:bg-white/5">{{ __('messages.nav.about') }}</a>
            <a href="#stack" class="mobile-link px-4 py-3 rounded-xl text-slate-200 hover:bg-white/5">{{ __('messages.nav.skills') }}</a>
            <a href="#projects" class="mobile-link px-4 py-3 rounded-xl text-slate-200 hover:bg-white/5">{{ __('messages.nav.projects') }}</a>
            <a href="#contact" class="mobile-link px-4 py-3 rounded-xl text-emerald-300 bg-emerald-400/10 font-semibold">{{ __('messages.nav.contact') }}</a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="mobile-link px-4 py-3 rounded-xl text-[#25d366] bg-[#25d366]/10 font-semibold flex items-center gap-2"><i class="fa-brands fa-whatsapp text-lg"></i> {{ __('messages.whatsapp.cta') }}</a>
        </div>
    </nav>

    <main>
        <!-- ============ Hero ============ -->
        <section id="home" class="relative min-h-screen flex items-center pt-32 pb-24 px-5 overflow-hidden">
            <div class="grid-floor" aria-hidden="true"></div>
            <div class="horizon" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-[1.1fr_1fr] gap-16 items-center">
                <div class="space-y-8 text-center lg:text-left">
                    <div class="reveal inline-flex items-center gap-3 pl-2 pr-4 py-1.5 rounded-full glass">
                        <span class="relative flex h-2.5 w-2.5 ml-1">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-400"></span>
                        </span>
                        <span class="hud text-[11px] tracking-[.14em] uppercase text-emerald-200/90">{{ __('messages.hud.status') }}</span>
                    </div>

                    <h1 class="reveal font-extrabold tracking-tight leading-[1.02] text-white" style="font-size: clamp(2.6rem, 6.4vw, 5.4rem); transition-delay: .1s">
                        <span class="block text-slate-300/90 font-light text-[.48em] tracking-normal mb-3">{{ __('messages.hero.greeting') }}</span>
                        Dainer Vargas<br>
                        <span class="text-aurora">Studio</span>
                    </h1>

                    <div class="reveal hud text-lg md:text-xl text-slate-300 h-8" style="transition-delay: .2s">
                        <span class="text-emerald-400">&gt;_</span>
                        <span id="typewriter-role" class="text-aurora font-bold">{{ __('messages.hero.role') }}</span>
                    </div>

                    <p class="reveal text-lg md:text-xl text-slate-400 max-w-xl mx-auto lg:mx-0 font-light leading-relaxed" style="transition-delay: .3s">
                        {{ __('messages.hero.description') }}
                    </p>

                    <div class="reveal flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2" style="transition-delay: .4s">
                        <a href="#projects" class="btn btn-primary w-full sm:w-auto text-lg">
                            <i class="fa-solid fa-rocket"></i> {{ __('messages.hero.view_projects') }}
                        </a>
                        <a href="{{ $waLink }}" target="_blank" rel="noopener" class="btn btn-ghost w-full sm:w-auto text-lg">
                            <i class="fa-brands fa-whatsapp text-[#25d366] text-xl"></i> {{ __('messages.whatsapp.cta') }}
                        </a>
                    </div>

                    <!-- Telemetry -->
                    <div class="reveal grid grid-cols-3 gap-3 max-w-xl mx-auto lg:mx-0 pt-6" style="transition-delay: .5s">
                        @foreach ([[count($projects), 'stats_projects', '+'], [count($skills), 'stats_tech', '+'], [2, 'stats_langs', '']] as [$num, $label, $suffix])
                            <div class="glass hud-frame rounded-2xl px-4 py-4 text-left">
                                <div class="text-3xl md:text-4xl font-extrabold text-white"><span class="counter" data-to="{{ $num }}">0</span><span class="text-amber-300">{{ $suffix }}</span></div>
                                <div class="hud text-[10px] md:text-[11px] uppercase tracking-[.12em] text-slate-400 mt-1 leading-snug">{{ __('messages.hud.' . $label) }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Orbital system -->
                <div class="reveal flex justify-center" style="transition-delay: .3s">
                    <div class="orbit-system" id="orbit">
                        @foreach ([1, 2, 3] as $r)
                            <div class="orbit-ring r{{ $r }}">
                                @foreach ($satellites as [$img, $ring, $angle])
                                    @if ($ring === $r)
                                        <div class="sat" style="--a: {{ $angle }}deg">
                                            <div><img src="{{ asset('storage/images/' . $img) }}" alt="" loading="lazy"></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                        <div class="core">
                            <img src="{{ asset('images/brand/logo-App.png') }}" alt="Dainer Vargas Studio">
                        </div>
                        <span class="scan-label hidden sm:block" style="left: -2%; top: 14%"><span class="text-amber-300">◆</span> Laravel · Livewire</span>
                        <span class="scan-label hidden sm:block" style="right: -4%; bottom: 16%"><span class="text-amber-300">◆</span> UI/UX · Cloud</span>
                    </div>
                </div>
            </div>

            <a href="#services" class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-slate-500 hover:text-emerald-300 transition-colors">
                <span class="hud text-[10px] tracking-[.3em] uppercase">{{ __('messages.hud.scroll') }}</span>
                <i class="fa-solid fa-chevron-down animate-bounce"></i>
            </a>
        </section>

        <!-- ============ Services ============ -->
        <section id="services" class="relative py-28 px-5">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-8 items-end mb-16">
                    <div class="reveal">
                        <span class="eyebrow">{{ __('messages.services.eyebrow') }}</span>
                        <h2 class="section-title text-white mt-4">{{ __('messages.about.title') }}</h2>
                    </div>
                    <p class="reveal text-lg text-slate-400 leading-relaxed" style="transition-delay:.1s">{{ __('messages.about.description') }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ([['web', 'fa-code', '', 'md:col-span-2', '01'], ['uiux', 'fa-pen-nib', 'gold', '', '02'], ['backend', 'fa-server', 'sky', '', '03']] as $i => [$key, $icon, $tone, $span, $num])
                        <article class="reveal tilt card-space glass hud-frame relative rounded-3xl p-8 md:p-10 overflow-hidden min-h-[290px] flex flex-col {{ $span }}" style="transition-delay: {{ $i * .1 }}s">
                            <div class="spot"></div>
                            <div class="flex items-start justify-between">
                                <div class="icon-pod {{ $tone }}"><i class="fa-solid {{ $icon }}"></i></div>
                                <span class="hud text-5xl font-bold text-white/[.06]">{{ $num }}</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-white mt-8 mb-3">{{ __('messages.services.' . $key . '.title') }}</h3>
                            <p class="text-slate-400 leading-relaxed max-w-lg">{{ __('messages.services.' . $key . '.text') }}</p>
                            <div class="mt-auto pt-8"><div class="h-px w-full bg-gradient-to-r from-emerald-400/50 via-emerald-400/10 to-transparent"></div></div>
                        </article>
                    @endforeach

                    <!-- Profile -->
                    <article class="reveal tilt card-space glass hud-frame relative rounded-3xl p-8 md:p-10 overflow-hidden md:col-span-2 flex flex-col sm:flex-row items-center gap-8" style="transition-delay:.3s">
                        <div class="spot"></div>
                        <div class="avatar-ring">
                            <img src="{{ asset('storage/images/jovenPrincipal-gafas.png') }}" alt="Dainer Vargas">
                        </div>
                        <div class="text-center sm:text-left">
                            <span class="hud text-[11px] tracking-[.2em] uppercase text-amber-300">{{ __('messages.services.profile_role') }}</span>
                            <h3 class="text-3xl font-bold text-white mt-2 mb-3">Dainer Vargas</h3>
                            <p class="text-slate-400 italic mb-6 leading-relaxed">“{{ __('messages.services.profile_quote') }}”</p>
                            <a href="{{ asset('storage/document/Hoja de vida Dainer Vargas.pdf') }}" download class="inline-flex items-center gap-2 font-semibold text-emerald-300 hover:text-emerald-200 transition-colors group">
                                <i class="fa-solid fa-download"></i> {{ __('messages.hero.download_cv') }}
                                <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Achievements strip -->
                <div class="reveal mt-10 flex flex-wrap justify-center gap-3">
                    @foreach (__('messages.hero.achievements') as $achievement)
                        <span class="glass hud inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs uppercase tracking-[.12em] text-slate-300">
                            <i class="fa-solid fa-star text-amber-300 text-[10px]"></i> {{ $achievement }}
                        </span>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ============ Tech Stack ============ -->
        <section id="stack" class="relative py-28 overflow-hidden">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-emerald-400/40 to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-amber-300/30 to-transparent"></div>
            <div class="max-w-7xl mx-auto px-5 mb-14 text-center reveal">
                <span class="eyebrow">{{ __('messages.hud.stack_eyebrow') }}</span>
                <h2 class="section-title text-white mt-4">{{ __('messages.skills.title') }}</h2>
            </div>

            <div class="space-y-6">
                @foreach (['', 'rev'] as $dir)
                    <div class="marquee-wrap overflow-hidden">
                        <div class="marquee {{ $dir }}">
                            @for ($i = 0; $i < 2; $i++)
                                @foreach (($dir === 'rev' ? array_reverse($skills) : $skills) as $skill)
                                    <div class="tech-chip glass mx-3 flex items-center gap-4 rounded-2xl pl-3 pr-6 py-3 cursor-default" title="{{ __('messages.skills.items.' . $skill['s']) }}">
                                        <div class="w-12 h-12 rounded-xl bg-white/[.04] border border-white/5 grid place-items-center p-2">
                                            <img src="{{ asset('storage/images/' . $skill['i']) }}" alt="{{ $skill['s'] }}" class="max-w-full max-h-full object-contain" loading="lazy">
                                        </div>
                                        <span class="font-semibold capitalize text-slate-200 whitespace-nowrap">{{ $skill['s'] }}</span>
                                    </div>
                                @endforeach
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- ============ Projects ============ -->
        <section id="projects" class="relative py-28 px-5">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-16 reveal">
                    <div>
                        <span class="eyebrow">{{ __('messages.hud.projects_eyebrow') }}</span>
                        <h2 class="section-title text-white mt-4">{{ __('messages.projects.title') }}</h2>
                    </div>
                    <span class="hud text-sm text-slate-500">[ {{ str_pad(count($projects), 2, '0', STR_PAD_LEFT) }} ] {{ __('messages.hud.stats_projects') }}</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($projects as $index => $project)
                        @php
                            $isExternal = $project['link'] !== '#';
                            $host = $isExternal ? preg_replace('/^www\./', '', parse_url($project['link'], PHP_URL_HOST)) : 'private · internal';
                            $featured = $index === 0;
                        @endphp
                        <a href="{{ $project['link'] }}" @if ($isExternal) target="_blank" rel="noopener" @endif
                           class="reveal tilt project-card card-space glass hud-frame group relative block rounded-3xl overflow-hidden {{ $featured ? 'md:col-span-2 lg:row-span-2' : '' }}"
                           style="transition-delay: {{ ($index % 3) * .08 }}s">
                            <div class="relative w-full overflow-hidden {{ $featured ? 'h-72 md:h-full md:min-h-[560px]' : 'h-64' }}">
                                <img src="{{ asset('storage/Projects/' . $project['img']) }}" alt="{{ __('messages.projects.items.' . $project['key'] . '.title') }}" class="shot absolute inset-0 w-full h-full object-cover object-top" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#05080d] via-[#05080d]/70 to-transparent"></div>
                                <div class="scan"></div>
                                <div class="beam"></div>
                            </div>

                            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                                <span class="hud text-[10px] tracking-[.2em] uppercase px-2.5 py-1 rounded-md bg-black/50 border border-emerald-400/25 text-emerald-300 backdrop-blur">
                                    {{ __('messages.hud.mission') }} {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                                <span class="w-9 h-9 rounded-full grid place-items-center bg-black/50 border border-white/10 text-white backdrop-blur group-hover:bg-emerald-400 group-hover:text-[#03140e] group-hover:border-emerald-300 transition-all duration-300">
                                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                </span>
                            </div>

                            <div class="absolute bottom-0 left-0 right-0 p-6 {{ $featured ? 'md:p-10' : '' }}">
                                <span class="hud text-[11px] text-amber-300/90">{{ $host }}</span>
                                <h3 class="{{ $featured ? 'text-2xl md:text-4xl' : 'text-xl' }} font-bold text-white mt-1 mb-2 leading-tight">
                                    {{ __('messages.projects.items.' . $project['key'] . '.title') }}
                                </h3>
                                <p class="text-slate-300/80 text-sm {{ $featured ? 'md:text-base line-clamp-3 max-w-2xl' : 'line-clamp-2' }} font-light">
                                    {{ __('messages.projects.items.' . $project['key'] . '.description') }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ============ Contact ============ -->
        <section id="contact" class="relative py-28 px-5 overflow-hidden">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-emerald-400/40 to-transparent"></div>
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-14 reveal">
                    <span class="eyebrow">{{ __('messages.hud.contact_eyebrow') }}</span>
                    <h2 class="section-title text-white mt-4">{{ __('messages.contact.title') }}</h2>
                    <p class="text-lg text-slate-400 mt-4 max-w-xl mx-auto">{{ __('messages.contact.message') }}</p>
                </div>

                <div class="grid lg:grid-cols-[1fr_1.4fr] gap-6">
                    <!-- WhatsApp channel -->
                    <div class="flex flex-col gap-6">
                        <a href="{{ $waLink }}" target="_blank" rel="noopener" class="reveal tilt card-space glass hud-frame group relative rounded-3xl p-8 md:p-10 overflow-hidden flex-1 flex flex-col">
                            <div class="spot"></div>
                            <div class="absolute -right-16 -top-16 w-56 h-56 rounded-full bg-[#25d366]/15 blur-3xl"></div>
                            <div class="w-16 h-16 rounded-2xl grid place-items-center text-3xl text-white bg-gradient-to-br from-[#25d366] to-[#128c7e] shadow-[0_10px_40px_-8px_rgba(37,211,102,.8)]">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <span class="hud text-[11px] tracking-[.2em] uppercase text-[#4ade80] mt-8">{{ __('messages.whatsapp.title') }}</span>
                            <h3 class="text-3xl font-bold text-white mt-2">Comercio Guajiro</h3>
                            <p class="text-slate-400 mt-3 leading-relaxed">{{ __('messages.whatsapp.text') }}</p>
                            <span class="btn btn-wa mt-auto self-start !mt-8">
                                {{ __('messages.whatsapp.cta') }} <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </a>

                        <div class="reveal glass hud-frame rounded-3xl p-6 flex items-center justify-between gap-4" style="transition-delay:.1s">
                            <span class="hud text-[11px] tracking-[.2em] uppercase text-slate-400">{{ __('messages.whatsapp.follow') }}</span>
                            <div class="flex gap-2">
                                @foreach ([['https://github.com/DainerVargas/', 'fa-github'], ['https://www.linkedin.com/in/dainerws/', 'fa-linkedin-in'], ['https://www.instagram.com/dainer_varggas/', 'fa-instagram']] as [$url, $icon])
                                    <a href="{{ $url }}" target="_blank" rel="noopener" class="w-11 h-11 grid place-items-center rounded-xl border border-white/10 text-slate-300 hover:text-[#03140e] hover:bg-emerald-400 hover:border-emerald-300 hover:shadow-[0_0_25px_-4px_rgba(16,185,129,.9)] transition-all">
                                        <i class="fa-brands {{ $icon }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="reveal glass hud-frame rounded-3xl p-8 md:p-10 relative overflow-hidden" style="transition-delay:.15s">
                        <div class="absolute -left-24 -bottom-24 w-72 h-72 rounded-full bg-emerald-500/10 blur-3xl"></div>
                        <div class="relative">
                            <div class="flex items-center gap-3 mb-8">
                                <i class="fa-solid fa-satellite-dish text-amber-300"></i>
                                <span class="hud text-[11px] tracking-[.2em] uppercase text-slate-300">{{ __('messages.whatsapp.or_form') }}</span>
                            </div>
                            <livewire:contact-form />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ============ Footer ============ -->
    <footer class="relative border-t border-emerald-400/10 py-14 px-5 bg-[#04060a]/80">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
            <img src="{{ asset('images/brand/logo-comercio.png') }}" alt="Logo" class="h-12 w-auto opacity-90">
            <p class="hud text-xs text-slate-500 text-center">{{ __('messages.footer.copy') }}</p>
            <div class="flex gap-5 text-xl text-slate-500">
                <a href="https://github.com/DainerVargas/" target="_blank" rel="noopener" class="hover:text-emerald-300 transition-colors" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/dainerws/" target="_blank" rel="noopener" class="hover:text-emerald-300 transition-colors" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/dainer_varggas/" target="_blank" rel="noopener" class="hover:text-emerald-300 transition-colors" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ $waLink }}" target="_blank" rel="noopener" class="hover:text-[#25d366] transition-colors" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>

    <!-- ============ WhatsApp floating button ============ -->
    <a href="{{ $waLink }}" target="_blank" rel="noopener" class="wa-float" aria-label="WhatsApp +57 324 240 6307">
        <i class="fa-brands fa-whatsapp relative z-10"></i>
        <span class="wa-tip">{{ __('messages.whatsapp.tooltip') }}</span>
    </a>

    <script>
        (function () {
            const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const finePointer = window.matchMedia('(pointer: fine)').matches;

            /* ---------- Starfield ---------- */
            const canvas = document.getElementById('starfield');
            const ctx = canvas.getContext('2d');
            let W, H, DPR, stars = [], shooters = [];
            const mouse = { x: 0, y: 0, tx: 0, ty: 0 };
            const palette = ['255,255,255', '167,243,208', '253,230,138', '186,230,253'];

            function resize() {
                DPR = Math.min(window.devicePixelRatio || 1, 2);
                W = canvas.width = innerWidth * DPR;
                H = canvas.height = innerHeight * DPR;
                const count = Math.min(420, Math.floor((innerWidth * innerHeight) / 4200));
                stars = Array.from({ length: count }, () => {
                    const z = Math.random();
                    return {
                        x: Math.random() * W, y: Math.random() * H, z,
                        r: (z * 1.4 + .25) * DPR,
                        c: palette[Math.random() < .75 ? 0 : 1 + Math.floor(Math.random() * 3)],
                        tw: Math.random() * Math.PI * 2, ts: .01 + Math.random() * .03,
                    };
                });
            }

            function spawnShooter() {
                const gold = Math.random() < .35;
                shooters.push({
                    x: Math.random() * W * .8 + W * .2, y: Math.random() * H * .4,
                    vx: -(6 + Math.random() * 6) * DPR, vy: (2.5 + Math.random() * 3) * DPR,
                    life: 1, c: gold ? '252,211,77' : '110,231,183',
                });
            }

            function frame() {
                ctx.clearRect(0, 0, W, H);
                mouse.x += (mouse.tx - mouse.x) * .05;
                mouse.y += (mouse.ty - mouse.y) * .05;
                const sy = scrollY * DPR;

                for (const s of stars) {
                    s.tw += s.ts;
                    const a = .35 + Math.sin(s.tw) * .3 + s.z * .35;
                    let x = s.x + mouse.x * s.z * 30 * DPR;
                    let y = (s.y - sy * s.z * .25) % H; if (y < 0) y += H;
                    ctx.beginPath();
                    ctx.fillStyle = `rgba(${s.c},${a})`;
                    ctx.arc(x, y + mouse.y * s.z * 30 * DPR, s.r, 0, Math.PI * 2);
                    ctx.fill();
                    if (s.z > .9) {
                        ctx.fillStyle = `rgba(${s.c},${a * .15})`;
                        ctx.beginPath(); ctx.arc(x, y + mouse.y * s.z * 30 * DPR, s.r * 4, 0, Math.PI * 2); ctx.fill();
                    }
                }

                if (Math.random() < .008) spawnShooter();
                shooters = shooters.filter(sh => sh.life > 0);
                for (const sh of shooters) {
                    const g = ctx.createLinearGradient(sh.x, sh.y, sh.x - sh.vx * 14, sh.y - sh.vy * 14);
                    g.addColorStop(0, `rgba(${sh.c},${sh.life})`);
                    g.addColorStop(1, `rgba(${sh.c},0)`);
                    ctx.strokeStyle = g; ctx.lineWidth = 1.6 * DPR;
                    ctx.beginPath(); ctx.moveTo(sh.x, sh.y); ctx.lineTo(sh.x - sh.vx * 14, sh.y - sh.vy * 14); ctx.stroke();
                    sh.x += sh.vx; sh.y += sh.vy; sh.life -= .012;
                }
                if (!reduce) requestAnimationFrame(frame);
            }
            resize(); frame();
            addEventListener('resize', resize);

            /* ---------- Cursor glow + parallax ---------- */
            const glow = document.getElementById('cursor-glow');
            const orbit = document.getElementById('orbit');
            addEventListener('pointermove', e => {
                mouse.tx = e.clientX / innerWidth - .5;
                mouse.ty = e.clientY / innerHeight - .5;
                if (glow) { glow.style.left = e.clientX + 'px'; glow.style.top = e.clientY + 'px'; }
                if (orbit && !reduce && finePointer) {
                    orbit.style.transform = `rotateX(${mouse.ty * -12}deg) rotateY(${mouse.tx * 12}deg)`;
                }
            });
            if (orbit) { orbit.style.transition = 'transform .6s cubic-bezier(.2,.8,.2,1)'; orbit.parentElement.style.perspective = '1000px'; }

            /* ---------- Card tilt + spotlight ---------- */
            if (finePointer && !reduce) {
                document.querySelectorAll('.tilt').forEach(card => {
                    card.addEventListener('pointermove', e => {
                        const r = card.getBoundingClientRect();
                        const px = (e.clientX - r.left) / r.width, py = (e.clientY - r.top) / r.height;
                        card.style.setProperty('--mx', px * 100 + '%');
                        card.style.setProperty('--my', py * 100 + '%');
                        card.style.transform = `perspective(1100px) rotateX(${(.5 - py) * 6}deg) rotateY(${(px - .5) * 6}deg) translateY(-4px)`;
                    });
                    card.addEventListener('pointerleave', () => { card.style.transform = ''; });
                });
            }

            /* ---------- Reveal + counters ---------- */
            const io = new IntersectionObserver(entries => {
                entries.forEach(en => {
                    if (!en.isIntersecting) return;
                    en.target.classList.add('in');
                    en.target.querySelectorAll('.counter').forEach(c => {
                        const to = +c.dataset.to; const t0 = performance.now();
                        const step = t => {
                            const p = Math.min(1, (t - t0) / 1600);
                            c.textContent = Math.round(to * (1 - Math.pow(1 - p, 3)));
                            if (p < 1) requestAnimationFrame(step);
                        };
                        requestAnimationFrame(step);
                    });
                    io.unobserve(en.target);
                });
            }, { threshold: .12 });
            document.querySelectorAll('.reveal').forEach(el => io.observe(el));

            /* ---------- Navbar: scrolled state + active link ---------- */
            const nav = document.getElementById('navbar');
            const links = document.querySelectorAll('.nav-link');
            const onScroll = () => nav.classList.toggle('nav-scrolled', scrollY > 30);
            addEventListener('scroll', onScroll, { passive: true }); onScroll();
            const so = new IntersectionObserver(entries => {
                entries.forEach(en => {
                    if (en.isIntersecting) links.forEach(l => l.classList.toggle('active', l.dataset.section === en.target.id));
                });
            }, { rootMargin: '-45% 0px -50% 0px' });
            document.querySelectorAll('main section[id]').forEach(s => so.observe(s));

            /* ---------- Mobile menu ---------- */
            const mBtn = document.getElementById('mobile-menu-btn');
            const mMenu = document.getElementById('mobile-menu');
            mBtn.addEventListener('click', () => { mMenu.classList.toggle('hidden'); mMenu.classList.toggle('flex'); });
            document.querySelectorAll('.mobile-link').forEach(l => l.addEventListener('click', () => { mMenu.classList.add('hidden'); mMenu.classList.remove('flex'); }));

            /* ---------- Language menu ---------- */
            const lBtn = document.getElementById('lang-menu-btn');
            const lMenu = document.getElementById('lang-menu');
            const lChev = document.getElementById('lang-chevron');
            lBtn.addEventListener('click', e => { e.stopPropagation(); lMenu.classList.toggle('hidden'); lChev.classList.toggle('rotate-180'); });
            document.addEventListener('click', e => {
                if (!lMenu.contains(e.target)) { lMenu.classList.add('hidden'); lChev.classList.remove('rotate-180'); }
            });
        })();
    </script>
    @livewireScripts
</body>
</html>
