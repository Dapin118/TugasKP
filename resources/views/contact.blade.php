@extends('layouts.app')

@section('title', 'Welcome to ' . config('app.name'))

@section('content')
<!-- Section: Hubungi Kami -->
<section class="contact-us py-24 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white">Hubungi Kami</h2>
            <p class="text-gray-400 mt-4">Untuk informasi lebih lanjut, isi form di bawah ini, dan kami akan segera menghubungi Anda.</p>
        </div>

        <!-- Contact Form -->
        <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <form id="contact-form">
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                    <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Alamat Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400" placeholder="Masukkan alamat email Anda" required>
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan Anda</label>
                    <textarea id="message" name="message" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400" rows="4" placeholder="Tulis pesan Anda di sini" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition duration-300">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Include EmailJS library -->
<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
  (function(){
    emailjs.init("YOUR_USER_ID"); // Ganti dengan User ID Anda
  })();
</script>

<script type="text/javascript">
  document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    emailjs.sendForm("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", this)
      .then(function(response) {
        console.log("Pesan berhasil dikirim: ", response);
        alert("Pesan Anda telah dikirim!");
      }, function(error) {
        console.log("Pesan gagal dikirim: ", error);
        alert("Terjadi kesalahan saat mengirim pesan.");
      });
  });
</script>


@endsection
