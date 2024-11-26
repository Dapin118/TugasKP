<footer class="bg-gray-900 text-gray-300 py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo & Description -->
            <div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ config('app.name') }}</h3>
                <p class="text-sm leading-relaxed">
                    Alamat Perusahaan Anda<br>
                    Kota, Provinsi, Kode Pos
                </p>
            </div>
            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-400 hover:text-blue-400 transition">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-400 hover:text-blue-400 transition">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-gray-400 hover:text-blue-400 transition">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-400 hover:text-blue-400 transition">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- Social Media -->
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Ikuti Kami</h3>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition text-2xl">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition text-2xl">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition text-2xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition text-2xl">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-6 text-center">
            <p class="text-sm">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
