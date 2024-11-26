<header class="bg-white shadow-md fixed w-full top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="https://promise.co.id/cfind/convert/webp/thumb/images/cover_w240_h70_logo.png.webp" 
                 alt="Logo" 
                 class="h-10 hover:opacity-90 transition-opacity">
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="{{ route('home') }}" 
               class="text-gray-800 hover:text-blue-600 transition-colors duration-300 font-medium">
               Beranda
            </a>
            <a href="{{ route('about') }}" 
               class="text-gray-800 hover:text-blue-600 transition-colors duration-300 font-medium">
               Tentang Kami
            </a>
            <a href="{{ route('services') }}" 
               class="text-gray-800 hover:text-blue-600 transition-colors duration-300 font-medium">
               Layanan
            </a>
            <a href="{{ route('blog') }}" 
               class="text-gray-800 hover:text-blue-600 transition-colors duration-300 font-medium">
               Blog
            </a>
            <a href="{{ route('contact') }}" 
               class="text-gray-800 hover:text-blue-600 transition-colors duration-300 font-medium">
               Kontak
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button class="mobile-menu-button p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden">
        <div class="px-4 py-3 space-y-3 bg-white shadow-lg">
            <a href="{{ route('home') }}" 
               class="block text-gray-800 hover:text-blue-600 transition-colors duration-300">
               Beranda
            </a>
            <a href="{{ route('about') }}" 
               class="block text-gray-800 hover:text-blue-600 transition-colors duration-300">
               Tentang Kami
            </a>
            <a href="{{ route('services') }}" 
               class="block text-gray-800 hover:text-blue-600 transition-colors duration-300">
               Layanan
            </a>
            <a href="{{ route('blog') }}" 
               class="block text-gray-800 hover:text-blue-600 transition-colors duration-300">
               Blog
            </a>
            <a href="{{ route('contact') }}" 
               class="block text-gray-800 hover:text-blue-600 transition-colors duration-300">
               Kontak
            </a>
        </div>
    </div>
</header>