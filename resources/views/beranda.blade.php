<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <link rel="icon" type="image/x-icon" href="prostep.jpg" />
</head>

<body class="bg-white/90">

    <nav class="fixed w-full bg-blue-900/70 backdrop-blur-md text-white px-5 py-3 z-10">
        <div class="container mx-auto max-w-7xl flex justify-between items-center">
            <h1 class="text-2xl font-bold">Kreatify</h1>
            <div class="flex gap-6">
                <a href="/" class="hover:text-blue-200 transition">Beranda</a>
                <a href="{{ url('/blogsatu')}}" class="hover:text-blue-200 transition">Berita</a>
                <a href="{{ url('/profil')}}" class="hover:text-blue-200 transition">Profil</a>
            </div>
    </nav>

    <main>

        <section class="pt-32 px-5">
            <div class="container mx-auto max-w-7xl text-center">
                <h1 class="text-4xl font-bold mb-4 max-w-xl mx-auto">Inovasi Digital Untuk <span
                        class="text-blue-900">Pembelajaran & Kreativitas</span>
                </h1>
                <p class="mb-6 text-lg max-w-5xl pt-4 mx-auto text-black/50">Platfrom digital yang mendukung anak muda
                    untuk berkreativitas</p>
            </div>

            <div class="flex justify-center space-x-4 mb-6">
                <a href="{{ url('#blog') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Lihat Blog</a>
                <a href="{{ url('#kontak')}}" class="bg-gray-300 text-black px-4 py-2 rounded">Kontak</a>
            </div>
            <div class="flex flex-wrap justify-center gap-2">
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Inovasi Teknologi
                    Pembelajaran</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Pro Profil di Medsos</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Kreativitas Generasi Muda</span>
            </div>
            </div>

            <section class="pt-36 px-5" id="blog">
                <div class="container mx-auto max-w-7xl">
                    <h1 class="text-3xl font-bold mb-2 ml-4">Artikel Terbaru</h1>
                    <p class="text-xl mb-4 text-black/80a ml-4">Tiga postingan populer Tahun ini</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                        <article class="p-4 rounded shadow-xl">
                            <img src="ai.jpg" alt="" class="h-80 object-cover  w-full rounded-t" />
                            <p class="text-sm pt-3 text-gray-1000">20 agustus 2025</p>
                            <h2 class="pt-4 font-bold">🤖 AI (Artificial Intelligence)</h2>
                            <p class="pt-2 pb-  text-sm text-gray-600 leading-relaxed">
                                artificial intelligence(AI) adalah
                                kecerdasan yang ditambahkan kepada suatu sistem yang bisa diatur dalam konteks ilmiah,
                                AI
                                juga
                                didefinisikan sebagai
                                kecerdasan entitas ilmiah.
                            </p>
                            <div class="flex justify-between pt-8 font-bold text-black/50">
                                <p>oleh tim Prostep</p>
                                <a href="/blogAI" class="text-blue-600">Baca
                                    Selengkapnya</a>
                            </div>
                        </article>

                        <article class="p-4 rounded shadow-xl">
                            <img src="lms.jpg" alt="" class="h-80 object-cover w-full rounded-t" />
                            <p class="text-sm pt-3 text-gray-1000">29 agustus 2025</p>
                            <h2 class="pt-4 font-bold">📚 LMS (Learning Management System)</h2>
                            <p class="pt-2 pb-6 text-sm text-gray-600 leading-relaxed">LMS adalah platform digital yang
                                digunakan untuk
                                mengelola,
                                mendistribusikan, dan melacak proses pembelajaran, terutama dalam pendidikan online.</p>

                            </p>
                            <div class="flex justify-between pt-9 font-bold text-black/50">
                                <p>oleh tim Prostep</p>
                                <a href="/bloglms" class="text-blue-600">Baca
                                    Selengkapnya</a>
                            </div>
                        </article>

                        <article class="p-4 rounded shadow-xl">
                            <img src="vr.jpg" alt="" class="h-80 w-full object-cover rounded-t" />
                            <p class="text-sm pt-3 text-gray-1000">20 januari 2025</p>
                            <h2 class="pt-4 font-bold">🤖 VR (Virtual Reality)</h2>
                            <p class="pt-2 text-sm text-gray-600 leading-relaxed">
                                Virtual Reality (VR), atau dalam bahasa Indonesia dikenal sebagai realitas maya, telah
                                mengalami perjalanan panjang sejak awal kemunculannya hingga menjadi salah satu
                                teknologi
                                revolusioner di era modern.
                            </p>
                            <div class="flex justify-between pt-8 font-bold text-black/50">
                                <p>oleh tim Prostep</p>
                                <a id="kontak" href="/blogvr" class="text-blue-600">Baca
                                    Selengkapnya</a>
                            </div>
            </section>


            <section class="mx-auto max-w-2xl mt-24 shadow-xl">
                <x-bladewind::card>
                    <h1 class=" font-bold text-2xl text-center mb-6">Hubungi Kami</h1>
                    <x-bladewind::input placeholder="Nama Kamu" class="border w-full text-lg p-2" />
                    <x-bladewind::input placeholder="Email Kamu" class="border w-full text-lg p-2" />
                    <x-bladewind::textarea placeholder="Ketikkan Pesan" rows="5"
                        class="h-24 border text-xl p-2 w-full" />
                    <x-bladewind::button
                        class="flex items-center mx-auto bg-blue-600 px-10 py-3 text-white text-lg active:bg-blue-400"
                        uppercasing="false">
                        Kirim
                    </x-bladewind::button>
                </x-bladewind::card>
            </section>
    </main>

    <footer class="mt-24 w-full bg-blue-900/70 backdrop-blur-md text-white px-5 py-3">
        <div class="py-8">
            <div class="container mx-auto max-w-7xl">
                <h1 class="text-2xl text-center font-bold">Kreatify</h1>
            </div>
            <div class="mt-4 flex flex-rows justify-center items-center gap-6">
                <a href="/" class="hover:text-blue-200 transition">Beranda</a>
                <a href="/blogsatu" class="hover:text-blue-200 transition">Blog</a>
                <a href="/profil" class="hover:text-blue-200 transition">Profil</a>
            </div>
            <div class="bg-white mt-4 w-[600px] mx-auto">
                <hr />
            </div>
            <div class="mt-2 flex-col text-center">
                <p class="">&copy 2025 <span class="text-white/80">Tim Prostep</span> </p>
            </div>
        </div>
    </footer>

</body>

</html>