<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic SEO -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="About CPTCR Hosting – Learn about our history, mission, values, future goals, and our dedicated team from a modern, futuristic hosting provider." />
  <meta name="keywords" content="CPTCR Hosting, about us, mission, values, history, future, team, hosting" />
  <meta name="author" content="CPTCR Hosting" />
  <title>CPTCR Hosting | About Us</title>
  
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
            fadeIn: 'fadeIn 1s ease-out',
            slideDown: 'slideDown 0.5s ease-out'
          }
        }
      }
    }
  </script>
  <style>
    /* Basic styling */
    html, body {
      height: 100%;
      margin: 0;
      background: #000;
      font-family: 'Inter', sans-serif;
      color: #ddd;
      font-size: 1.125rem;
      scroll-behavior: smooth;
      scroll-snap-type: y mandatory;
      overflow-y: scroll;
    }
    /* Updated Navbar styling */
    nav.bg-black {
      /* This class is used for the updated fixed navbar */
    }
    /* Main content container (for scroll snapping if needed) */
    #content-container {
      margin-top: 5rem; /* leave space for fixed navbar */
      padding: 2rem;
    }
    /* Slide layout for About Us content */
    .slide {
      padding: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    @media (min-width: 768px) {
      .slide-odd {
        flex-direction: row;
        justify-content: flex-start;
        text-align: left;
      }
      .slide-even {
        flex-direction: row-reverse;
        justify-content: flex-end;
        text-align: left;
      }
      .title-col, .content-col {
        flex: 1;
        padding: 1rem;
      }
      .title-col h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #E94560;
        margin: 0;
      }
    }
    /* Glass content box */
    .content-box {
      background: rgba(0, 0, 0, 0.65);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.5);
      max-width: 800px;
      width: 100%;
      padding: 2rem;
      margin: 1rem auto;
    }
    /* Button styling */
    .btn {
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
    .btn:hover {
      background: #d13f55;
    }
    /* Footer styling */
    footer {
      background: #000;
      padding: 1.5rem 0;
      border-top: 1px solid rgba(255,255,255,0.1);
      text-align: center;
    }
    footer p {
      margin: 0.5rem 0;
      color: #aaa;
    }
  </style>
</head>
<body>
  <!-- Updated Navbar -->
  <nav class="bg-black bg-opacity-75 fixed top-0 left-0 w-full z-50 backdrop-blur-lg shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="index.html" class="text-2xl font-extrabold text-white">CPTCR Hosting</a>
        </div>
        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-8">
        <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Home</a>
        <a href="/about-us" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">About</a>
        <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Services</a>
        <a href="/roadmap" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Roadmap</a>
        <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Contact</a>
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
        <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Home</a>
        <a href="/about-us" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">About</a>
        <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Services</a>
        <a href="/roadmap" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Roadmap</a>
        <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700 transition">Contact</a>
      </div>
    </div>
  </nav>
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      if (mobileMenu.style.maxHeight && mobileMenu.style.maxHeight !== "0px") {
        mobileMenu.style.maxHeight = "0px";
      } else {
        mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
      }
    });
  </script>
  
  <!-- Main Content -->
  <div id="content-container">
    <main>
      <!-- Slide 1: Who We Are (Odd) -->
      <div class="slide slide-odd">
        <div class="title-col">
          <h2>Who We Are</h2>
        </div>
        <div class="content-col">
          <div class="content-box">
            <p class="text-lg">
              CPTCR Hosting is a cutting-edge hosting provider based in Germany, dedicated to delivering high-performance, secure, and reliable hosting solutions. We serve developers, businesses, and gaming communities by combining innovative technology with exceptional customer support.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Slide 2: Our Mission (Even) -->
      <div class="slide slide-even">
        <div class="title-col">
          <h2>Our Mission</h2>
        </div>
        <div class="content-col">
          <div class="content-box">
            <p class="text-lg">
              Our mission is to empower our clients by providing robust, affordable, and secure hosting services. We focus on transparency, innovative solutions, and fostering a vibrant community where every user benefits from our technology and expertise.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Slide 3: Our Values (Odd) -->
      <div class="slide slide-odd">
        <div class="title-col">
          <h2>Our Values</h2>
        </div>
        <div class="content-col">
          <div class="content-box">
            <p class="text-lg">
              We believe in <strong>Transparency</strong>, <strong>Innovation</strong>, <strong>Security</strong>, and <strong>Community.</strong> These core values guide every decision we make and ensure that our services are always designed with our customers' best interests in mind.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Slide 4: Our History (Even) -->
      <div class="slide slide-even">
        <div class="title-col">
          <h2>Our History</h2>
        </div>
        <div class="content-col">
          <div class="content-box">
            <p class="text-lg">
              Founded in 2023 as Nexus Hosting, our early journey was filled with challenges such as frequent panel changes, data loss, and domain instability. In 2024, we rebranded as CPTCR Hosting and upgraded our infrastructure with advanced servers and innovative billing systems powered by Paymenter and Pterodactyl. By 2025, our focus on open‑source tools and customer-centric solutions enabled us to deliver a seamless hosting experience that earned us outstanding reviews and a loyal community.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Slide 5: Our Future Goals (Odd) -->
      <div class="slide slide-odd">
        <div class="title-col">
          <h2>Our Future Goals</h2>
        </div>
        <div class="content-col">
          <div class="content-box">
            <p class="text-lg">
              Looking ahead, we aim to:
              <br><br>
              • Integrate with leading cloud providers like AWS, Azure, and Google Cloud.
              <br>
              • Enhance our API ecosystem and developer tools.
              <br>
              • Expand our service portfolio with dedicated servers and in-house virtualization solutions.
              <br>
              • Continuously innovate our control panel for a superior user experience.
              <br>
              • Support and contribute to open-source projects that drive technological progress.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Slide 6: Our Team (Even) -->
      <div class="slide slide-even">
        <div class="title-col">
          <h2>Our Team</h2>
        </div>
        <div class="content-col">
          <div class="content-box">
            <p class="text-lg">
              Under the visionary leadership of our founder, CPTCR, our team is composed of experienced technologists, innovative developers, and dedicated support professionals. Together, we strive to push the boundaries of hosting technology and deliver exceptional service to our community.
            </p>
          </div>
        </div>
      </div>
    </main>
  </div>
  
  <!-- Footer -->
  <footer class="bg-black py-8 mt-8">
    <div class="container mx-auto text-center">
      <p class="text-gray-400 text-base md:text-lg">&copy; <?php echo date("Y"); ?> CPTCR Hosting. All rights reserved.</p>
      <p class="text-gray-500 text-sm mt-2">
        Contact us at <a href="mailto:support@cptcr.cc" class="text-accent">support@cptcr.cc</a>
      </p>
    </div>
  </footer>
</body>
</html>
