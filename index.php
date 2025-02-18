<?php
// index.php
$adminApiKey = "";

function fetchApiData($url, $adminApiKey) {
    $options = [
        'http' => [
            'header' => "Accept: application/json\r\n" .
                        "Content-Type: application/json\r\n" .
                        "Authorization: Bearer $adminApiKey\r\n",
            'method' => "GET",
            'ignore_errors' => false,
        ]
    ];
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    return $response ? json_decode($response, true) : null;
}

// Fetch live stats from your Pterodactyl panel
$userUrl = "https://panel.cptcr.cc/api/application/users";
$userData = fetchApiData($userUrl, $adminApiKey);
$user_count = isset($userData['meta']['pagination']['total']) ? $userData['meta']['pagination']['total'] : 'N/A';

$serverUrl = "https://panel.cptcr.cc/api/application/servers";
$serverData = fetchApiData($serverUrl, $adminApiKey);
$server_count = isset($serverData['meta']['pagination']['total']) ? $serverData['meta']['pagination']['total'] : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic SEO -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="CPTCR Hosting – German-based hosting solutions: free servers, VPS, Minecraft, Discord bot, and database hosting with transparent pricing and robust security." />
  <meta name="keywords" content="CPTCR Hosting, hosting, VPS, Minecraft, Discord bot, database hosting, free servers, transparent pricing, secure hosting" />
  <meta name="author" content="CPTCR Hosting" />
  <title>CPTCR Hosting | Empowering Your Digital Future</title>
  
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
            }
          },
          animation: {
            fadeIn: 'fadeIn 1.2s ease-out'
          }
        }
      }
    }
  </script>
  <style>
    body {
      background-color: #000;
      color: #ddd;
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
      font-size: 1.125rem; /* ~18px base */
    }
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
      font-size: 0.9rem; /* slightly bigger than text-sm */
      transition: background 0.3s ease;
    }
    a.btn:hover {
      background: #d13f55;
    }
    /* Minimal dark navbar with accent links */
    .navbar {
      background: #000;
      opacity: 0.95;
      box-shadow: 0 2px 10px rgba(0,0,0,0.7);
    }
    .navbar a {
      color: #E94560;
      font-weight: 600;
      transition: color 0.3s ease;
      font-size: 1rem;
    }
    .navbar a:hover {
      color: #fff;
    }
    /* Mobile menu transitions */
    #mobile-menu {
      transition: max-height 0.3s ease-in-out;
    }
    #mobile-menu ul {
      padding: 0.5rem;
    }
    #mobile-menu li {
      margin: 0.25rem 0;
      font-size: 0.9rem;
      text-align: center;
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
  </style>
</head>
<body class="antialiased">
  <!-- Simplified Navbar with only the most important links -->
  <nav class="navbar fixed top-0 left-0 w-full z-50 py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
      <a href="#home" class="text-xl md:text-2xl font-bold">CPTCR Hosting</a>
      <div class="hidden md:flex items-center space-x-4">
        <a href="#feature1">Overview</a>
        <a href="#feature2">Services</a>
        <a href="#feature4">Pricing</a>
        <a href="#feature9">Community</a>
        <a href="#feature10">Vision</a>
        <a href="#ping">Ping Test</a>
      </div>
      <div class="md:hidden">
        <button id="menu-btn" class="focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden max-h-0 overflow-hidden">
      <ul class="space-y-1 text-sm">
        <li><a href="#feature1" class="block">Overview</a></li>
        <li><a href="#feature2" class="block">Services</a></li>
        <li><a href="#feature4" class="block">Pricing</a></li>
        <li><a href="#feature9" class="block">Community</a></li>
        <li><a href="#feature10" class="block">Vision</a></li>
        <li><a href="#ping" class="block">Ping Test</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="pt-28 pb-16 container mx-auto text-center animate-fadeIn">
    <h1 class="text-5xl md:text-7xl font-extrabold mb-4">
      Empowering Your <span class="text-accent">Digital Future</span>
    </h1>
    <p class="text-xl md:text-2xl text-gray-400 mb-6">
      High-performance, secure, and community-driven hosting solutions for every project.
    </p>
    <a href="https://cptcr.shop" class="btn">Launch Your Project</a>
  </section>

  <!-- Features: Use flex-col, md:flex-row for odd, and md:flex-row-reverse for even.
       That ensures on mobile (default) the title is above the glass box,
       while on larger screens the layout alternates. -->

  <!-- Feature #1 (Odd) => md:flex-row -->
  <section id="feature1" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row gap-6 text-center md:text-left">
      <!-- Title left (no box) -->
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">CPTCR Hosting Overview</h2>
      </div>
      <!-- Desc right (glass + button) -->
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            CPTCR Hosting is a German-based provider offering free servers, VPS, Minecraft, Discord bot, and database hosting. We emphasize transparent pricing, robust security, and reliable uptime.
          </p>
          <a href="https://cptcr.shop" class="btn">Ready to Take Flight?</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #2 (Even) => md:flex-row-reverse -->
  <section id="feature2" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row-reverse gap-6 text-center md:text-right">
      <!-- Title (no box) on the "right" for large screens, but first in HTML on mobile -->
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Our Services</h2>
      </div>
      <!-- Desc (glass + button) on the "left" for large screens -->
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Our services cater to gamers, developers, and businesses—from advanced VPS hosting to optimized Minecraft and Discord bot hosting. Tailor solutions to your exact needs.
          </p>
          <a href="https://cptcr.shop" class="btn">Explore Our Services</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #3 (Odd) => md:flex-row -->
  <section id="feature3" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row gap-6 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Robust Infrastructure</h2>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Built on Intel Xeon (E5-2667 v4, E5-2643 v2) and NVMe/SSD storage, our nodes (nl1, nl2, nl3, cptcr.shop) deliver dual 10Gbps connectivity, DDoS protection, and automated backups.
          </p>
          <a href="https://cptcr.shop" class="btn">View Our Nodes</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #4 (Even) => md:flex-row-reverse -->
  <section id="feature4" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row-reverse gap-6 text-center md:text-right">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Pricing &amp; Transparency</h2>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Our transparent pricing starts at €3.99 for premium plans, plus free forever servers. No hidden fees—pay only for what you need.
          </p>
          <a href="https://cptcr.shop" class="btn">Discover Pricing</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #5 (Odd) => md:flex-row -->
  <section id="feature5" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row gap-6 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Developer Tools &amp; APIs</h2>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Our GitHub hosts open-source projects (Linux Bot, Discord–Minecraft Whitelist Bot, Server Metrics API) and advanced APIs for seamless server management—ideal for developers.
          </p>
          <a href="https://github.com/cptcr-hosting" class="btn" target="_blank">Visit Our GitHub</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #6 (Even) => md:flex-row-reverse -->
  <section id="feature6" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row-reverse gap-6 text-center md:text-right">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Free Forever Servers</h2>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Enjoy free forever servers with unlimited subdomains—ideal for smaller projects or newcomers. Upgrade anytime as your needs evolve.
          </p>
          <a href="https://cptcr.shop/free" class="btn">Get Free Hosting</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #7 (Odd) => md:flex-row -->
  <section id="feature7" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row gap-6 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Partnerships &amp; Tech</h2>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Partnering with Hinkos Discord, Ultra-Meloncrafter, Coders Hub, Nub Bot, and Spark. Our platform integrates LumenVM, Cloudflare, Pterodactyl, and Paymenter for high-performance, secure hosting.
          </p>
          <a href="https://cptcr.shop" class="btn">Join Our Network</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #8 (Even) => md:flex-row-reverse -->
  <section id="feature8" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row-reverse gap-6 text-center md:text-right">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Future Enhancements</h2>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            CPTCR Hosting continues to evolve—integrating AWS, Google Cloud, and Azure while expanding developer APIs to keep you at the forefront of hosting technology.
          </p>
          <a href="https://cptcr.cc" class="btn" target="_blank">See Our Roadmap</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #9 (Odd) => md:flex-row -->
  <section id="feature9" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row gap-6 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Community &amp; Support</h2>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Our Discord (discord.gg/z8nxPve4pn) and ticketing system provide 24/7 support in a friendly, SFW community. Join thousands for collaboration, troubleshooting, and feedback.
          </p>
          <a href="https://cptcr.shop" class="btn">24/7 Help</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature #10 (Even) => md:flex-row-reverse -->
  <section id="feature10" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row-reverse gap-6 text-center md:text-right">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Our Vision</h2>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Founded by Tony, a dedicated technologist from Germany, CPTCR Hosting emphasizes open-source collaboration, developer-centric features, and community engagement for all hosting needs.
          </p>
          <a href="https://cptcr.shop" class="btn">Join Our Vision</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section (7 services, also alternating) -->
  <section id="services" class="container mx-auto py-16 animate-fadeIn">
    <h2 class="text-5xl font-bold text-center mb-8 text-accent">All Services</h2>

    <!-- Service #1 (Odd) => md:flex-row -->
    <div class="flex flex-col md:flex-row gap-6 mb-8 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h3 class="text-3xl md:text-4xl font-bold text-accent">Free Hosting</h3>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Permanently free servers with unlimited subdomains—perfect for smaller or experimental projects.
          </p>
          <a href="https://cptcr.shop/free" class="btn" target="_blank">Get Started</a>
        </div>
      </div>
    </div>

    <!-- Service #2 (Even) => md:flex-row-reverse -->
    <div class="flex flex-col md:flex-row-reverse gap-6 mb-8 text-center md:text-right">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h3 class="text-3xl md:text-4xl font-bold text-accent">VPS Hosting</h3>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Full root access, scalable resources, and high performance for your websites or applications.
          </p>
          <a href="https://cptcr.shop/vps" class="btn mt-2" target="_blank">Discover VPS</a>
        </div>
      </div>
    </div>

    <!-- Service #3 (Odd) => md:flex-row -->
    <div class="flex flex-col md:flex-row gap-6 mb-8 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h3 class="text-3xl md:text-4xl font-bold text-accent">Mini VPS</h3>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            A scaled-down VPS for lighter workloads—cost-effective yet reliable for small to medium projects.
          </p>
          <a href="https://cptcr.shop/mini-vps" class="btn mt-2" target="_blank">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Service #4 (Even) => md:flex-row-reverse -->
    <div class="flex flex-col md:flex-row-reverse gap-6 mb-8 text-center md:text-right">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h3 class="text-3xl md:text-4xl font-bold text-accent">Database Hosting</h3>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            High-performance database hosting for MySQL, PostgreSQL, MongoDB, and more—fast and secure data access.
          </p>
          <a href="https://cptcr.shop/database" class="btn mt-2" target="_blank">Explore Databases</a>
        </div>
      </div>
    </div>

    <!-- Service #5 (Odd) => md:flex-row -->
    <div class="flex flex-col md:flex-row gap-6 mb-8 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h3 class="text-3xl md:text-4xl font-bold text-accent">Software Hosting</h3>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Ideal for hosting dev tools like Visual Studio Code or music bots. Scale resources as your software grows.
          </p>
          <a href="https://cptcr.shop/software" class="btn mt-2" target="_blank">Get Started</a>
        </div>
      </div>
    </div>

    <!-- Service #6 (Even) => md:flex-row-reverse -->
    <div class="flex flex-col md:flex-row-reverse gap-6 mb-8 text-center md:text-right">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h3 class="text-3xl md:text-4xl font-bold text-accent">Coding-Language Hosting</h3>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Tailored for modern development, supporting Node.js, Python, Java, and more for a variety of coding projects.
          </p>
          <a href="https://cptcr.shop/coding-language" class="btn mt-2" target="_blank">Discover More</a>
        </div>
      </div>
    </div>

    <!-- Service #7 (Odd) => md:flex-row -->
    <div class="flex flex-col md:flex-row gap-6 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h3 class="text-3xl md:text-4xl font-bold text-accent">Game Hosting</h3>
      </div>
      <div class="w-full md:w-1/2">
        <div class="glass p-6">
          <p class="mb-4 text-lg">
            Minimal latency and a stable environment optimized for your favorite game servers—ideal for clans and communities.
          </p>
          <a href="https://cptcr.shop/games" class="btn mt-2" target="_blank">Launch a Server</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Ping Test Section -->
  <section id="ping" class="container mx-auto py-16 animate-fadeIn">
    <h2 class="text-4xl md:text-5xl font-bold text-center mb-8">
      Live <span class="text-accent">Server Ping</span>
    </h2>
    <div class="glass p-6 text-lg text-center">
      <p>Node 1: <span class="text-accent" id="node1">-- ms</span></p>
      <p>Node 2: <span class="text-accent" id="node2">-- ms</span></p>
      <p>Node 3: <span class="text-accent" id="node3">-- ms</span></p>
      <script>
        function simulatePing() {
          function getPing() {
            let val = Math.random() * 100;
            return val.toFixed(2).replace('.', ',');
          }
          document.getElementById('node1').innerText = getPing() + " ms";
          document.getElementById('node2').innerText = getPing() + " ms";
          document.getElementById('node3').innerText = getPing() + " ms";
        }
        setInterval(simulatePing, 500);
        simulatePing();
      </script>
    </div>
  </section>

  <!-- Live Stats Section -->
  <section id="stats" class="container mx-auto py-16 animate-fadeIn">
    <h2 class="text-4xl md:text-5xl font-bold text-center mb-8">
      Live <span class="text-accent">Stats</span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="glass text-center p-6">
        <h3 class="text-2xl md:text-3xl font-semibold mb-2">Users</h3>
        <p class="text-2xl md:text-3xl"><?php echo htmlspecialchars($user_count); ?></p>
      </div>
      <div class="glass text-center p-6">
        <h3 class="text-2xl md:text-3xl font-semibold mb-2">Servers</h3>
        <p class="text-2xl md:text-3xl"><?php echo htmlspecialchars($server_count); ?></p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black py-8 mt-6">
    <div class="container mx-auto text-center">
      <p class="text-gray-400 text-base md:text-lg">&copy; <?php echo date("Y"); ?> CPTCR Hosting. All rights reserved.</p>
      <p class="text-gray-500 text-sm mt-2">
        Contact us at <a href="mailto:support@cptcr.cc" class="text-accent">support@cptcr.cc</a>
      </p>
    </div>
  </footer>

  <!-- Mobile Menu Script -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      // Smooth toggle for max-height
      if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.style.maxHeight = '0';
      } else {
        mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
      }
    });
  </script>
</body>
</html>
