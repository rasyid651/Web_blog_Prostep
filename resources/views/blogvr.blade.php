<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Reality</title>
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
            <h1 class="text-black font-bold text-3xl ">Realitas Virtual</h1>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed">Virtual reality adalah suatu teknologi yang memungkinkan seseorang
                dapat melakukan simulasi dengan menghadirkan visual dan suasana tiga dimensi. Jadi, ketika
                menggunakannya akan membuatmu seolah hadir dan terlibat langsung dalam suasana tersebut.</p>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed">Istilah virtual reality mulai populer pada tahun 1980 oleh Jaron
                Lanier yang merupakan pemilik perusahaan VPL Riset. Untuk mendukung pengembangan teknologi VR, Lanier
                juga mengembangkan peralatan virtual reality seperti sarung tangan dan kaca mata khusus (goggle).</p>
            <hr>
            <p class="text-black/80 max-w-7xl py-2 leading-relaxed">Virtual reality (VR) dimulai dengan konsep dan inovasi awal pada
                tahun 1950-an dan 1960-an, termasuk perangkat Sensorama oleh Morton Heilig dan sistem headset Sword of
                Damocles oleh Ivan Sutherland. Setelah periode pengembangan yang terbatas pada militer dan penelitian,
                VR mulai berkembang pesat pada 2010-an dengan munculnya perangkat seperti Oculus Rift, diikuti oleh
                peningkatan teknologi dan adopsi yang lebih luas di berbagai industri seperti game, pelatihan, dan
                terapi.</p>

            <div class="mt-2">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">1. Konsep dan Inovasi Awal (1950-an - 1960-an)
                </p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Marton Heilig:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Morton Heilig menciptakan Sensorama, mesin teater yang bertujuan
                    memberikan pengalaman multisensori, tidak hanya visual dan suara tetapi juga sensasi angin.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Ivan Sutherland:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Ivan Sutherland menciptakan sistem headset pertama yang dikenal
                    sebagai Sword of Damocles, memungkinkan pengguna untuk melihat dan berinteraksi dengan dunia virtual
                    melalui layar yang dipasang di kepala.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold leading-relaxed">Myron Krueger:</p>
                <p class="text-black/80 max-w-5xl mx-5">Ilmuwan seperti Myron Krueger mulai bereksperimen dengan
                    Artificial Reality, menciptakan lingkungan computer-generated yang merespons pengguna.</p>
            </div>

            <div class="mt-2">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">2. Perkembangan dan Keterbatasan (1980-an -
                    2000-an)</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">1980-an::</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Istilah "virtual reality" diciptakan oleh Jaron Lanier, yang
                    juga mengembangkan beberapa perangkat seperti sarung tangan dan kacamata VR.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold leading-relaxed">Potensi yang besar:</p>
                <p class="text-black/80 max-w-5xl mx-5">Industri game mulai menjajaki potensi VR dengan beberapa
                    perangkat dan perangkat lunak, meskipun teknologi belum cukup matang dan minat pasar menurun setelah
                    itu.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold leading-relaxed">Awal 2000-an:</p>
                <p class="text-black/80 max-w-5xl mx-5">Minat terhadap VR sempat menurun, namun Google mulai
                    memperkenalkan teknologi seperti Street View, yang menawarkan pengalaman eksplorasi kota secara
                    virtual.</p>
            </div>

            <div class="mb-4">
                <p class="text-black/90 max-w-7xl py-2 text-xl font-bold">3. Kebangkitan Era Modern (2010-an - Sekarang)
                </p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Titik balik:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Oculus Rift diluncurkan, menandai titik balik dan awal dari era
                    modern VR, mendorong teknologi menjadi lebih realistis dan menarik.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">2014:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">Akuisisi Oculus oleh Facebook dengan nilai besar mempertegas
                    peran penting VR di industri teknologi dan mendorong investasi lebih lanjut.</p>
                <p class="text-black/80 max-w-7xl text-lg mx-5 font-semibold">Saat ini:</p>
                <p class="text-black/80 max-w-5xl mx-5 leading-relaxed">VR telah berkembang menjadi teknologi yang digunakan secara luas
                    dalam berbagai bidang, termasuk game, pelatihan profesional, edukasi, dan bahkan terapi kesehatan.
                </p>
            </div>



        </div>
        <a href="/blogAI" class=" max-w-7xl container mx-auto text-left px-14 text-blue-600">Berita Selanjutnya</a>
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