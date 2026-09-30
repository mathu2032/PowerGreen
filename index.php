<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Power Green Energy — Empowering a Sustainable Future with Solar Energy</title>
<meta name="description" content="Power Green Energy designs, installs and maintains residential, commercial and battery-storage solar systems." />

<!-- Tailwind CSS (CDN) -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Typed JS-->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js"></script>

<!-- Google Fonts: Sora (display) + Inter (body) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" >
<!-- Lucide Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lucide-static/0.294.0/umd/lucide.min.js"></script>

<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          ink:        '#0B1F17',
          paper:      '#F5F7F1',
          paper2:     '#EEF2E9',
          emerald:    { DEFAULT: '#0E7C5A', bright: '#17A673', deep: '#0A5C43' },
          slate:      { deep: '#0F2036', mid: '#16314F' },
          sun:        { DEFAULT: '#F2B705', dim: '#C99204' },
          line:       '#D9E2D6',
        },
        fontFamily: {
          display: ['Sora', 'ui-sans-serif', 'system-ui', 'sans-serif'],
          body: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        },
      }
    }
  }
</script>

<style>
  html { scroll-behavior: smooth; }
  body { font-family: 'Inter', sans-serif; background-color: #F5F7F1; color: #0B1F17; }
  h1, h2, h3, h4, .font-display { font-family: 'Sora', sans-serif; }

  /* Solar-cell grid texture used as a recurring motif */
  .cell-grid {
    background-image:
      linear-gradient(to right, rgba(15,32,54,0.06) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(15,32,54,0.06) 1px, transparent 1px);
    background-size: 34px 34px;
  }
  .cell-grid-dark {
    background-image:
      linear-gradient(to right, rgba(245,247,241,0.07) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(245,247,241,0.07) 1px, transparent 1px);
    background-size: 34px 34px;
  }

  /* Sticky header blur state */
  #site-header { transition: background-color .35s ease, box-shadow .35s ease, backdrop-filter .35s ease; }
  #site-header.scrolled {
    background-color: rgba(245,247,241,0.82);
    backdrop-filter: blur(10px);
    box-shadow: 0 1px 0 rgba(15,32,54,0.08);
  }

  .clip-corner { clip-path: polygon(0 0, 100% 0, 100% calc(100% - 28px), calc(100% - 28px) 100%, 0 100%); }

  ::selection { background: #F2B705; color: #0B1F17; }

  /* Mobile nav panel */
  #mobile-nav { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
  #mobile-nav.open { max-height: 420px; }

  .focus-ring:focus-visible { outline: 2px solid #0E7C5A; outline-offset: 3px; }

  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
    * { transition-duration: 0.01ms !important; animation-duration: 0.01ms !important; }
  }
</style>
</head>

<body class="font-body text-ink antialiased">

<!-- ============================= HEADER / NAVIGATION ============================= -->
<header id="site-header" class="fixed top-0 inset-x-0 z-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">

      <!-- Logo -->
      <a href="#home" class="flex items-center gap-2.5 focus-ring rounded-md">
        <span class="relative flex h-10 w-10 items-center justify-center rounded-xl bg-emerald text-paper">
          <!-- leaf + sun hybrid mark -->
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C7 21 3 17 3 12C3 7.5 6.5 4 12 3C17.5 4 21 7.5 21 12C21 17 17 21 12 21Z" fill="#17A673"/>
            <path d="M7 14C9 9 14 7 18 7C17 11 14 15 7 16V14Z" fill="#F2B705"/>
          </svg>
        </span>
        <span class="font-display font-bold text-lg tracking-tight leading-none">
          Power Green<br class="hidden sm:block" /><span class="sm:hidden"> </span>Energy
        </span>
      </a>

      <!-- Desktop nav links -->
      <nav class="hidden lg:flex items-center gap-9 font-medium text-sm text-ink/80">
        <a href="#home" class="hover:text-emerald transition-colors focus-ring rounded-sm">Home</a>
        <a href="#about" class="hover:text-emerald transition-colors focus-ring rounded-sm">About Us</a>
        <a href="#services" class="hover:text-emerald transition-colors focus-ring rounded-sm">Services</a>
        <a href="#plans" class="hover:text-emerald transition-colors focus-ring rounded-sm">Plans</a>
        <a href="#contact" class="hover:text-emerald transition-colors focus-ring rounded-sm">Contact</a>
      </nav>

      <!-- CTA + mobile toggle -->
      <div class="flex items-center gap-3">
        <a href="#contact"
           class="hidden sm:inline-flex items-center justify-center rounded-full bg-emerald hover:bg-emerald-deep text-paper text-sm font-semibold px-5 py-2.5 transition-colors focus-ring">
          Get a Free Quote
        </a>
        <button id="menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false"
                class="lg:hidden inline-flex items-center justify-center h-10 w-10 rounded-lg border border-ink/15 text-ink focus-ring">
          <svg id="icon-open" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
          <svg id="icon-close" class="hidden" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
      </div>
    </div>

    <!-- Mobile nav panel -->
    <div id="mobile-nav" class="lg:hidden">
      <nav class="flex flex-col gap-1 pb-6 font-medium text-ink/85">
        <a href="#home" class="mobile-link px-2 py-3 border-b border-ink/10">Home</a>
        <a href="#about" class="mobile-link px-2 py-3 border-b border-ink/10">About Us</a>
        <a href="#services" class="mobile-link px-2 py-3 border-b border-ink/10">Services</a>
        <a href="#plans" class="mobile-link px-2 py-3 border-b border-ink/10">Plans</a>
        <a href="#contact" class="mobile-link px-2 py-3 border-b border-ink/10">Contact</a>
        <a href="#contact" class="mobile-link mt-4 text-center rounded-full bg-emerald text-paper font-semibold px-5 py-3">Get a Free Quote</a>
      </nav>
    </div>
  </div>
</header>

<!-- ============================= HERO SECTION ============================= -->
<section id="home" class="relative pt-40 pb-0 overflow-hidden bg-paper">
  <div class="absolute inset-0 cell-grid pointer-events-none"></div>
  <div class="absolute -top-24 -right-40 h-96 w-96 rounded-full bg-sun/10 blur-3xl pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-14 items-center">

    <!-- Left: copy -->
    <div>
      <span class="inline-flex items-center gap-2 rounded-full border border-emerald/30 bg-emerald/5 px-3.5 py-1.5 text-xs font-semibold text-emerald-deep">
        <span class="h-1.5 w-1.5 rounded-full bg-emerald"></span>
        Trusted solar partner since 2010
      </span>

   <h1
    class="font-display font-bold text-4xl sm:text-5xl xl:text-[3.4rem] leading-[1.08] tracking-tight mt-6 text-ink">
    <span id="typed-text"></span> </h1>

      <p class="mt-6 text-lg text-ink/70 max-w-xl leading-relaxed">
        Power Green Energy designs, installs and maintains solar systems that lower your bills, cut your carbon footprint,
        and keep the lights on for decades. From a single rooftop to a full commercial grid, we build power you own.
      </p>

      <div class="mt-9 flex flex-wrap items-center gap-4">
        <a href="#plans" class="inline-flex items-center gap-2 rounded-full bg-emerald hover:bg-emerald-deep text-paper font-semibold px-7 py-3.5 transition-colors focus-ring">
          Explore Plans
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        <a href="#contact" class="inline-flex items-center gap-2 rounded-full border border-ink/20 hover:border-ink/40 text-ink font-semibold px-7 py-3.5 transition-colors focus-ring">
          Calculate Savings
        </a>
      </div>
    </div>

    <!-- Right: image composition -->
    <div class="relative">
      <div class="rounded-3xl overflow-hidden clip-corner shadow-xl shadow-ink/10 ring-1 ring-ink/5">
        <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?q=80&w=1200&auto=format&fit=crop"
             alt="Solar panels installed on a residential rooftop at sunrise"
             class="w-full h-[420px] sm:h-[480px] object-cover" />
      </div>

      <!-- floating stat chip -->
      <div class="absolute -bottom-7 -left-6 sm:-left-10 bg-slate-deep text-paper rounded-2xl px-5 py-4 shadow-xl shadow-ink/20 w-48">
        <p class="font-display font-bold text-2xl text-sun">25 yrs</p>
        <p class="text-xs text-paper/70 mt-1 leading-snug">Performance warranty on every panel we install</p>
      </div>
    </div>
  </div>

  <!-- Quick stats banner -->
  <div class="relative mt-24 border-t border-ink/10 bg-slate-deep cell-grid-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10 grid grid-cols-2 lg:grid-cols-4 divide-x divide-paper/10">
      <div class="px-4 sm:px-6 first:pl-0">
        <p class="font-display font-bold text-3xl text-paper">10,000+</p>
        <p class="text-paper/60 text-sm mt-1">Installations completed</p>
      </div>
      <div class="px-4 sm:px-6">
        <p class="font-display font-bold text-3xl text-paper">98%</p>
        <p class="text-paper/60 text-sm mt-1">Customer satisfaction</p>
      </div>
      <div class="px-4 sm:px-6">
        <p class="font-display font-bold text-3xl text-paper">25-yr</p>
        <p class="text-paper/60 text-sm mt-1">Product &amp; performance warranty</p>
      </div>
      <div class="px-4 sm:px-6">
        <p class="font-display font-bold text-3xl text-paper">$2M+</p>
        <p class="text-paper/60 text-sm mt-1">Saved on client energy bills</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================= ABOUT US SECTION ============================= -->
<section id="about" class="bg-paper py-24 lg:py-28">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-12 gap-14">

    <div class="lg:col-span-5">
      <h2 class="font-display font-bold text-3xl sm:text-4xl leading-tight text-ink">
        Built by engineers who believe power should be clean, local and yours
      </h2>
      <p class="mt-5 text-ink/70 leading-relaxed">
        Power Green Energy started with a simple premise: every roof is a power plant waiting to happen.
        Today our licensed crews design and install systems sized to the way you actually live and work —
        not a generic package — backed by monitoring and support long after the install truck leaves.
      </p>
      <a href="#contact" class="mt-7 inline-flex items-center gap-2 text-emerald font-semibold hover:text-emerald-deep transition-colors focus-ring rounded-sm">
        Talk to our design team
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>

    <!-- Feature highlights -->
    <div class="lg:col-span-7 grid sm:grid-cols-2 gap-6">
      <div class="rounded-2xl border border-line bg-white/60 p-6">
        <div class="h-11 w-11 rounded-xl bg-emerald/10 flex items-center justify-center text-emerald">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg mt-4">High efficiency</h3>
        <p class="text-sm text-ink/65 mt-2 leading-relaxed">Tier-1 panels rated up to 22.8% efficiency, engineered for maximum output on every roof orientation.</p>
      </div>

      <div class="rounded-2xl border border-line bg-white/60 p-6">
        <div class="h-11 w-11 rounded-xl bg-sun/15 flex items-center justify-center text-sun-dim">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg mt-4">Expert installation</h3>
        <p class="text-sm text-ink/65 mt-2 leading-relaxed">NABCEP-certified crews handle permitting, mounting and inspection so you don't have to.</p>
      </div>

      <div class="rounded-2xl border border-line bg-white/60 p-6">
        <div class="h-11 w-11 rounded-xl bg-slate-deep/10 flex items-center justify-center text-slate-deep">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg mt-4">Long-term warranty</h3>
        <p class="text-sm text-ink/65 mt-2 leading-relaxed">25-year product and performance coverage, plus a 10-year workmanship guarantee on labor.</p>
      </div>

      <div class="rounded-2xl border border-line bg-white/60 p-6">
        <div class="h-11 w-11 rounded-xl bg-emerald/10 flex items-center justify-center text-emerald">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg mt-4">24/7 monitoring</h3>
        <p class="text-sm text-ink/65 mt-2 leading-relaxed">Real-time production alerts from our app catch issues before they cost you a single kWh.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================= SERVICES SECTION ============================= -->
<section id="services" class="bg-paper2 py-24 lg:py-28 border-t border-line">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="max-w-2xl">
      <h2 class="font-display font-bold text-3xl sm:text-4xl text-ink">What we install and maintain</h2>
      <p class="mt-4 text-ink/70 leading-relaxed">Four core services cover the full life of a solar system — from first design to years of upkeep.</p>
    </div>

    <div class="mt-14 grid lg:grid-cols-2 gap-6">

      <!-- Featured: Residential (larger) -->
      <div class="lg:row-span-2 rounded-3xl bg-slate-deep text-paper p-9 flex flex-col justify-between overflow-hidden relative">
        <div class="absolute inset-0 cell-grid-dark pointer-events-none"></div>
        <div class="relative">
          <div class="h-12 w-12 rounded-xl bg-sun flex items-center justify-center text-slate-deep">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3 class="font-display font-semibold text-2xl mt-6">Residential solar setup</h3>
          <p class="text-paper/65 mt-3 leading-relaxed max-w-sm">Customized rooftop solutions sized to your household's usage, roof shape and local sun hours — designed for maximum savings from day one.</p>
        </div>
        <div class="relative mt-10 rounded-2xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?q=80&w=900&auto=format&fit=crop" alt="Rows of residential solar panels on a shingled roof" class="w-full h-44 object-cover" />
        </div>
      </div>

      <!-- Commercial -->
      <div class="rounded-3xl border border-line bg-white/70 p-8">
        <div class="h-11 w-11 rounded-xl bg-emerald/10 flex items-center justify-center text-emerald">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="14" rx="1"/><path d="M9 21V7l6-4v18"/></svg>
        </div>
        <h3 class="font-display font-semibold text-xl mt-5">Commercial solar systems</h3>
        <p class="text-sm text-ink/65 mt-2.5 leading-relaxed">High-capacity generation for businesses, warehouses and industrial hubs, engineered to cut peak-demand charges.</p>
      </div>

      <!-- Battery storage -->
      <div class="rounded-3xl border border-line bg-white/70 p-8">
        <div class="h-11 w-11 rounded-xl bg-sun/15 flex items-center justify-center text-sun-dim">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="6" width="18" height="12" rx="2"/><line x1="23" y1="13" x2="23" y2="11"/><line x1="5" y1="10" x2="5" y2="14"/></svg>
        </div>
        <h3 class="font-display font-semibold text-xl mt-5">Battery storage solutions</h3>
        <p class="text-sm text-ink/65 mt-2.5 leading-relaxed">Store what you generate for uninterrupted power overnight, during outages, or fully off-grid.</p>
      </div>

      <!-- Maintenance -->
      <div class="rounded-3xl border border-line bg-white/70 p-8">
        <div class="h-11 w-11 rounded-xl bg-slate-deep/10 flex items-center justify-center text-slate-deep">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
        </div>
        <h3 class="font-display font-semibold text-xl mt-5">Maintenance &amp; repairs</h3>
        <p class="text-sm text-ink/65 mt-2.5 leading-relaxed">Health checks, panel cleaning and rapid repairs keep every system performing at its rated output.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================= PLANS / PRICING SECTION ============================= -->
<section id="plans" class="bg-paper py-24 lg:py-28">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center">
      <h2 class="font-display font-bold text-3xl sm:text-4xl text-ink">Plans for every roof and load</h2>
      <p class="mt-4 text-ink/70 leading-relaxed">Transparent packages with no hidden install fees. Every plan includes permitting and a 25-year warranty.</p>
    </div>

    <div class="mt-14 grid lg:grid-cols-3 gap-8 items-start">

      <!-- Starter -->
      <div class="rounded-3xl border border-line bg-white/70 p-8">
        <h3 class="font-display font-semibold text-xl">Starter Pack</h3>
        <p class="text-sm text-ink/60 mt-1">Residential basic</p>
        <p class="mt-6"><span class="font-display font-bold text-4xl">$4,999</span><span class="text-ink/50 text-sm"> / install</span></p>
        <p class="text-sm text-ink/65 mt-3 leading-relaxed">Ideal for small homes and low energy usage looking to start saving right away.</p>

        <ul class="mt-7 space-y-3.5 text-sm text-ink/75">
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-emerald" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>4kW panel array</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-emerald" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Standard inverter</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-emerald" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Basic app monitoring</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-emerald" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>25-year warranty</li>
        </ul>

        <a href="#contact" class="mt-8 block text-center rounded-full border border-ink/20 hover:border-ink/40 font-semibold py-3 transition-colors focus-ring">Choose Plan</a>
      </div>

      <!-- Pro Eco (featured) -->
      <div class="rounded-3xl bg-slate-deep text-paper p-8 lg:-translate-y-4 shadow-xl shadow-ink/20 relative overflow-hidden">
        <div class="absolute inset-0 cell-grid-dark pointer-events-none"></div>
        <span class="relative inline-flex items-center gap-1.5 rounded-full bg-sun text-slate-deep text-xs font-bold px-3 py-1.5">Most popular</span>
        <h3 class="relative font-display font-semibold text-xl mt-4">Pro Eco Pack</h3>
        <p class="relative text-sm text-paper/60 mt-1">Full home + battery backup</p>
        <p class="relative mt-6"><span class="font-display font-bold text-4xl">$11,499</span><span class="text-paper/50 text-sm"> / install</span></p>
        <p class="relative text-sm text-paper/70 mt-3 leading-relaxed">Full home setup with optional battery backup and smart monitoring for the way you actually use power.</p>

        <ul class="relative mt-7 space-y-3.5 text-sm text-paper/85">
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>8kW panel array</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Battery backup ready</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Smart app monitoring</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Priority support line</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>25-year warranty</li>
        </ul>

        <a href="#contact" class="relative mt-8 block text-center rounded-full bg-sun hover:bg-sun-dim text-slate-deep font-semibold py-3 transition-colors focus-ring">Choose Plan</a>
      </div>

      <!-- Commercial -->
      <div class="rounded-3xl border border-line bg-white/70 p-8">
        <h3 class="font-display font-semibold text-xl">Commercial Enterprise</h3>
        <p class="text-sm text-ink/60 mt-1">Custom heavy-duty grid</p>
        <p class="mt-6"><span class="font-display font-bold text-4xl">Custom</span></p>
        <p class="text-sm text-ink/65 mt-3 leading-relaxed">Site-audited, heavy-duty solar grids sized to your business's real load and growth plans.</p>

        <ul class="mt-7 space-y-3.5 text-sm text-ink/75">
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-emerald" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Custom-sized array</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-emerald" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Dedicated project manager</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-emerald" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Grid + battery hybrid options</li>
          <li class="flex items-start gap-2.5"><svg class="mt-0.5 shrink-0 text-emerald" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>25-year warranty</li>
        </ul>

        <a href="#contact" class="mt-8 block text-center rounded-full border border-ink/20 hover:border-ink/40 font-semibold py-3 transition-colors focus-ring">Choose Plan</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================= CTA / CONTACT FORM BANNER ============================= -->
<section id="contact" class="relative bg-slate-deep py-24 lg:py-28 overflow-hidden">
  <div class="absolute inset-0 cell-grid-dark pointer-events-none"></div>
  <div class="absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-emerald/20 blur-3xl pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-14 items-center">

    <div>
      <h2 class="font-display font-bold text-3xl sm:text-4xl text-paper leading-tight">
        Get a free solar consultation and site audit
      </h2>
      <p class="mt-5 text-paper/65 leading-relaxed max-w-md">
        Tell us a bit about your property and one of our solar consultants will follow up within one business day
        with a no-obligation savings estimate.
      </p>

      <div class="mt-9 space-y-4 text-sm text-paper/75">
        <div class="flex items-center gap-3">
          <span class="h-9 w-9 rounded-lg bg-paper/10 flex items-center justify-center text-sun"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
          <span><a href = "tel:+94756806868">+94756806868</a></span>
        </div>
        <div class="flex items-center gap-3">
          <span class="h-9 w-9 rounded-lg bg-paper/10 flex items-center justify-center text-sun"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z" opacity="0"/><path d="M22 6l-10 7L2 6"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg></span>
          <span><a href = "mailto:hello@powergreenenergy.com">hello@powergreenenergy.com</a></span>
        </div>
      </div>
    </div>

    <!-- Quote form -->
    <form class="relative bg-paper rounded-3xl p-7 sm:p-9 shadow-xl shadow-ink/20" onsubmit="return false;">
      <div class="grid sm:grid-cols-2 gap-5">
        <div>
          <label for="name" class="block text-xs font-semibold text-ink/70 mb-1.5">Full name</label>
          <input id="name" type="text" placeholder="Jordan Parker" class="w-full rounded-xl border border-ink/15 bg-white px-4 py-2.5 text-sm focus-ring focus:outline-none focus:border-emerald" />
        </div>
        <div>
          <label for="phone" class="block text-xs font-semibold text-ink/70 mb-1.5">Phone</label>
          <input id="phone" type="tel" placeholder="(555) 123-4567" class="w-full rounded-xl border border-ink/15 bg-white px-4 py-2.5 text-sm focus-ring focus:outline-none focus:border-emerald" />
        </div>
      </div>

      <div class="mt-5">
        <label for="email" class="block text-xs font-semibold text-ink/70 mb-1.5">Email address</label>
        <input id="email" type="email" placeholder="jordan@email.com" class="w-full rounded-xl border border-ink/15 bg-white px-4 py-2.5 text-sm focus-ring focus:outline-none focus:border-emerald" />
      </div>

      <div class="mt-5">
        <label for="property" class="block text-xs font-semibold text-ink/70 mb-1.5">Property type</label>
        <select id="property" class="w-full rounded-xl border border-ink/15 bg-white px-4 py-2.5 text-sm focus-ring focus:outline-none focus:border-emerald">
          <option>Residential</option>
          <option>Commercial</option>
          <option>Industrial</option>
        </select>
      </div>

      <button type="submit" class="mt-7 w-full rounded-full bg-emerald hover:bg-emerald-deep text-paper font-semibold py-3.5 transition-colors focus-ring">
        Request my free audit
      </button>
      <p class="mt-3 text-center text-xs text-ink/45">No spam. No obligation. Just a real savings estimate.</p>
    </form>
  </div>
</section>

<!-- ============================= FOOTER ============================= -->
<footer class="bg-[#0A1826] text-paper/70 pt-16 pb-8">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-10">

    <div class="lg:col-span-1">
      <a href="#home" class="flex items-center gap-2.5">
        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21C7 21 3 17 3 12C3 7.5 6.5 4 12 3C17.5 4 21 7.5 21 12C21 17 17 21 12 21Z" fill="#17A673"/><path d="M7 14C9 9 14 7 18 7C17 11 14 15 7 16V14Z" fill="#F2B705"/></svg>
        </span>
        <span class="font-display font-bold text-paper text-base">Power Green Energy</span>
      </a>
      <p class="mt-4 text-sm leading-relaxed max-w-xs">Empowering a sustainable future with solar energy — for homes, businesses and everything in between.</p>

      <div class="flex items-center gap-3 mt-6">
        <a href="#" aria-label="Facebook" class="h-9 w-9 rounded-full border border-paper/15 flex items-center justify-center hover:border-emerald hover:text-emerald transition-colors focus-ring"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 1 0-11.5 9.9v-7H8v-2.9h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.6v1.9H16l-.4 2.9h-2.1v7A10 10 0 0 0 22 12z"/></svg></a>
        <a href="#" aria-label="Instagram" class="h-9 w-9 rounded-full border border-paper/15 flex items-center justify-center hover:border-emerald hover:text-emerald transition-colors focus-ring"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/></svg></a>
        <a href="#" aria-label="LinkedIn" class="h-9 w-9 rounded-full border border-paper/15 flex items-center justify-center hover:border-emerald hover:text-emerald transition-colors focus-ring"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.94 6.5a1.94 1.94 0 1 1 0-3.88 1.94 1.94 0 0 1 0 3.88zM5 8.5h4V21H5V8.5zM10.5 8.5H14v1.7h.06c.5-.9 1.7-1.9 3.5-1.9 3.7 0 4.4 2.4 4.4 5.6V21h-4v-5.6c0-1.3 0-3-1.8-3s-2.1 1.4-2.1 2.9V21h-4V8.5z"/></svg></a>
      </div>
    </div>

    <div>
      <h4 class="text-paper font-display font-semibold text-sm">Quick links</h4>
      <ul class="mt-4 space-y-3 text-sm">
        <li><a href="#home" class="hover:text-paper transition-colors">Home</a></li>
        <li><a href="#about" class="hover:text-paper transition-colors">About Us</a></li>
        <li><a href="#services" class="hover:text-paper transition-colors">Services</a></li>
        <li><a href="#plans" class="hover:text-paper transition-colors">Plans</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-paper font-display font-semibold text-sm">Services</h4>
      <ul class="mt-4 space-y-3 text-sm">
        <li><a href="#services" class="hover:text-paper transition-colors">Residential Solar</a></li>
        <li><a href="#services" class="hover:text-paper transition-colors">Commercial Solar</a></li>
        <li><a href="#services" class="hover:text-paper transition-colors">Battery Storage</a></li>
        <li><a href="#services" class="hover:text-paper transition-colors">Maintenance &amp; Repairs</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-paper font-display font-semibold text-sm">Contact</h4>
      <ul class="mt-4 space-y-3 text-sm">
        <li>hello@powergreenenergy.com</li>
        <li>+94756806868</li>
        <li>Tample Road Jaffna Sri Lanka</li>
      </ul>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-14 pt-6 border-t border-paper/10 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-paper/45">
    <p>© <?= date("Y")?> Power Green Energy. All rights reserved.</p>
    <p>Empowering a sustainable future with solar energy.</p>
  </div>
</footer>

<a
    href="https://wa.me/94756806868?text=Hello%2C%20I%20would%20like%20to%20know%20more."
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat with us on WhatsApp"
    class="fixed bottom-6 right-6 z-50
           flex h-14 w-14 items-center justify-center
           rounded-full bg-[#25D366]
           text-white shadow-lg
           transition-all duration-300
           hover:scale-110 hover:shadow-xl"
>
    <i class="fa-brands fa-whatsapp text-3xl"></i>
</a>

<!-- JAVASCRIPT -->
<script>
  // Mobile nav toggle
  const menuToggle = document.getElementById('menu-toggle');
  const mobileNav = document.getElementById('mobile-nav');
  const iconOpen = document.getElementById('icon-open');
  const iconClose = document.getElementById('icon-close');

  function closeMenu() {
    mobileNav.classList.remove('open');
    menuToggle.setAttribute('aria-expanded', 'false');
    iconOpen.classList.remove('hidden');
    iconClose.classList.add('hidden');
  }

  menuToggle.addEventListener('click', () => {
    const isOpen = mobileNav.classList.toggle('open');
    menuToggle.setAttribute('aria-expanded', String(isOpen));
    iconOpen.classList.toggle('hidden', isOpen);
    iconClose.classList.toggle('hidden', !isOpen);
  });

  document.querySelectorAll('.mobile-link').forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // Sticky header blur on scroll
  const header = document.getElementById('site-header');
  const onScroll = () => {
    if (window.scrollY > 12) header.classList.add('scrolled');
    else header.classList.remove('scrolled');
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();



new Typed("#typed-text", {
        strings: [
            "Empowering a sustainable future with solar energy", "Powering homes with clean energy", "Building a greener tomorrow"
        ],
        typeSpeed: 50,
        backSpeed: 30,
        startDelay: 500,
        loop: true,
        startDelay: 500,
        showCursor: true,
        //cursorChar: "|"
    });
</script>

</body>
</html>
