<?php
// services.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic SEO -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="CPTCR Hosting Services – Explore our hosting solutions: Free, Software, VPS, MiniVPS, Coding Language, Database, and Games." />
  <meta name="keywords" content="CPTCR Hosting, services, free, software, VPS, miniVPS, coding language, database, games" />
  <meta name="author" content="CPTCR Hosting" />
  <title>CPTCR Hosting | Services</title>
  
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontSize: {
            '2xs': '0.7rem',
            'sm': '0.875rem',
            'base': '1rem',
            'lg': '1.125rem',
            'xl': '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.875rem',
            '4xl': '2.25rem',
            '5xl': '3rem',
            '6xl': '3.75rem',
            '7xl': '4.5rem'
          },
          colors: {
            primary: '#000000',
            secondary: '#111111',
            accent: '#E94560'
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' }
            },
            slideDown: {
              '0%': { transform: 'translateY(-100%)' },
              '100%': { transform: 'translateY(0)' }
            }
          },
          animation: {
            fadeIn: 'fadeIn 0.6s ease-out',
            slideDown: 'slideDown 0.5s ease-out'
          }
        }
      }
    }
  </script>
  <style>
    /* Basic page styling */
    html, body {
      height: 100%;
      margin: 0;
      scroll-behavior: smooth;
      scroll-snap-type: y mandatory;
      overflow-y: scroll;
      background-color: #000;
      font-family: 'Inter', sans-serif;
      color: #ddd;
      font-size: 1.125rem;
    }
    /* Glass effect for content boxes */
    .glass {
      background: rgba(0, 0, 0, 0.65);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 8px;
      padding: 1.5rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    }
    a.btn {
      display: inline-block;
      margin-top: 1rem;
      background: #E94560;
      padding: 0.6rem 1.2rem;
      border-radius: 9999px;
      color: #fff;
      font-weight: 600;
      font-size: 0.9rem;
      text-decoration: none;
      transition: background 0.3s ease;
    }
    a.btn:hover {
      background: #d13f55;
    }
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #111;
    }
    ::-webkit-scrollbar-thumb {
      background: #E94560;
      border-radius: 4px;
    }
    /* Navbar (use 1:1 from index) */
    nav.navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 50;
      padding: 1rem 2rem;
      background: linear-gradient(90deg, #000, #111, #000);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    nav.navbar a {
      color: #E94560;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    nav.navbar a:hover {
      color: #fff;
    }
    /* Desktop Navbar */
    .navbar .desktop {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navbar .desktop .links {
      display: flex;
      gap: 1.5rem;
    }
    .navbar .desktop .links a {
      font-size: 1rem;
    }
    @media (max-width: 767px) {
      .navbar .desktop { display: none; }
    }
    /* Mobile Navbar */
    .navbar .mobile {
      display: none;
    }
    @media (max-width: 767px) {
      .navbar .mobile { display: block; }
    }
    /* Mobile Menu Button & Menu */
    .navbar .mobile .menu-btn {
      background: none;
      border: none;
      color: #fff;
    }
    #mobile-menu {
      display: none;
      overflow: hidden;
    }
    #mobile-menu ul {
      list-style: none;
      margin: 0;
      padding: 0.5rem 1rem;
    }
    #mobile-menu li {
      margin: 0.5rem 0;
      font-size: 1rem;
    }
    #mobile-menu li a {
      color: #E94560;
      text-decoration: none;
      transition: color 0.3s;
    }
    #mobile-menu li a:hover {
      color: #fff;
    }
    /* Hero Section */
    section#hero {
      padding-top: 7rem;
      padding-bottom: 4rem;
      text-align: center;
    }
    section#hero h1 {
      font-size: 3rem;
      font-weight: 800;
      color: #fff;
    }
    section#hero h1 span {
      color: #E94560;
    }
    section#hero p {
      font-size: 1.25rem;
      color: #aaa;
      margin-bottom: 1.5rem;
    }
    /* Services Grid */
    .service-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
      padding: 2rem 0;
    }
    @media (min-width: 768px) {
      .service-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (min-width: 1024px) {
      .service-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }
    .card {
      background: rgba(0, 0, 0, 0.75);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 12px;
      padding: 1.5rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.5);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.7);
    }
    .card h2 {
      font-size: 1.5rem;
      font-weight: 700;
      color: #E94560;
      margin-bottom: 0.75rem;
    }
    .card p {
      margin-bottom: 1rem;
      line-height: 1.5;
    }
    /* Footer */
    footer {
      background: #000;
      padding: 1.5rem 0;
      border-top: 1px solid rgba(255,255,255,0.1);
      text-align: center;
    }
    footer p {
      color: #aaa;
      margin: 0.5rem 0;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <!-- Desktop Navbar -->
    <div class="desktop flex justify-between items-center">
      <a href="/" class="text-2xl font-bold">CPTCR Hosting</a>
      <div class="links">
        <a href="/">Overview</a>
        <a href="/services">Services</a>
        <a href="/about-us">About Us</a>
        <a href="/roadmap">Roadmap</a>
        <a href="/contact">Contact</a>
        <a href="/discord">Discord</a>
      </div>
    </div>
    <!-- Mobile Navbar -->
    <div class="mobile flex justify-between items-center">
      <a href="/" class="text-2xl font-bold">CPTCR Hosting</a>
      <button id="menu-btn" class="menu-btn focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden">
      <ul>
        <li><a href="/">Overview</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/about-us">About Us</a></li>
        <li><a href="/roadmap">Roadmap</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/discord">Discord</a></li>
      </ul>
    </div>
  </nav>
  
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      // Toggle mobile menu display
      if (mobileMenu.style.display === "block") {
        mobileMenu.style.display = "none";
      } else {
        mobileMenu.style.display = "block";
      }
    });
  </script>
  
  <!-- Hero Section -->
  <section id="hero" class="container mx-auto text-center animate-fadeIn">
    <h1 class="text-5xl md:text-7xl font-extrabold mb-4">
      Our <span class="text-accent">Services</span>
    </h1>
    <p class="text-xl md:text-2xl text-gray-400 mb-6">
      Explore our hosting solutions tailored to meet your needs.
    </p>
  </section>
  
  <!-- Services Grid -->
  <section id="services" class="container mx-auto py-16 animate-fadeIn">
    <div class="service-grid">
      <!-- Free -->
      <div class="card">
        <h2>Free</h2>
        <p>Cost-effective hosting for newcomers and small projects.</p>
        <a href="https://cptcr.shop/free" target="_blank" class="btn">Learn More</a>
      </div>
      <!-- Software -->
      <div class="card">
        <h2>Software</h2>
        <p>Host popular software applications seamlessly.</p>
        <a href="https://cptcr.shop/software" target="_blank" class="btn">Learn More</a>
      </div>
      <!-- VPS -->
      <div class="card">
        <h2>VPS</h2>
        <p>Dedicated resources and full root access for scalable projects.</p>
        <a href="https://cptcr.shop/vps" target="_blank" class="btn">Learn More</a>
      </div>
      <!-- MiniVPS -->
      <div class="card">
        <h2>MiniVPS</h2>
        <p>Economical hosting with essential resources for small-scale projects.</p>
        <a href="https://cptcr.shop/mini-vps" target="_blank" class="btn">Learn More</a>
      </div>
      <!-- Coding Language -->
      <div class="card">
        <h2>Coding Language</h2>
        <p>A versatile development environment supporting multiple programming languages.</p>
        <a href="https://cptcr.shop/coding-languages" target="_blank" class="btn">Learn More</a>
      </div>
      <!-- Database -->
      <div class="card">
        <h2>Database</h2>
        <p>Optimized servers for secure and high-performance data management.</p>
        <a href="https://cptcr.shop/database" target="_blank" class="btn">Learn More</a>
      </div>
      <!-- Games -->
      <div class="card">
        <h2>Games</h2>
        <p>High-performance game servers for an immersive multiplayer experience.</p>
        <a href="https://cptcr.shop/games" target="_blank" class="btn">Learn More</a>
      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <footer class="bg-black py-8 mt-6">
    <div class="container mx-auto text-center">
      <p class="text-gray-400 text-base md:text-lg">&copy; <script>document.write(new Date().getFullYear());</script> CPTCR Hosting. All rights reserved.</p>
      <p class="text-gray-500 text-sm mt-2">
        Contact us at <a href="mailto:support@cptcr.cc" class="text-accent">support@cptcr.cc</a>
      </p>
    </div>
  </footer>
</body>
</html>
