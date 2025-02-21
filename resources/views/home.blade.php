<?php
$SEMUA_LAYANAN = [['nama' => 'REBOUND', 'deskripsi' => ''], ['nama' => 'DOWNSIZE', 'deskripsi' => ''], ['nama' => 'MAINTENANCE', 'deskripsi' => ''], ['nama' => 'UPGRADE', 'deskripsi' => ''], ['nama' => 'PAKET REBOUND & DOWNSIZE', 'deksripsi' => '']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playwrite+VN+Guides&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-weight-bold">
    <!-- Navbar -->
    <nav class="bg-white text-black sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="./LOGO.png" alt="Logo" class="h-12 w-12 mr-2">
                <span class="text-xl font-bold">GG Suspension</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#home" class="hover:text-orange-200">Beranda</a>
                <a href="#services" class="hover:text-orange-200">Layanan</a>
                <a href="#booking" class="hover:text-orange-200">Booking</a>
                <a href="#contact" class="hover:text-orange-200">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-gray-100 py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">BENGKEL</h1>
                <p class="text-gray-600 mb-8">Layanan bagus,cepat</p>
                <button class="bg-orange-600 text-white px-8 py-3 rounded-full hover:bg-orange-700 transition">

                </button>
            </div>
            <div class="md:w-1/2">
                <img src="motorcycle-service.jpg" alt="Servis Motor" class="rounded-lg shadow-xl">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card -->
                @foreach ($SEMUA_LAYANAN as $LAYANAN)
                    <a href="/{{ strtolower($LAYANAN['nama']) }}">
                        <div class="p-6 border rounded-lg hover:shadow-lg transition">
                            <i class="fas fa-tools text-orange-600 text-4xl mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">{{ $LAYANAN['nama'] }}</h3>
                            <p class="text-gray-600">Ganti oli, tune-up, pemeriksaan berkala</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section id="booking" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-2xl">
            <div class="bg-white p-8 rounded-t-xl shadow-md">
                <h2 class="text-2xl font-bold mb-6">Chat Admin</h2>
                <form class="space-y-4">
                    <div class="flex flex-col gap-2">
                        <label class="text-lg" for="layanan">Layanan</label>
                        <select class="w-full p-3 border rounded-lg" name="" id="layanan">
                            <option>Pilih layanan</option>
                            @foreach ($SEMUA_LAYANAN as $item)
                                <option value={{ $item['nama'] }}>{{ $item['nama'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- @php $data=array_filter($data,function ($item){
                            return $item['categori']==
                        }) @endphp --}}
                    <div class="flex flex-col gap-2">
                        <label class="text-lg" for="category">Spesifikasi</label>
                        <select class="w-full p-3 border rounded-lg" name="" id="category">
                            <option>Pilih spesifikasi</option>
                            @foreach ($data as $item)
                                <option value={{ $item['category'] }}>{{ $item['category'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-lg" for="category">Spesifikasi</label>
                        <select class="w-full p-3 border rounded-lg" name="" id="category">
                            <option>Pilih spesifikasi</option>
                            @foreach ($data as $item)
                                <option value={{ $item['category'] }}>{{ $item['category'] }}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <button class="w-full bg-orange-600 text-white py-3 rounded-lg hover:bg-orange-700 transition">
                Chat Sekarang
            </button>
            </form>
        </div>
        </div>
    </section>

    <!-- Footer -->

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">SpeedMaster</h4>
                    <p class="text-gray-400">Bengkel resmi terpercaya sejak 2010</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Kontak Kami</h4>
                    <p class="text-gray-400 mt-2">
                        <i class="fas fa-phone mr-2"></i>(021) 1234-5678
                    </p>
                </div>
                <div class="flex flex-col">
                    <h4 class="text-xl font-bold mb-4">Alamat Kami</h4>
                    <p class="text-gray-400 mb-2">
                        <i class="fas fa-map-marker-alt mr-2"></i>Jl. Kelana, Cibuntu, Cibitung, Bekasi
                    </p>
                    <x-map />
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Jam Operasional</h4>
                    <p class="text-gray-400">Senin-Minggu: 08.00 - 17.00 WIB</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-4 text-center text-gray-400">
                © 2023 SpeedMaster. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <div class="fixed bottom-8 right-8">
        <a href="https://wa.me/628123456789"
            class="bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </div>
</body>
<script>
    // Mendapatkan elemen select dan menangani perubahan
    document.getElementById('layanan').addEventListener('change', function() {
        // Mengambil nilai yang dipilih
        const selectedValue = this.value;
        console.log($data);
    });
</script>

</html>
