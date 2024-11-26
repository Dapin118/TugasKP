@extends('layouts.app')

@section('title', 'Welcome to ' . config('app.name'))

@section('content')
<!-- Hero Section with Video Background -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
<!-- Content -->
<div class="relative z-20 container mx-auto px-6 text-gray-800">
    <div class="max-w-4xl mx-auto text-center bg-white/90 backdrop-blur-md p-8 rounded-3xl shadow-xl">
        <h1 class="text-4xl font-bold mb-6 leading-tight">
            Temukan Berbagai <span class="text-blue-600">Solusi</span> untuk Kebutuhan Anda
        </h1>
        <p class="text-lg text-gray-600 mb-8">
            Di sini, kami menyediakan beragam solusi digital untuk mendukung proses bisnis Anda.
        </p>
        <ul class="text-left space-y-4 text-gray-700">
            <li class="flex items-center">
                <svg class="w-6 h-6 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Vendor Management</span>
            </li>
            <li class="flex items-center">
                <svg class="w-6 h-6 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Procurement Management</span>
            </li>
            <li class="flex items-center">
                <svg class="w-6 h-6 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Contract Management</span>
            </li>
            <li class="flex items-center">
                <svg class="w-6 h-6 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Enterprise Spend Monitoring</span>
            </li>
            <li class="flex items-center">
                <svg class="w-6 h-6 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Promise Cloud</span>
            </li>
        </ul>
    </div>
</div>


    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl opacity-50"></i>
    </div>
</section>



<!-- Section: Solusi Digital -->
<section class="solutions-section bg-gray-50 py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-blue-600 mb-4">
                Solusi Digital Terintegrasi
            </h2>
            <p class="text-gray-700 max-w-2xl mx-auto">
                Kami menyediakan berbagai solusi untuk mengoptimalkan efisiensi bisnis Anda. 
                Berikut adalah fitur utama yang ditawarkan oleh Promise.
            </p>
        </div>

        <!-- Grid Solusi -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="solution-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-blue-500 mb-4">
                    Vendor Management
                </h3>
                <p class="text-gray-600">
                    Mengelola hubungan dengan vendor secara efisien, dari pelacakan kinerja hingga komunikasi yang lebih mudah.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="solution-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-blue-500 mb-4">
                    Procurement Management
                </h3>
                <p class="text-gray-600">
                    Sistem otomatisasi untuk mempercepat proses pengadaan dan meningkatkan transparansi.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="solution-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-blue-500 mb-4">
                    Contract Management
                </h3>
                <p class="text-gray-600">
                    Kelola siklus kontrak mulai dari persetujuan hingga pembaruan dengan solusi digital kami.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="solution-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-blue-500 mb-4">
                    Enterprise Spend Monitoring
                </h3>
                <p class="text-gray-600">
                    Pantau pengeluaran bisnis secara real-time untuk menemukan peluang penghematan biaya.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="solution-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-blue-500 mb-4">
                    Promise Cloud
                </h3>
                <p class="text-gray-600">
                    Platform cloud untuk mengintegrasikan proses bisnis dengan fleksibilitas tinggi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section: Vendor Management -->
<section class="vendor-management bg-gradient-to-br from-emerald-500 to-lime-500 py-20 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6 tracking-tight">Vendor Management</h2>
        <p class="text-lg font-light mb-8 max-w-3xl mx-auto leading-relaxed">
            Kelola hubungan dengan vendor secara efisien. Pantau performa, kelola dokumen, dan tingkatkan kolaborasi untuk hasil maksimal.
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-lg text-emerald-700 shadow-md hover:shadow-lg transition">
                <img src="path/to/vendor-icon1.png" alt="Vendor Performance Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Pemantauan Performa</h3>
                <p class="text-gray-700">
                    Evaluasi performa vendor menggunakan data berbasis kinerja untuk pengambilan keputusan yang tepat.
                </p>
            </div>
            
            <div class="p-6 bg-white rounded-lg text-emerald-700 shadow-md hover:shadow-lg transition">
                <img src="path/to/vendor-icon2.png" alt="Vendor Documentation Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Pengelolaan Dokumen</h3>
                <p class="text-gray-700">
                    Atur semua dokumen penting dalam satu tempat yang aman dan mudah diakses.
                </p>
            </div>
            
            <div class="p-6 bg-white rounded-lg text-emerald-700 shadow-md hover:shadow-lg transition">
                <img src="path/to/vendor-icon3.png" alt="Vendor Collaboration Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Kolaborasi Optimal</h3>
                <p class="text-gray-700">
                    Tingkatkan komunikasi dan transparansi antara tim Anda dan vendor.
                </p>
            </div>
        </div>

        <div class="mt-12">
            <a href="#contact" class="inline-block px-8 py-4 bg-gray-800 text-white font-bold rounded-full shadow-md hover:shadow-lg transition-transform hover:scale-105">
                Kelola Vendor Anda Sekarang
            </a>
        </div>
    </div>
</section>


<!-- Section: Procurement Management -->
<section class="procurement-management bg-gradient-to-br from-green-500 to-teal-500 py-20 text-gray-900">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-extrabold mb-6 tracking-tight text-white">Procurement Management</h2>
        <p class="text-xl font-light mb-12 max-w-3xl mx-auto leading-relaxed text-teal-100">
            Otomatisasi proses pengadaan barang dan jasa untuk efisiensi yang lebih baik. Pantau dan kelola semua aktivitas pengadaan dalam satu platform terpadu.
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10">
            <div class="p-6 bg-white rounded-lg text-teal-700 shadow-lg hover:shadow-xl transition">
                <img src="path/to/procurement-icon1.png" alt="Procurement Automation Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Otomatisasi Pengadaan</h3>
                <p class="text-gray-700">
                    Otomatisasi proses pengadaan dari awal hingga akhir untuk menghemat waktu dan biaya.
                </p>
            </div>
            
            <div class="p-6 bg-white rounded-lg text-teal-700 shadow-lg hover:shadow-xl transition">
                <img src="path/to/procurement-icon2.png" alt="Procurement Tracking Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Pemantauan Real-Time</h3>
                <p class="text-gray-700">
                    Lacak status pengadaan secara real-time untuk memastikan langkah berjalan sesuai rencana.
                </p>
            </div>
            
            <div class="p-6 bg-white rounded-lg text-teal-700 shadow-lg hover:shadow-xl transition">
                <img src="path/to/procurement-icon3.png" alt="Procurement Reporting Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Laporan & Analisis</h3>
                <p class="text-gray-700">
                    Dapatkan laporan detail untuk keputusan berbasis data yang lebih baik.
                </p>
            </div>
        </div>

        <div class="mt-12">
            <a href="#contact" class="inline-block px-10 py-4 bg-teal-700 text-white font-bold rounded-full shadow-lg hover:shadow-xl transition-transform hover:scale-105">
                Mulai Pengadaan Anda Sekarang
            </a>
        </div>
    </div>
</section>


<!-- Section: Contract Management -->
<section class="contract-management bg-gradient-to-br from-teal-500 to-cyan-500 py-20 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6 tracking-tight">Contract Management</h2>
        <p class="text-lg font-light mb-8 max-w-3xl mx-auto leading-relaxed">
            Kelola siklus kontrak Anda dari pembuatan hingga pembaruan dengan transparansi penuh.
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-lg text-teal-700 shadow-md hover:shadow-lg transition">
                <img src="path/to/contract-icon1.png" alt="Contract Creation Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Pembuatan Kontrak</h3>
                <p class="text-gray-700">
                    Buat kontrak otomatis dengan template yang sudah sesuai standar.
                </p>
            </div>
            
            <div class="p-6 bg-white rounded-lg text-teal-700 shadow-md hover:shadow-lg transition">
                <img src="path/to/contract-icon2.png" alt="Contract Renewal Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Pembaharuan Kontrak</h3>
                <p class="text-gray-700">
                    Pastikan kontrak diperbarui tepat waktu dengan pengingat otomatis.
                </p>
            </div>
            
            <div class="p-6 bg-white rounded-lg text-teal-700 shadow-md hover:shadow-lg transition">
                <img src="path/to/contract-icon3.png" alt="Contract Control Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Kontrol Penuh</h3>
                <p class="text-gray-700">
                    Kelola kontrak dengan pelacakan dan laporan yang memastikan transparansi.
                </p>
            </div>
        </div>

        <div class="mt-12">
            <a href="#contact" class="inline-block px-8 py-4 bg-gray-800 text-white font-bold rounded-full shadow-md hover:shadow-lg transition-transform hover:scale-105">
                Kelola Kontrak Anda Sekarang
            </a>
        </div>
    </div>
</section>



<!-- Section: Enterprise Spend Monitoring -->
<section class="spend-monitoring bg-gradient-to-br from-gray-100 to-gray-200 py-20 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6 tracking-tight">Enterprise Spend Monitoring</h2>
        <p class="text-lg mb-8 max-w-3xl mx-auto leading-relaxed">
            Pantau pengeluaran perusahaan Anda secara real-time untuk efisiensi dan penghematan yang lebih baik.
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-lg text-gray-800 shadow-md hover:shadow-lg transition">
                <img src="path/to/monitoring-icon1.png" alt="Real-Time Data Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Data Real-Time</h3>
                <p class="text-gray-600">
                    Akses data langsung untuk keputusan lebih cepat.
                </p>
            </div>
            
            <div class="p-6 bg-white rounded-lg text-gray-800 shadow-md hover:shadow-lg transition">
                <img src="path/to/monitoring-icon2.png" alt="Analytics Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Analisis Pengeluaran</h3>
                <p class="text-gray-600">
                    Identifikasi area pengeluaran yang bisa dioptimalkan.
                </p>
            </div>
            
            <div class="p-6 bg-white rounded-lg text-gray-800 shadow-md hover:shadow-lg transition">
                <img src="path/to/monitoring-icon3.png" alt="Control Spending Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Kontrol Pengeluaran</h3>
                <p class="text-gray-600">
                    Tetapkan batas pengeluaran untuk memastikan efisiensi.
                </p>
            </div>
        </div>

        <div class="mt-12">
            <a href="#contact" class="inline-block px-8 py-4 bg-gray-800 text-white font-bold rounded-full shadow-md hover:shadow-lg transition-transform hover:scale-105">
                Monitor Pengeluaran Sekarang
            </a>
        </div>
    </div>
</section>


<!-- Section: Promise Cloud -->
<section class="promise-cloud bg-gradient-to-br from-gray-100 to-gray-200 py-20 text-gray-800">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6 tracking-tight">Promise Cloud</h2>
        <p class="text-lg mb-8 max-w-3xl mx-auto leading-relaxed">
            Solusi berbasis cloud yang memungkinkan perusahaan Anda mengelola data dan operasi dengan lebih aman dan efisien. Promise Cloud menawarkan fleksibilitas, skalabilitas, dan integrasi dengan berbagai aplikasi untuk mendukung pertumbuhan perusahaan Anda.
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-lg text-gray-800 shadow-md hover:shadow-lg transition">
                <img src="path/to/cloud-icon1.png" alt="Cloud Management Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Keamanan Tinggi</h3>
                <p class="text-gray-600">
                    Dengan sistem enkripsi dan perlindungan data tingkat lanjut, Promise Cloud memastikan keamanan data Anda.
                </p>
            </div>

            <div class="p-6 bg-white rounded-lg text-gray-800 shadow-md hover:shadow-lg transition">
                <img src="path/to/cloud-icon2.png" alt="Scalability Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Fleksibilitas & Skalabilitas</h3>
                <p class="text-gray-600">
                    Sesuaikan sumber daya sesuai kebutuhan. Dengan Promise Cloud, Anda dapat meningkatkan kapasitas sesuai dengan perkembangan bisnis.
                </p>
            </div>

            <div class="p-6 bg-white rounded-lg text-gray-800 shadow-md hover:shadow-lg transition">
                <img src="path/to/cloud-icon3.png" alt="Integration Icon" class="mx-auto w-20 h-20 mb-4">
                <h3 class="text-xl font-semibold mb-3">Integrasi Mudah</h3>
                <p class="text-gray-600">
                    Promise Cloud dapat terintegrasi dengan berbagai sistem dan aplikasi yang sudah Anda gunakan, memudahkan alur kerja.
                </p>
            </div>
        </div>
        
        <div class="mt-12">
            <a href="#contact" class="inline-block px-8 py-4 bg-gray-800 text-white font-bold rounded-full shadow-md hover:shadow-lg transition-transform hover:scale-105">
                Coba Promise Cloud Sekarang
            </a>
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