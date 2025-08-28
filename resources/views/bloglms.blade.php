</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <link rel="icon" type="image/x-icon" href="prostep.jpg" />
    <style>
    </style>
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

    <main class="container max-w-7xl mx-auto">
        <div id="blog" class="max-w-7xl container mx-auto px-8 pt-24">
            <h1 class="text-black font-bold text-3xl ">LMS (Learning Management System)</h1>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed"> Learning Management System (LMS) sering juga disebut Learning
                Management Platform secara umum adalah perangkat lunak yang dirancang untuk membuat, mendistribusikan,
                dan mengatur penyampaian materi pembelajaran. Secara spesifik, Learning Management System merupakan
                program perangkat lunak berbasis web untuk manajemen, dokumentasi, pemantauan, pelaporan, administrasi
                dan distribusi konten pendidikan, program pelatihan, manual teknis, video instruksional atau bahan
                perpustakaan digital, dan proyek pembelajaran dan pengembangan.</p>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed">Ide Learning Management System berasal dari e-learning. E-learning
                yang dikembangkan dari kebutuhan akan konten pendidikan dan alat pelatihan yang murah, mudah diakses,
                mudah digunakan, dinamis dan kolaboratif. Platform e-learning menyediakan infrastruktur - Internet - di
                mana pembelajaran terjadi melalui berbagai teknik partisipasi.</p>
            <hr>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed">Learning Management System (LMS) berawal dari tahun 1960-an dengan
                adanya program Computer Based Training (CBT) seperti PLATO dari University of Illinois, yang kemudian
                berkembang menjadi sistem yang lebih interaktif pada tahun 70-an. Kemunculan LMS modern dimulai dengan
                aplikasi web open-source bernama Moodle pada awal tahun 2000-an dan berlanjut dengan inovasi berbasis
                cloud seperti Eucalyptus pada tahun 2008, serta standar interoperabilitas seperti SCORM di awal tahun
                2000-an untuk memfasilitasi berbagi konten di berbagai LMS. Kemunculan LMS modern dimulai dengan
                aplikasi web open-source bernama Moodle pada awal tahun 2000-an dan berlanjut dengan inovasi berbasis
                cloud seperti Eucalyptus pada tahun 2008, serta standar interoperabilitas seperti SCORM di awal tahun
                2000-an untuk memfasilitasi berbagi konten di berbagai LMS. </P>

            <div class="mt-2">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">1. Era Awal (1960-an - 1990-an)</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Plato:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Pada tahun 1960-an, University of Illinois mengembangkan PLATO
                    (Programmed Logic for Automated Teaching Operations), sebuah CBT yang menjadi dasar awal
                    pembelajaran elektronik (e-learning) untuk menyampaikan informasi.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Perkembangan Interaktif:</p>
                <p class="text-black/80 max-w-5xl mx-5">Di tahun 1970-an, e-learning mulai berkembang menjadi lebih
                    interaktif, dengan beberapa universitas di Inggris mulai menerapkan pembelajaran jarak jauh.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Perangkat Lunak Awal:</p>
                <p class="text-black/80 max-w-5xl mx-5">Pada tahun 1990-an, появились aplikasi pendidikan dalam bentuk
                    CD-ROM. Perangkat lunak LMS pertama, yaitu Firstclass, diluncurkan oleh SoftArc, yang menyediakan
                    forum diskusi.</p>
            </div>

            <div class="mt-2">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">2. Munculnya LMS Modern (Awal 2000-an)</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Moodle dan Konsep Open Source:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Sekitar tahun 2000, LMS mulai beralih ke aplikasi berbasis web
                    dengan konsep open-source. Moodle adalah salah satu program open-source pertama yang menjadi cikal
                    bakal LMS modern dan program paling populer. </p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">SCORM:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Di awal tahun 2000-an, Standar Referensi Objek Konten yang Dapat
                    Dibagikan (SCORM) diperkenalkan, yang memungkinkan konten dibuat dan dibagikan antar berbagai LMS,
                    meningkatkan interoperabilitas.</p>
            </div>

            <div class="mb-4">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">3. Inovasi dan Pertumbuhan (2008 - Sekarang)
                </p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Sistem Berbasis Cloud:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Pada tahun 2008, Eucalyptus, LMS berbasis cloud pertama,
                    dirilis. Sistem ini memungkinkan penyimpanan informasi secara daring, sehingga pembelajaran dapat
                    dilakukan sepenuhnya tanpa tatap muka.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Peningkatan Kebutuhan Digital:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Seiring dengan perkembangan ekosistem digital, penggunaan LMS
                    meningkat pesat, terutama karena penekanan pada pembelajaran jarak jauh dan perkembangan teknologi
                    informasi dan komunikasi (TIK) seperti mobile dan video streaming.</p>
            </div>



        </div>
        <a href="/blogvr" class=" max-w-7xl container mx-auto text-left px-14 text-blue-600">Berita Selanjutnya</a>
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