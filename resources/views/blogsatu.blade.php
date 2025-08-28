<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
    </nav>

    <main>
        <section>

            <div id="blog" class="pt-24 max-w-7xl container mx-auto px-12">
                <h1 class="text-black font-bold text-3xl ">Berita</h1>
                <p class="text-black/80 text-s max-w-md">Semua berita yang pernah kami bagikan, kami rangkum menjadi satu
                    disini.</p>
            </div>
            <hr class="pt-6">
            <div class="mx-8 pt-6">
                <x-bladewind::card class="container mx-auto max-w-7xl px-16">
                    <div class="">
                        <h1 class="text-black font-semibold text-2xl">Artificial Intelegence</h1>
                        <p class="text-black/80">Kecerdasan buatan ( AI ) adalah kemampuan sistem komputasi untuk
                            melakukan tugas-tugas yang umumnya berkaitan dengan kecerdasan manusia, seperti
                            pembelajaran, penalaran, pemecahan masalah, persepsi, dan pengambilan keputusan. Kecerdasan
                            buatan merupakan bidang penelitian dalam ilmu komputer yang mengembangkan dan mempelajari
                            metode serta perangkat lunak yang memungkinkan mesin untuk memahami lingkungannya dan
                            menggunakan pembelajaran serta kecerdasan untuk mengambil tindakan yang memaksimalkan
                            peluang mereka dalam mencapai tujuan yang ditentukan.</p>
                        <a href="/blogAI" class="text-blue-600 underline">Selengkapnya --></a>
                    </div>
                </x-bladewind::card>
            </div>
            <hr>
            <div class="mx-8 pt-6">
                <x-bladewind::card class="container mx-auto max-w-7xl px-16">
                    <div class="">
                        <h1 class="text-black font-semibold text-2xl">Learning Management System</h1>
                        <p class="text-black/80">Learning Management System (LMS) adalah perangkat lunak yang dirancang
                            untuk memfasilitasi, mengelola, mendistribusikan, dan melacak aktivitas pembelajaran secara
                            daring. LMS berfungsi sebagai pusat kontrol untuk proses belajar-mengajar, memungkinkan
                            pendidik mengunggah materi, memberikan tugas, serta melacak kemajuan peserta didik,
                            sementara peserta dapat mengakses konten dan berinteraksi.</p>
                        <a href="/bloglms" class="text-blue-600 underline">Selengkapnya --></a>
                    </div>
                </x-bladewind::card>
            </div>
            <hr>
            <div class="mx-8 pt-6">
                <x-bladewind::card class="container mx-auto max-w-7xl px-16">
                    <div class="">
                        <h1 class="text-black font-semibold text-2xl">Virtual Reality</h1>
                        <p class="text-black/80">Virtual reality (VR) adalah teknologi yang menciptakan lingkungan tiga
                            dimensi (3D) simulasi yang imersif, memungkinkan pengguna untuk berinteraksi dan merasa
                            seolah-olah berada di dunia virtual tersebut melalui perangkat khusus seperti headset VR. VR
                            memberikan pengalaman realistis yang membuat pengguna menyatu dengan realitas semu tersebut,
                            dengan aplikasi yang luas mulai dari hiburan dan permainan hingga pelatihan kerja, seperti
                            simulasi bagi dokter dan pilot.</p>
                        <a href="/blogvr" class="text-blue-600 underline">Selengkapnya --></a>
                    </div>
                </x-bladewind::card>
            </div>
            <hr>
            <div class="mx-8 pt-6">
                <x-bladewind::card class="container mx-auto max-w-7xl px-16">
                    <div class="">
                        <h1 class="text-black font-semibold text-2xl">Penyimpanan Awan</h1>
                        <p class="text-black/80">Contohnya aplikasi Google Drive yaitu layanan penyimpanan berbasis
                            cloud yang memungkinkan pengguna menyimpan, menyinkronkan, dan berbagi file secara online
                            dari berbagai perangkat, termasuk melalui web dan aplikasi seluler. Drive menggunakan SaaS
                            (Software as a Service), di mana file disimpan di server Google dan dapat diakses kapan saja
                            dengan koneksi internet. Fitur utamanya meliputi kolaborasi real-time melalui aplikasi
                            Google Docs, Sheets, dan Slides, enkripsi data untuk keamanan, serta kemampuan penyimpanan
                            offline.</p>
                        <a href="" class="text-blue-600 underline">Selengkapnya --></a>
                    </div>
                </x-bladewind::card>
            </div>

            <hr>
            <div class="mx-8 pt-6">
                <x-bladewind::card class="container mx-auto max-w-7xl px-16">
                    <div class="">
                        <h1 class="text-black font-semibold text-2xl">Platform Gamifikasi</h1>
                        <p class="text-black/80">Seperti Quizizz, platform pembelajaran digital berbasis gamifikasi yang
                            memungkinkan guru membuat kuis interaktif dan menyenangkan untuk siswa. Platform ini
                            dirancang untuk melibatkan siswa dalam pembelajaran, memberikan umpan balik secara langsung,
                            dan mendukung berbagai aktivitas pembelajaran.</p>
                        <a href="" class="text-blue-600 underline">Selengkapnya --></a>
                    </div>
                </x-bladewind::card>
            </div>

            <hr>
            <div class="mx-8 pt-6">
                <x-bladewind::card class="container mx-auto max-w-7xl px-16">
                    <div class="">
                        <h1 class="text-black font-semibold text-2xl">Google Classroom</h1>
                        <p class="text-black/80">Google Classroom adalah teknologi platform pembelajaran daring gratis
                            yang dikembangkan oleh Google untuk mempermudah guru dan siswa dalam kegiatan belajar
                            mengajar secara digital. Teknologi ini berfungsi sebagai "ruang kelas virtual" untuk
                            mendistribusikan dan mengelola tugas tanpa kertas, memfasilitasi kolaborasi, memberikan
                            umpan balik, dan menjadi pusat komunikasi antara pendidik dan peserta didik.</p>
                        <a href="" class="text-blue-600 underline">Selengkapnya --></a>
                    </div>
                </x-bladewind::card>
            </div>

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