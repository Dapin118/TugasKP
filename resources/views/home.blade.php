@extends('layouts.app')

@section('title', 'Welcome to ' . config('app.name'))

@section('content')
<!-- Hero Section with Video Background -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Video Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-black/80 z-10"></div>
        <iframe
            class="w-full h-full object-cover"
            src="https://www.youtube.com/embed/Ks4thBCYNzI?autoplay=1&mute=1&loop=1&playlist=Ks4thBCYNzI"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
    </div>

    <!-- Content -->
    <div class="relative z-20 container mx-auto px-6 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-6xl font-bold mb-6 leading-tight animate-fade-in-up">
                Solusi Digital
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">
                    Masa Depan
                </span>
            </h1>
            <p class="text-xl text-gray-300 mb-12 animate-fade-in-up delay-200">
                Transformasi bisnis Anda dengan teknologi terdepan untuk era digital yang lebih kompetitif
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl opacity-50"></i>
    </div>
</section>



<!-- Section: Siapa Kami -->
<section class="who-we-are bg-gradient-to-r from-blue-900 via-indigo-800 to-purple-900 text-white py-24">
    <div class="container mx-auto px-6">
        <!-- Title Section -->
        <div class="text-center mb-16">
            <h2 class="text-5xl font-extrabold mb-4 tracking-tight text-white">Siapa Kami</h2>
            <p class="text-lg max-w-3xl mx-auto leading-relaxed text-gray-300">
                Promise adalah solusi e-procurement lengkap dan terintegrasi yang memudahkan seluruh proses pengadaan, 
                mulai dari pembuatan pesanan pembelian hingga software pembuat keputusan dan pelaporan. 
                Dengan Promise, Anda mendapatkan kontrol penuh atas pengadaan untuk memastikan sistem lebih efektif dan efisien.
            </p>
        </div>

        <!-- Timeline -->
        <div class="timeline flex flex-col md:flex-row justify-center items-center gap-12">
            <!-- Timeline Item -->
            <div class="timeline-item relative max-w-sm p-6 bg-white/10 rounded-lg shadow-lg hover:bg-white/20 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                    2005
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-gray-100">Pengembangan Pertama</h3>
                <p class="text-gray-300">
                    Dimulai di Jakarta, kami meluncurkan produk awal dengan fitur dasar Procurement Management untuk membantu proses pengadaan lebih terorganisir.
                </p>
            </div>

            <!-- Timeline Item -->
            <div class="timeline-item relative max-w-sm p-6 bg-white/10 rounded-lg shadow-lg hover:bg-white/20 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                    2015
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-gray-100">Peningkatan Modul</h3>
                <p class="text-gray-300">
                    Kami mengembangkan modul baru seperti Vendor Management, Contract Management, dan Enterprise Spend Monitoring untuk memperluas kemampuan sistem pengadaan.
                </p>
            </div>

            <!-- Timeline Item -->
            <div class="timeline-item relative max-w-sm p-6 bg-white/10 rounded-lg shadow-lg hover:bg-white/20 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-indigo-600 to-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                    2020
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-gray-100">Lebih Dari 20 Klien</h3>
                <p class="text-gray-300">
                    Lebih dari 20 klien dari perusahaan dan instansi pemerintah mulai menggunakan Promise untuk mempermudah proses pengadaan mereka.
                </p>
            </div>

            <!-- Timeline Item -->
            <div class="timeline-item relative max-w-sm p-6 bg-white/10 rounded-lg shadow-lg hover:bg-white/20 transition-all duration-300">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                    2022
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-gray-100">Pengembangan Keluarga Baru</h3>
                <p class="text-gray-300">
                    Kami memperkenalkan dua produk baru: Procurite dan Ruang Auction, yang menambah fleksibilitas dan kemudahan dalam proses pengadaan.
                </p>
            </div>
        </div>
    </div>
</section>



<!-- Team Section -->
<section class="py-24 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <span class="text-cyan-400 font-semibold tracking-wider">TIM KAMI</span>
            <h2 class="text-4xl font-bold text-white mt-2">Temui Tim Kami</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Rio Dwi -->
            <div class="group relative h-96 rounded-2xl overflow-hidden">
                <img
                    src="https://via.placeholder.com/500"
                    alt="Rio Dwi"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 transform translate-y-6 group-hover:translate-y-0 transition-transform">
                    <h3 class="text-2xl font-bold text-white mb-2">Rio Dwi</h3>
                    <p class="text-gray-300 mb-4 opacity-0 group-hover:opacity-100 transition-opacity delay-100">
                        General Manager Product and Services<br>
                        Graduated from Binus Univ, with 13 years of experience in Senior Procurement. Currently the General Manager at Mitra Mandiri Informatika.
                        Certified as National Procurement Expert, F5 Sales Professional, and EMC Sales Technology.
                    </p>
                    <a href="#" class="inline-flex items-center text-cyan-400 font-semibold group-hover:gap-2 transition-all">
                        Pelajari Lebih Lanjut
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Ismed Iqbal -->
            <div class="group relative h-96 rounded-2xl overflow-hidden">
                <img
                    src="https://via.placeholder.com/500"
                    alt="Ismed Iqbal"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 transform translate-y-6 group-hover:translate-y-0 transition-transform">
                    <h3 class="text-2xl font-bold text-white mb-2">Ismed Iqbal</h3>
                    <p class="text-gray-300 mb-4 opacity-0 group-hover:opacity-100 transition-opacity delay-100">
                        General Manager Product and Delivery<br>
                        Graduated from STT Telkom Bandung, with more than 15 years of experience in IT. Has worked as a Programmer, System Analyst, and Project Manager. Certified Financial Planner.
                    </p>
                    <a href="#" class="inline-flex items-center text-cyan-400 font-semibold group-hover:gap-2 transition-all">
                        Pelajari Lebih Lanjut
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- About Section with Parallax -->
<section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1497366216548-37526070297c"
            alt="Background"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/95 to-black/90"></div>
    </div>

    <div class="relative container mx-auto px-6 text-white">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-cyan-400 font-semibold tracking-wider">TENTANG KAMI</span>
                <h2 class="text-4xl font-bold mt-2 mb-6">Pengalaman dan Inovasi</h2>
                <p class="text-gray-300 mb-8">
                    Dengan pengalaman lebih dari 10 tahun, kami telah membantu ratusan perusahaan dalam transformasi digital mereka. Tim profesional kami berkomitmen untuk memberikan solusi teknologi terbaik yang sesuai dengan kebutuhan bisnis Anda.
                </p>
                <div class="grid grid-cols-2 gap-8 mb-12">
                    <div>
                        <div class="text-4xl font-bold text-cyan-400 mb-2">500+</div>
                        <div class="text-gray-400">Proyek Selesai</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-cyan-400 mb-2">200+</div>
                        <div class="text-gray-400">Klien Puas</div>
                    </div>
                </div>
                <a href="#" class="inline-flex items-center bg-gradient-to-r from-blue-400 to-cyan-300 text-white px-8 py-4 rounded-full font-bold hover:from-blue-500 hover:to-cyan-400 transition-all">
                    Tentang Kami
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="relative">
                <img
                    src="https://images.unsplash.com/photo-1522071820081-009f0129c71c"
                    alt="Team"
                    class="rounded-2xl shadow-2xl">
                <div class="absolute -bottom-6 -left-6 bg-gradient-to-r from-blue-400 to-cyan-300 p-6 rounded-2xl shadow-xl">
                    <div class="text-4xl font-bold mb-2">10+</div>
                    <div class="text-sm">Tahun Pengalaman</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clients Section with Marquee -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <span class="text-cyan-400 font-semibold tracking-wider">KLIEN KAMI</span>
            <h2 class="text-3xl font-bold text-white mt-2">Dipercaya oleh Brand Terkemuka</h2>
        </div>

        <div class="flex space-x-12 items-center">
            @php
            $clients = [
            'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg',
            'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg',
            'https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg',
            'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg',
            'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'
            ];
            @endphp

            @foreach($clients as $client)
            <img
                src="{{ $client }}"
                alt="Client Logo"
                class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
            @endforeach
        </div>
    </div>
</section>


<!-- Testimonial Section with Card Carousel -->
<section class="py-24 bg-gradient-to-b from-gray-900 to-blue-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-cyan-400 font-semibold tracking-wider">TESTIMONIAL</span>
            <h2 class="text-4xl font-bold text-white mt-2">Apa Kata Klien Kami</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
            $testimonials = [
            [
            'name' => 'John Doe',
            'position' => 'CEO, Tech Corp',
            'avatar' => 'https://randomuser.me/api/portraits/men/1.jpg',
            'text' => 'Solusi yang diberikan sangat membantu perusahaan kami dalam transformasi digital.',
            ],
            [
            'name' => 'Jane Smith',
            'position' => 'Marketing Director, StartUp Inc',
            'avatar' => 'https://randomuser.me/api/portraits/women/1.jpg',
            'text' => 'Tim yang sangat profesional dan hasil kerja yang luar biasa.',
            ],
            [
            'name' => 'Mike Johnson',
            'position' => 'CTO, Digital Solutions',
            'avatar' => 'https://randomuser.me/api/portraits/men/2.jpg',
            'text' => 'Kualitas layanan yang konsisten dan support yang responsif.',
            ],
            ];
            @endphp

            @foreach($testimonials as $testimonial)
            <div class="bg-white/5 backdrop-blur-lg p-8 rounded-2xl">
                <div class="flex items-center gap-4 mb-6">
                    <img
                        src="{{ $testimonial['avatar'] }}"
                        alt="{{ $testimonial['name'] }}"
                        class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <h4 class="text-xl font-bold text-white">{{ $testimonial['name'] }}</h4>
                        <p class="text-gray-400">{{ $testimonial['position'] }}</p>
                    </div>
                </div>
                <p class="text-gray-300">{{ $testimonial['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add any additional JavaScript functionality here
        // For example, smooth scrolling, animations, etc.
    });
</script>
@endpush