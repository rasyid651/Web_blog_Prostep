<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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


        <section class="pt-24 px-12">
            <div class="container mx-auto max-w-7xl mt-8 flex flex-col">
                <h1 class="text-3xl text-black font-bold">Profil</h1>
                <p class="text-s text-black/80 max-w-md">Tim ini terdiri dari 3 anggota</p>
            </div>
        </section>


        <section class="pt-24 px-5">
            <div class="container mx-auto max-w-7xl">
                <div class="flex justify-between items-center">


                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">



                        <x-bladewind::card class="px-8 py-8 rounded w-auto shadow-xl hover:shadow-lg transition">
                            <div class="flex flex-rows items-center gap-3 pt-2">
                                <img src="reihan.jpg" alt="" class="w-[120px] h-[120px] rounded-full object-cover" />
                                <div class="flex flex-col">
                                    <h1 class="text-2xl pt-3 text-black font-bold">Reihan Firmansyah</h1>
                                    <p class="text-xl text-gray-700">FrontEnd</p>
                                </div>
                            </div>
                            <p class="mt-2 text-black text-lg leading-relaxed">pengembangan tampilan dan interaksi pada
                                sebuah website
                                atau aplikasi</p>
                            <div class="flex flex-col gap-2 mt-4">
                                <div class="flex flex-rows gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone">
                                        <path
                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                                    </svg>
                                    <p class="text-sm text-black font-bold">+62 877 3975 3449</p>
                                </div>
                                <div class="flex flex-rows gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail">
                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                        <rect x="2" y="4" width="20" height="16" rx="2" />
                                    </svg>
                                    <p class="text-sm text-black font-bold">reihanfirmansyah9@gmail.com</p>
                                </div>
                            </div>
                        </x-bladewind::card>


                        <x-bladewind::card class="px-8 py-8 rounded w-auto shadow-xl hover:shadow-lg transition">
                            <div class="flex flex-rows items-center gap-3 pt-2">
                                <img src="rasid.jpg" alt="" class="w-[120px] h-[120px] rounded-full object-cover" />
                                <div class="flex flex-col">
                                    <h1 class="text-2xl pt-3 text-black font-bold">Muhammad AL Rasyid</h1>
                                    <p class="text-xl text-gray-700">UI/UX Design</p>
                                </div>
                            </div>
                            <p class="mt-2 text-black text-lg leading-relaxed line-clamp-2">
                                Menciptakan antarmuka yang sederhana, dan berfokus pada pemecahan
                                masalah pengguna.
                            </p>
                            <div class="flex flex-col gap-2 mt-4">
                                <div class="flex flex-rows gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone">
                                        <path
                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                                    </svg>
                                    <p class="text-sm text-black font-bold">+62 878 4272 8466</p>
                                </div>
                                <div class="flex flex-rows gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail">
                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                        <rect x="2" y="4" width="20" height="16" rx="2" />
                                    </svg>
                                    <p class="text-sm text-black font-bold">muhammadalrasyid789@gmail.com</p>
                                </div>
                            </div>
                        </x-bladewind::card>



                        <x-bladewind::card class="px-8 py-8 rounded w-auto shadow-xl hover:shadow-lg transition">
                            <div class="flex flex-rows items-center gap-3 pt-2">
                                <img src="syamil.jpg" alt="" class="w-[120px] h-[120px] rounded-full object-cover" />
                                <div class="flex flex-col">
                                    <h1 class="text-2xl pt-3 text-black font-bold">Syamil Cholid Atsani</h1>
                                    <p class="text-xl text-gray-700">FrontEnd</p>
                                </div>
                            </div>
                            <p class="mt-2 text-black text-lg leading-relaxed">Membangun tampilan website yang nyaman
                                untuk para
                                pengguna</p>
                            <div class="flex flex-col gap-2 mt-4">
                                <div class="flex flex-rows gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone">
                                        <path
                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                                    </svg>
                                    <p class="text-sm text-black font-bold">+62 822 9445 1306</p>
                                </div>
                                <div class="flex flex-rows gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail">
                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                        <rect x="2" y="4" width="20" height="16" rx="2" />
                                    </svg>
                                    <p class="text-sm text-black font-bold">syamilcholidatsaniu@gmail.com</p>
                                </div>
                            </div>
                        </x-bladewind::card>

                    </div>
                </div>
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