<?php
// index.php
$adminApiKey = "ptlc_XIH5objdK1IsYdhTX4txokHwD6FUjYiE8Q9TpXvGxVC";

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
  <meta name="keywords" content="CPTCR Hosting, hosting, VPS, Minecraft, Discord bot, database hosting, free servers, transparent pricing, secure hosting, free, discord, bot, developers, coding, software, server, free hoster" />
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
  <!-- Updated Navbar -->
  <nav class="bg-black bg-opacity-75 fixed top-0 left-0 w-full z-50 backdrop-blur-lg shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="#home" class="text-2xl font-extrabold text-white">CPTCR Hosting</a>
        </div>
        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-8">
          <a href="/" class="text-base font-medium text-white hover:text-accent transition duration-150 ease-in-out">Overview</a>
          <a href="/services" class="text-base font-medium text-white hover:text-accent transition duration-150 ease-in-out">Services</a>
          <a href="/about-us" class="text-base font-medium text-white hover:text-accent transition duration-150 ease-in-out">About Us</a>
          <a href="/roadmap" class="text-base font-medium text-white hover:text-accent transition duration-150 ease-in-out">Roadmap</a>
          <a href="/contact" class="text-base font-medium text-white hover:text-accent transition duration-150 ease-in-out">Contact</a>
          <a href="/discord" class="text-base font-medium text-white hover:text-accent transition duration-150 ease-in-out">Discord</a>
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button id="menu-btn" class="text-white focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="md:hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Overview</a>
        <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Services</a>
        <a href="/about-us" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">About Us</a>
        <a href="/roadmap" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Roadmap</a>
        <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Contact</a>
        <a href="/discord" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Discord</a>
      </div>
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

  <!-- Feature Sections -->
  <!-- Feature #1 -->
  <section id="feature1" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row gap-6 text-center md:text-left">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">CPTCR Hosting Overview</h2>
      </div>
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

  <!-- Feature #2 -->
  <section id="feature2" class="container mx-auto py-12 animate-fadeIn">
    <div class="flex flex-col md:flex-row-reverse gap-6 text-center md:text-right">
      <div class="w-full md:w-1/2 flex flex-col justify-center">
        <h2 class="text-4xl md:text-5xl font-bold text-accent">Our Services</h2>
      </div>
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

  <!-- Feature #3 -->
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

  <!-- Feature #4 -->
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

  <!-- Feature #5 -->
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

  <!-- Feature #6 -->
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

  <!-- Feature #7 -->
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

  <!-- Feature #8 -->
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

  <!-- Feature #9 -->
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

  <!-- Feature #10 -->
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

  <!-- Services Section -->
  <section id="services" class="container mx-auto py-16 animate-fadeIn">
    <h2 class="text-5xl font-bold text-center mb-8 text-accent">All Services</h2>

    <!-- Service #1 -->
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

    <!-- Service #2 -->
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

    <!-- Service #3 -->
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

    <!-- Service #4 -->
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

    <!-- Service #5 -->
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

    <!-- Service #6 -->
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

    <!-- Service #7 -->
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
      </p> <br>
      <p class="text-gray-500 text-sm mt-2">
        <a href="/legal" class="text-accent">Legal Pages</a>
      </p>
    </div>
  </footer>

  <!-- Mobile Menu Script -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      // Toggle the max-height to enable a smooth open/close transition
      if (mobileMenu.style.maxHeight && mobileMenu.style.maxHeight !== "0px") {
        mobileMenu.style.maxHeight = "0px";
      } else {
        mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
      }
    });
  </script>
</body>
</html>
