<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic SEO -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="CPTCR Hosting Roadmap – A detailed journey from early challenges to a future of innovation, with individual slides for every milestone." />
  <meta name="keywords" content="CPTCR Hosting, roadmap, strategic plan, cloud integration, developer tools, dedicated servers, open-source" />
  <meta name="author" content="CPTCR Hosting" />
  <title>CPTCR Hosting | Roadmap</title>
  
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

    /* Scroll-Snapping Container (Below Navbar) */
    #roadmap-container {
      margin-top: 5rem; /* space for fixed navbar */
      height: calc(100% - 5rem);
      overflow-y: scroll;
      scroll-snap-type: y mandatory;
    }
    @media (max-width: 767px) {
      #roadmap-container {
        margin-top: 5rem;
        height: calc(100vh - 5rem);
      }
    }

    /* Each slide */
    .slide {
      height: 100vh;
      scroll-snap-align: start;
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
        text-align: left;
        justify-content: flex-start;
      }
      .slide-even {
        flex-direction: row-reverse;
        text-align: left;
        justify-content: flex-end;
      }
    }

    /* Title and Content columns */
    .title-col,
    .content-col {
      flex: 1;
      padding: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .title-col h2 {
      font-size: 2rem;
      font-weight: 700;
      color: #E94560;
      margin: 0;
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
      padding: 1.5rem;
      margin: 0 auto;
    }

    /* Buttons */
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
  </style>
</head>
<body>
  <!-- Updated Navbar -->
  <nav class="bg-black bg-opacity-75 fixed top-0 left-0 w-full z-50 backdrop-blur-lg shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="/" class="text-2xl font-extrabold text-white">CPTCR Hosting</a>
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

  <!-- Scroll-Snapping Container -->
  <div id="roadmap-container">
    <!-- Slide 1: Hero (Odd) -->
    <div class="slide slide-odd">
      <div class="title-col">
        <h2>Our Roadmap</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="text-xl md:text-2xl text-gray-400 mb-6">
            We begin our journey by overcoming early challenges and setting a course for future innovation and excellence.
          </p>
          <a href="index.html" class="btn">Return Home</a>
        </div>
      </div>
    </div>
    
    <!-- Slide 2: Our Journey (Even) -->
    <div class="slide slide-even">
      <div class="title-col">
        <h2>Our Journey</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            In 2023, we launched as Nexus Hosting targeting Discord bot developers. Early enthusiasm was met with challenges – frequent panel changes, data loss, and domain issues that forced a major rebrand.
          </p>
          <p class="mb-4 text-lg">
            In 2024, after a temporary shutdown, we relaunched with upgraded servers and a new billing system powered by Paymenter and Pterodactyl, renewing our commitment to our community.
          </p>
          <p class="mb-4 text-lg">
            By 2025, our focus on leveraging open‑source tools and delivering maximum value allowed us to provide a seamless, reliable hosting experience that garnered exceptional reviews.
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 3: Future Vision (Odd) -->
    <div class="slide slide-odd">
      <div class="title-col">
        <h2>Future Vision</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Our vision for the future is to redefine hosting by embracing innovative technologies, forming strategic partnerships, and empowering our community with advanced tools.
          </p>
          <p class="mb-4 text-lg">
            We will continuously enhance performance, broaden our service offerings, and place customer privacy at the heart of all developments.
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 4: Cloud Integration (Even) -->
    <div class="slide slide-even">
      <div class="title-col">
        <h2>Cloud Integration</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            We are building a hybrid hosting model that seamlessly integrates with major cloud providers such as Azure, AWS, and Google Cloud, combining robust on-premise infrastructure with the scalability of the cloud.
          </p>
          <p class="text-sm text-gray-400">
            Pilot: Q3 2025 | Full Integration: Early 2026
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 5: Server Connectivity (Odd) -->
    <div class="slide slide-odd">
      <div class="title-col">
        <h2>Server Connectivity</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Our upcoming feature will allow users to securely connect and manage their own servers through our panel, providing exclusive and personalized access with enhanced security measures.
          </p>
          <p class="text-sm text-gray-400">
            Beta: Q4 2025 | Full Launch: Q2 2026
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 6: Developer Tools & API Expansion (Even) -->
    <div class="slide slide-even">
      <div class="title-col">
        <h2>Developer Tools</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            We plan to boost our API ecosystem with comprehensive documentation, new SDKs, and advanced developer tools. Community hackathons and events will be organized to foster collaboration and innovation.
          </p>
          <p class="text-sm text-gray-400">
            Ongoing Updates: Bi-Annual Major Releases
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 7: Continuous Innovation (Odd) -->
    <div class="slide slide-odd">
      <div class="title-col">
        <h2>Innovation</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Our continuous innovation process includes quarterly reviews and bi-annual feature rollouts, ensuring performance, security, and user experience are consistently refined.
          </p>
          <p class="text-sm text-gray-400">
            Ongoing: Quarterly Reviews &amp; Bi-Annual Releases
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 8: Dedicated Servers & KVM Solutions (Even) -->
    <div class="slide slide-even">
      <div class="title-col">
        <h2>Dedicated Servers</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            We plan to introduce premium dedicated servers, along with in-house KVM management tools, to replace our current third-party virtualization solutions.
          </p>
          <p class="text-sm text-gray-400">
            Dedicated Servers: Q3 2025 | KVM Solutions: Q1 2026
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 9: Resource Expansion & Open-Source (Odd) -->
    <div class="slide slide-odd">
      <div class="title-col">
        <h2>Resource &amp; Open-Source</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            By securing additional resources through strategic partnerships and funding, we will support and sustain the open-source projects that underpin our services.
          </p>
          <p class="text-sm text-gray-400">
            Planning: Q4 2025 | Initial Allocation: 2026
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 10: Privacy, Partnerships & Control Panel (Even) -->
    <div class="slide slide-even">
      <div class="title-col">
        <h2>Privacy &amp; Control Panel</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            We remain dedicated to customer privacy while building strong strategic partnerships. A new, intuitive control panel is in development to streamline server management and improve user experience.
          </p>
          <p class="text-sm text-gray-400">
            Control Panel Beta: Q1 2026 | Full Launch: Q3 2026
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 11: Timeline - Phase 1 (Odd) -->
    <div class="slide slide-odd">
      <div class="title-col">
        <h2>Timeline: Phase 1</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Phase 1 (Q3 2025): Initiate cloud integration pilots and launch beta features for personal server connectivity.
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 12: Timeline - Phase 2 (Even) -->
    <div class="slide slide-even">
      <div class="title-col">
        <h2>Timeline: Phase 2</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Phase 2 (Q4 2025): Roll out initial API enhancements and developer tools, alongside the beta release of our new control panel.
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 13: Timeline - Phase 3 (Odd) -->
    <div class="slide slide-odd">
      <div class="title-col">
        <h2>Timeline: Phase 3</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Phase 3 (Early 2026): Achieve full cloud integration, launch dedicated servers and self-hosted KVM solutions, and expand our open‑source support fund.
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 14: Timeline - Ongoing (Even) -->
    <div class="slide slide-even">
      <div class="title-col">
        <h2>Timeline: Ongoing</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Ongoing: Continuous improvements through quarterly reviews and bi‑annual major updates ensure our services remain cutting‑edge and reliable.
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 15: Community Feedback (Odd) -->
    <div class="slide slide-odd">
      <div class="title-col">
        <h2>Community Feedback</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Our roadmap is fueled by the insights and feedback of our vibrant community. We engage with developers and users via forums, surveys, and events to ensure our innovations meet your needs.
          </p>
          <p class="text-lg">
            Look out for hackathons, webinars, and community events where you can help shape the future of CPTCR Hosting.
          </p>
        </div>
      </div>
    </div>

    <!-- Slide 16: Conclusion / Looking Forward (Even) -->
    <div class="slide slide-even">
      <div class="title-col">
        <h2>Looking Forward</h2>
      </div>
      <div class="content-col">
        <div class="content-box">
          <p class="mb-4 text-lg">
            Our evolution from humble beginnings to a leader in hosting technology is a testament to resilience, innovation, and a strong commitment to our community.
          </p>
          <p class="mb-4 text-lg">
            With our strategic roadmap in place, CPTCR Hosting is poised to redefine the hosting landscape by delivering unparalleled value and performance.
          </p>
          <p class="text-lg">
            Join us as we continue to build a future of secure, scalable, and innovative hosting solutions that put your needs first.
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <footer class="bg-black py-8 mt-6">
    <div class="container mx-auto text-center">
      <p class="text-gray-400 text-base md:text-lg">
        &copy; <script>document.write(new Date().getFullYear());</script> CPTCR Hosting. All rights reserved.
      </p>
      <p class="text-gray-500 text-sm mt-2">
        Contact us at <a href="mailto:support@cptcr.cc" class="text-accent">support@cptcr.cc</a>
      </p>
    </div>
  </footer>
</body>
</html>
