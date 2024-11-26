@extends('layouts.app')

@section('title', 'Welcome to ' . config('app.name'))

@section('content')
<!-- Hero Section with Video Background -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
   <!-- Content -->
<div class="relative z-20 container mx-auto px-6">
    <div class="max-w-3xl mx-auto text-center bg-white/80 backdrop-blur-sm p-10 rounded-3xl shadow-2xl">
        <h2 class="text-3xl font-extrabold mb-6 text-gray-800 leading-tight">
            Customer Kami dari <span class="text-blue-600">Pemerintah</span> & <span class="text-blue-600">Swasta</span>
        </h2>
        <p class="text-lg text-gray-600">
            <span class="font-semibold text-blue-500">Promise</span> telah membantu perusahaan pemerintah dan swasta 
            dalam digitalisasi proses pengadaan. Teknologi Promise mempermudah serta mengintegrasi seluruh alur pengadaan 
            dengan solusi yang canggih dan efisien.
        </p>
    </div>
</div>


    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl opacity-50"></i>
    </div>
</section>

<!-- Section: Procurement Overview -->
<section class="procurement-overview bg-gradient-to-r from-gray-200 to-white py-24 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <!-- Title Section -->
        <h2 class="text-5xl font-extrabold mb-6 tracking-tight text-gray-800 animate__animated animate__fadeInUp">
            Overview
        </h2>
        <p class="text-xl font-light mb-16 max-w-4xl mx-auto leading-relaxed text-gray-700 animate__animated animate__fadeInUp">
            Otomatisasi proses pembelian barang dan jasa Anda dengan sistem procurement terbaik dari Promise. Tinggalkan proses manual yang memakan waktu dan rawan kesalahan, beralih ke sistem procurement otomatis untuk efisiensi maksimal.
        </p>
        
        <!-- Descriptive Texts -->
        <div class="space-y-12 max-w-3xl mx-auto text-left">
            <div class="space-y-4">
                <h3 class="text-3xl font-semibold text-gray-800">Tinggalkan Proses Manual</h3>
                <p class="text-gray-700">
                    Lupakan cara manual yang memakan waktu dan rawan kesalahan. Beralih ke sistem procurement otomatis untuk efisiensi maksimal.
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><strong>Pengurangan waktu pengadaan</strong></li>
                    <li><strong>Pengelolaan pesanan yang lebih mudah</strong></li>
                    <li><strong>Peningkatan akurasi dan transparansi</strong></li>
                </ul>
            </div>

            <div class="space-y-4">
                <h3 class="text-3xl font-semibold text-gray-800">Efisiensi dan Penghematan Biaya</h3>
                <p class="text-gray-700">
                    Software procurement kami mengurangi biaya operasional dengan meminimalkan kesalahan manusia dan mengoptimalkan alur kerja.
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><strong>Pengelolaan anggaran yang lebih baik</strong></li>
                    <li><strong>Pemantauan pengeluaran secara real-time</strong></li>
                    <li><strong>Integrasi yang mudah dengan sistem lain</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- Section: Customer Testimonials -->
<section class="customer-testimonials bg-gradient-to-r from-gray-700 to-purple-600 py-20 text-white">
    <div class="container mx-auto px-6 text-center">
        <!-- Main Title -->
        <h2 class="text-5xl font-extrabold mb-6 tracking-tight text-teal-800 animate__animated animate__fadeInUp">Testimoni Pelanggan</h2>

        <!-- Sub Title -->
        <p class="text-xl font-light mb-12 max-w-4xl mx-auto leading-relaxed text-teal-700 animate__animated animate__fadeInUp">
            Lihat bagaimana Promise membantu perusahaan-perusahaan di seluruh dunia untuk mengoptimalkan proses mereka dengan solusi yang lebih efisien.
        </p>

        <!-- Testimonial Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12">
            <!-- Testimonial 1 -->
            <div class="p-8 bg-gray-50 rounded-lg shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 hover:bg-teal-50">
                <div class="mb-6">
                    <img src="path/to/customer1.jpg" alt="Customer 1" class="mx-auto w-24 h-24 rounded-full shadow-lg"/>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-teal-600">John Doe</h3>
                <p class="text-gray-800 italic mb-6">
                    "Promise telah mengubah cara kami dalam mengelola pengadaan. Proses yang lebih cepat dan efisien membantu kami mengurangi biaya operasional secara signifikan."
                </p>
                <p class="text-gray-700">
                    CEO, Tech Innovations
                </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="p-8 bg-gray-50 rounded-lg shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 hover:bg-teal-50">
                <div class="mb-6">
                    <img src="path/to/customer2.jpg" alt="Customer 2" class="mx-auto w-24 h-24 rounded-full shadow-lg"/>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-teal-600">Jane Smith</h3>
                <p class="text-gray-800 italic mb-6">
                    "Kami sangat puas dengan hasil yang diberikan. Sistem Promise memudahkan kami dalam mengontrol pengeluaran dan mengelola vendor dengan lebih transparan."
                </p>
                <p class="text-gray-700">
                    CFO, Green Solutions
                </p>
            </div>

            <!-- Testimonial 3 -->
            <div class="p-8 bg-gray-50 rounded-lg shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 hover:bg-teal-50">
                <div class="mb-6">
                    <img src="path/to/customer3.jpg" alt="Customer 3" class="mx-auto w-24 h-24 rounded-full shadow-lg"/>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-teal-600">Michael Lee</h3>
                <p class="text-gray-800 italic mb-6">
                    "Proses procurement kami jauh lebih efisien dan terorganisir dengan menggunakan Promise. Sangat membantu dalam pengelolaan anggaran dan pengadaan barang."
                </p>
                <p class="text-gray-700">
                    Operations Manager, EcoTech
                </p>
            </div>
        </div>

        <!-- Call to Action Button -->
        <div class="mt-12">
            <a href="#contact" class="inline-block px-12 py-5 bg-teal-800 text-white font-bold rounded-full shadow-lg transform transition-transform hover:scale-110 hover:shadow-2xl animate__animated animate__fadeInUp">
                Mulai Perjalanan Anda Sekarang
            </a>
        </div>
    </div>
</section>

<!-- Section: Client Logos Carousel -->
<section class="client-logos bg-gray-100 py-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold mb-12 text-gray-800">Trusted by Leading Companies</h2>
        
        <!-- Logo Carousel -->
        <div class="flex overflow-x-auto space-x-8">
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo1.png" alt="BNI Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo2.png" alt="Telkomsel Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo3.png" alt="Astra Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo4.png" alt="Kimia Farma Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo5.png" alt="Taspen Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo6.png" alt="IPC Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo7.png" alt="Telkomsigma Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo8.png" alt="Pegadaian Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo9.png" alt="Mandiri Taspen Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo10.png" alt="Infomedia Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo11.png" alt="Jakpro Logo" class="w-full h-auto">
            </div>
            <div class="flex-shrink-0 w-32">
                <img src="path/to/logo12.png" alt="KAI Logo" class="w-full h-auto">
            </div>
        </div>

        <!-- Navigation for carousel -->
        <div class="mt-8">
            <a href="#next" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-full shadow-md hover:bg-blue-700 transition">
                Selanjutnya
            </a>
        </div>
    </div>
</section>




@endsection
