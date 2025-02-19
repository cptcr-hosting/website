<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic SEO -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Contact CPTCR Hosting – Reach out to us through Discord, or via email for management, support, commissions, or customer-related inquiries." />
  <meta name="keywords" content="CPTCR Hosting, contact, Discord, management, support, commissions, customers" />
  <meta name="author" content="CPTCR Hosting" />
  <title>CPTCR Hosting | Contact</title>
  
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
    /* Basic page styling */
    html, body {
      height: 100%;
      margin: 0;
      background-color: #000;
      font-family: 'Inter', sans-serif;
      color: #ddd;
      font-size: 1.125rem;
      scroll-behavior: smooth;
    }
    /* Main content styling */
    main {
      margin-top: 5rem;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    @media (max-width: 767px) {
      main {
        margin-top: 0;
        margin-bottom: 4rem; /* account for mobile navbar */
      }
    }
    /* Glass container for contact details */
    .glass {
      background: rgba(0, 0, 0, 0.65);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.5);
      max-width: 600px;
      width: 90%;
      padding: 2rem;
      margin: 1.5rem auto;
    }
    /* Section titles */
    .section-title {
      font-size: 2rem;
      font-weight: 700;
      color: #E94560;
      margin-bottom: 1rem;
    }
    /* Link styling for contact methods */
    .contact-link {
      color: #E94560;
      text-decoration: underline;
      transition: color 0.3s;
    }
    .contact-link:hover {
      color: #fff;
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
  <main>
    <h1 class="text-5xl font-extrabold text-accent mb-8">Contact Us</h1>
    <div class="glass">
      <h2 class="section-title">Discord</h2>
      <p class="text-lg mb-4">
        Join our vibrant Discord community for real-time updates, interactive discussions, and to connect with other users.
      </p>
      <a href="https://cptcr.cc/discord" target="_blank" class="contact-link">https://cptcr.cc/discord</a>
    </div>
    <div class="glass">
      <h2 class="section-title">Management</h2>
      <p class="text-lg mb-4">
        For business inquiries, partnership proposals, or any management-related questions, please contact our management team.
      </p>
      <a href="mailto:management@cptcr.cc" class="contact-link">management@cptcr.cc</a>
    </div>
    <div class="glass">
      <h2 class="section-title">Support</h2>
      <p class="text-lg mb-4">
        Need help or have technical issues? Our support team is available to assist you 24/7 with any queries or troubleshooting.
      </p>
      <a href="mailto:support@cptcr.cc" class="contact-link">support@cptcr.cc</a>
    </div>
    <div class="glass">
      <h2 class="section-title">Commissions</h2>
      <p class="text-lg mb-4">
        For inquiries about commissions or creative collaborations, reach out to our commissions team to discuss project ideas and proposals.
      </p>
      <a href="mailto:comissions@cptcr.cc" class="contact-link">comissions@cptcr.cc</a>
    </div>
    <div class="glass">
      <h2 class="section-title">Customers</h2>
      <p class="text-lg mb-4">
        Existing customers can contact us regarding account issues, billing inquiries, or feedback about our services.
      </p>
      <a href="mailto:customers@cptcr.cc" class="contact-link">customers@cptcr.cc</a>
    </div>
  </main>
  
  <!-- Footer -->
  <footer>
    <div class="container mx-auto text-center">
      <p class="text-gray-400 text-base md:text-lg">
        &copy; <?php echo date("Y"); ?> CPTCR Hosting. All rights reserved.
      </p>
      <p class="text-gray-500 text-sm mt-2">
        For more information, email <a href="mailto:support@cptcr.cc" class="text-accent">support@cptcr.cc</a>
      </p>
    </div>
  </footer>
</body>
</html>
