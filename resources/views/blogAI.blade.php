</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artificial Intelegance</title>
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
            <h1 class="text-black font-bold text-3xl ">Kecerdasan Buatan</h1>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed">Kecerdasan buatan ( AI ) adalah kemampuan sistem komputasi untuk
                melakukan tugas-tugas yang umumnya berkaitan dengan kecerdasan manusia, seperti pembelajaran, penalaran,
                pemecahan masalah, persepsi, dan pengambilan keputusan. Kecerdasan buatan merupakan bidang penelitian
                dalam ilmu komputer yang mengembangkan dan mempelajari metode serta perangkat lunak yang memungkinkan
                mesin untuk memahami lingkungannya dan menggunakan pembelajaran serta kecerdasan untuk mengambil
                tindakan yang memaksimalkan peluang mereka dalam mencapai tujuan yang ditentukan.</p>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed">Aplikasi AI yang terkenal meliputi mesin pencari web canggih
                (misalnya, Google Search); sistem rekomendasi (digunakan oleh YouTube, Amazon, dan Netflix); asisten
                virtual (misalnya, Google Assistant, Siri, dan Alexa); kendaraan otonom (misalnya, Waymo); alat
                generatif dan kreatif (misalnya, model bahasa dan seni AI); dan permainan serta analisis super dalam
                permainan strategi (misalnya, catur dan Go). Namun, banyak aplikasi AI tidak dianggap sebagai AI:
                "Banyak AI mutakhir telah masuk ke aplikasi umum, seringkali tanpa disebut AI karena begitu sesuatu
                menjadi cukup berguna dan umum, ia tidak lagi diberi label AI.</p>
            <hr>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed">AI berawal dari konsep pemikiran Alan Turing pada tahun 1950-an,
                kemudian secara resmi diperkenalkan pada Konferensi Dartmouth tahun 1956 oleh John McCarthy, yang
                memperkenalkan istilah "Artificial Intelligence". Perkembangan AI mengalami pasang surut, dengan periode
                "musim dingin AI" karena keterbatasan teknologi dan pendanaan, namun kembali bangkit di akhir 1990-an
                dan terus berkembang pesat hingga saat ini, di mana AI telah terintegrasi dalam berbagai aspek kehidupan
                sehari-hari seperti asisten virtual dan kendaraan otonom.</p>

            <div class="mt-2">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">1. Konsep dan Perintisan (1950-an)</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Ide Alan Turing:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Konsep dasar AI mulai muncul pada tahun 1950-an dengan tulisan
                    Alan Turing yang menyatakan bahwa mesin dapat berpikir dan menyelesaikan masalah seperti manusia. Ia
                    juga mengembangkan "Turing Test" untuk mengukur kemampuan mesin meniru kecerdasan manusia. </p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Konferensi Dartmouth:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Pada tahun 1956, John McCarthy memprakarsai sebuah konferensi di
                    Dartmouth College yang secara resmi melahirkan bidang Artificial Intelligence. McCarthy adalah orang
                    yang memperkenalkan dan mempopulerkan istilah "Artificial Intelligence".</p>
            </div>

            <div class="mt-2">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">2. Periode Emas dan Kemunduran (1950-an -
                    1980-an)</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Masa Keemasan:</p>
                <p class="text-black/80 max-w-5xl mx-5">Periode 1950-an hingga 1960-an dianggap sebagai masa keemasan
                    awal AI, di mana penelitian dan pengembangan aktif dilakukan.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Munculnya "Musim Dingin AI":</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Minat terhadap AI sempat menurun pada akhir 1980-an dan awal
                    1990-an, yang dikenal sebagai "musim dingin AI". Hal ini disebabkan oleh keterbatasan teknologi,
                    kurangnya daya komputasi yang memadai, kekurangan data, serta hilangnya pendanaan dari investor dan
                    pemerintah.</p>
            </div>

            <div class="mb-4">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">3. Kebangkitan dan Perkembangan Pesat (1990-an
                    - Sekarang)</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Kebangkitan AI:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Pada akhir 1990-an, AI mengalami kebangkitan kembali berkat
                    kemajuan dalam teknologi komputer dan pemrosesan data. </p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Integrasi dalam Kehidupan:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Sejak tahun 2000-an hingga sekarang, AI semakin terintegrasi
                    dalam kehidupan sehari-hari. Asisten virtual seperti Siri dan Alexa, kendaraan otonom, sistem
                    rekomendasi di media sosial, dan aplikasi diagnostik medis adalah beberapa contoh penerapan AI yang
                    populer.</p>
            </div>



        </div>
        <a href="/bloglms" class=" max-w-7xl container mx-auto text-left px-14 text-blue-600">Berita Selanjutnya</a>
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