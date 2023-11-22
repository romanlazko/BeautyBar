<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BeautyBar</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        <main>
            <section class="w-full bg-[#1E3B2B]">
                <div class="max-w-7xl md:flex w-full m-auto h-[800px]">
                    <nav class="md:hidden w-full m-auto flex font-['Montserrat'] text-[#EAD7CA] justify-between py-4 px-10 fixed bg-[#1E3B2B]">
                        <div x-data="{ menu: false }" class="relative">
                            <a id="menu" href="#" @click="menu = ! menu" >MENU</a>
                        
                            <div x-cloak x-show="menu" @click="menu = false" class="fixed inset-0 z-10 w-full h-full"></div>
                        
                            <div x-cloak x-show="menu" class="absolute left-0 z-10 mt-2 bg-white rounded-md shadow-xl border max-h-[200px] overflow-auto" id="menu">
                                <a href="">MAIN</a>
                                <a href="">ABOUT US</a>
                            </div>
                        </div>
                        <div x-data="{ lang: false }" class="relative">
                            <a id="lang" href="#" @click="lang = ! lang">RU</a>
                        
                            <div x-cloak x-show="lang" @click="lang = false" class="fixed inset-0 z-10 w-full h-full"></div>
                        
                            <div x-cloak x-show="lang" class="absolute left-0 z-10 mt-2 bg-white rounded-md shadow-xl border max-h-[200px] overflow-auto" id="lang">
                                <a href="">CZ</a>
                                <a href="">EN</a>
                            </div>
                        </div>
                    </nav>
                    <div class="h-1/2 md:h-full w-full bg-no-repeat bg-cover bg-center" style="background-image:url({{ asset('img/main.png')}});">
                    </div>
                    <div class="h-1/2 md:h-full w-full grid p-10 lg:p-20 content-between">
                        <nav class="hidden md:flex w-full m-auto  font-['Montserrat'] text-[#EAD7CA] justify-between">
                            <div x-data="{ menu: false }" class="relative">
                                <a id="menu" href="#" @click="menu = ! menu" >MENU</a>
                            
                                <div x-cloak x-show="menu" @click="menu = false" class="fixed inset-0 z-10 w-full h-full"></div>
                            
                                <div x-cloak x-show="menu" class="absolute left-0 z-10 mt-2 bg-white rounded-md shadow-xl border max-h-[200px] overflow-auto" id="menu">
                                    <a href="">MAIN</a>
                                    <a href="">ABOUT US</a>
                                </div>
                            </div>
                            <div x-data="{ lang: false }" class="relative">
                                <a id="lang" href="#" @click="lang = ! lang">RU</a>
                            
                                <div x-cloak x-show="lang" @click="lang = false" class="fixed inset-0 z-10 w-full h-full"></div>
                            
                                <div x-cloak x-show="lang" class="absolute left-0 z-10 mt-2 bg-white rounded-md shadow-xl border max-h-[200px] overflow-auto" id="lang">
                                    <a href="">CZ</a>
                                    <a href="">EN</a>
                                </div>
                            </div>
                        </nav>
                        <img class="w-full" src="/img/logo.svg" alt="">
                        <button class="w-full rounded-full py-4 bg-[#EAD7CA] text-[#1E3B2B] font-['Montserrat']">
                            MAKE A RESERVATION
                        </button>
                    </div>
                </div>
            </section>

            <section class="w-full bg-[#F1EBE7]">
                <div class="max-w-7xl flex w-full m-auto p-10 lg:p-20 space-x-16 items-center">
                    <div class="sm:w-3/5">
                        <div class="grid h-full content-between text-center py-12 space-y-16">
                            <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B]">WE ARE HAPPY TO SEE YOU IN <br> VALERI BEAUTY BAR</h1>
                            <div class="space-y-6 font-['Montserrat'] text-base text-[#1E3B2B]">
                                <p>
                                    Our mission is to inspire and to show you, that manicure is not only a beauty procedure,  but an expression of self-care. 
                                </p>
                                <p>
                                    You shouldn’t worry about the quality and comfort - leave it for us. 
                                </p>
                                <p>
                                    Just relax, enjoy and take your time. 
                                </p>
                            </div>
                            <h1 class="text-right text-lg font-['Zapfino'] text-[#6B1C02] font-thin">Sincerelly yours Valeri Beuty Bar</h1>
                        </div>
                    </div>
                    <div class="w-2/5 hidden sm:block">
                        <img src="/img/about.png" alt="" class="">
                    </div>
                </div>
            </section>

            <section class="w-full bg-[#1E3B2B] ">
                <div class="max-w-7xl w-full m-auto px-5 py-10 lg:p-20 space-y-12 md:space-y-20">
                    <div class="w-full sm:flex space-y-12 sm:space-x-20 sm:space-y-0">
                        <div class="w-full flex space-x-3 text-[#EAD7CA] md:px-5">
                            <div>
                                <img src="/img/icon/1.svg" alt="" class="w-full h-full min-w-[5rem]">
                            </div>
                            <div class="w-full space-y-2">
                                <h1 class="font-['Cinzel'] font-medium text-md">
                                    PROFESSIONAL MANICURES
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    Our masters bring their expertise and precision to every service, ensuring that you leave our studio with beautiful, well-crafted nails. Your satisfaction is our priority.
                                </p>
                            </div>
                        </div>
                        <div class="w-full flex space-x-3 text-[#EAD7CA] md:px-5">
                            <div>
                                <img src="/img/icon/1.svg" alt="" class="w-full h-full min-w-[5rem]">
                            </div>
                            <div class="w-full space-y-2">
                                <h1 class="font-['Cinzel'] font-medium text-md">
                                    PROFESSIONAL MANICURES
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    Our masters bring their expertise and precision to every service, ensuring that you leave our studio with beautiful, well-crafted nails. Your satisfaction is our priority.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:flex space-y-12 sm:space-x-20 sm:space-y-0">
                        <div class="w-full flex space-x-3 text-[#EAD7CA] md:px-5">
                            <div>
                                <img src="/img/icon/1.svg" alt="" class="w-full h-full min-w-[5rem]">
                            </div>
                            <div class="w-full space-y-2">
                                <h1 class="font-['Cinzel'] font-medium text-md">
                                    PROFESSIONAL MANICURES
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    Our masters bring their expertise and precision to every service, ensuring that you leave our studio with beautiful, well-crafted nails. Your satisfaction is our priority.
                                </p>
                            </div>
                        </div>
                        <div class="w-full flex space-x-3 text-[#EAD7CA] md:px-5">
                            <div>
                                <img src="/img/icon/1.svg" alt="" class="w-full h-full min-w-[5rem]">
                            </div>
                            <div class="w-full space-y-2">
                                <h1 class="font-['Cinzel'] font-medium text-md">
                                    PROFESSIONAL MANICURES
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    Our masters bring their expertise and precision to every service, ensuring that you leave our studio with beautiful, well-crafted nails. Your satisfaction is our priority.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full bg-[#F1EBE7] ">
                <div class="max-w-7xl flex w-full m-auto px-5 py-10 lg:p-20">
                    <div class="overwlow-auto sm:flex text-center space-y-12 sm:space-y-0">
                        <div class="w-full sm:w-1/3 grid content-between sm:border-b-[1px] sm:border-b-[#1E3B2B] justify-center space-y-12 px-4">
                            <div class="space-y-8">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    desinfection
                                </h1>
                                <p class="font-['Montserrat'] text-base text-[#1E3B2B] ">
                                    We wash and disinfect our hands using special products before we start working with each client.
                                </p>
                            </div>
                            <div class="m-auto rounded-full w-[10px] h-[10px] bg-[#1E3B2B] transform translate-y-[60%]">
                            </div>
                        </div>
                        <div class="w-full sm:w-1/3 grid content-between sm:border-b-[1px] sm:border-b-[#1E3B2B] justify-center space-y-12 px-4">
                            <div class="space-y-8">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    sterile tools
                                </h1>
                                <p class="font-['Montserrat'] text-base text-[#1E3B2B] ">
                                    All instruments used in manicure go through a cleaning and sterilization procedure in special devices. This ensures that they are completely safe to use.
                                </p>
                            </div>
                            <div class="m-auto rounded-full w-[10px] h-[10px] bg-[#1E3B2B] transform translate-y-[60%]">
                            </div>
                        </div>
                        <div class="w-full sm:w-1/3 grid content-between sm:border-b-[1px] sm:border-b-[#1E3B2B] justify-center space-y-12 px-4">
                            <div class="space-y-8">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    clean surface
                                </h1>
                                <p class="font-['Montserrat'] text-base text-[#1E3B2B] ">
                                    The surfaces on which the master works are also regularly disinfected and cleaned to eliminate the risk of transmitting infections.
                                </p>
                            </div>
                            <div class="m-auto rounded-full w-[10px] h-[10px] bg-[#1E3B2B] transform translate-y-[60%]">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full bg-[#1E3B2B] ">
                <div class="max-w-5xl w-full m-auto px-5 py-10 lg:p-20 space-y-16">
                    <h1 class="m-auto sm:w-3/4 text-center uppercase border-2 border-[#EAD7CA] rounded-full py-3 text-[#EAD7CA] font-['Cinzel'] text-2xl">PRICE LIST</h1>
                    <div class="flex justify-end font-medium">
                        <button class="py-1 px-5 border bg-[#EAD7CA] rounded-l-full font-['Cinzel'] text-[#1E3B2B]">VALERI</button>
                        <button class="py-1 px-5 border rounded-r-full font-['Cinzel'] text-[#EAD7CA]">SOFI</button>
                    </div>
                    <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">Nail services</h1>
                    <div class="w-full flex sm:space-x-6">
                        <div style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(180deg); transform-origin: center;" class="hidden sm:block">
                            <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap">Nail services</h1>
                        </div>
                        
                        <ul class="w-full space-y-10 text-[#EAD7CA] font-['Montserrat'] border-l-[1px] py-5">
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">Nail art</h1>
                    <div class="w-full flex sm:space-x-6">
                        <div style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(180deg); transform-origin: center;" class="hidden sm:block">
                            <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap">Nail art</h1>
                        </div>
                        <ul class="w-full space-y-10 text-[#EAD7CA] font-['Montserrat'] border-l-[1px] py-5">
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                </div>
                                <div class="flex justify-between pl-5 w-full">
                                    <div class="sm:flex space-x-40">
                                        <h1 class="font-medium text-lg">Classic Manicure</h1>
                                        <p class="font-extralight text-sm"></p>
                                    </div>
                                    <div>
                                        <span>
                                            550
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="w-full">
                        <ul class="text-[#F1EBE7]">
                            <li>
                                * removing as a gift
                            </li>
                            <li>
                                ** the prices are indicative and may vary depending on additional services
                            </li>
                        </ul>
                    </div>
                    
                    <h1 class="text-right text-lg font-['Zapfino'] text-[#F1EBE7] font-thin leading-10">We also have gift certificates available for manicure services </h1>
                </div>
            </section>

            <section class="w-full bg-[#F1EBE7] ">
                <div class="max-w-7xl w-full m-auto px-5 py-10 lg:p-20 space-y-16 md:space-y-20">
                    <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase text-center w-full">
                        our masters are the real professionals 
                    </h1>
                    <div class="w-full sm:flex space-y-16 sm:space-y-0 space-x-3">
                        <div class="w-full flex space-x-4 items-center">
                            <div class="">
                                <img src="/img/avatar/valeria_kim.png" alt="" class="rounded-full object-cover shadow-xl ">
                            </div>
                            <div class="w-full space-y-4 ">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    valeria kim
                                </h1>
                                <ul class="list-disc list-outside font-['Montserrat'] text-xs md:text-sm text-[#1E3B2B] pl-5 space-y-1">
                                    <li>
                                        Working with natural nails (gel polish) 
                                    </li>
                                    <li>
                                        Strengthening of natural nails by harder materials
                                    </li>
                                    <li>
                                        Full nail extensions with reservation only
                                    </li>
                                    <li>
                                        Designs of any difficulty
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full flex space-x-4 items-center">
                            <div class="">
                                <img src="/img/avatar/valeria_kim.png" alt="" class="rounded-full object-cover shadow-xl ">
                            </div>
                            <div class="w-full space-y-4 ">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    valeria kim
                                </h1>
                                <ul class="list-disc list-outside font-['Montserrat'] text-xs md:text-sm text-[#1E3B2B] pl-5 space-y-1">
                                    <li>
                                        Working with natural nails (gel polish) 
                                    </li>
                                    <li>
                                        Strengthening of natural nails by harder materials
                                    </li>
                                    <li>
                                        Full nail extensions with reservation only
                                    </li>
                                    <li>
                                        Designs of any difficulty
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sm:flex justify-around space-y-6 sm:space-y-0">
                        <h1 class="text-left text-lg font-['Zapfino'] text-[#6B1C02] font-thin w-full leading-10">We also have gift certificates available for manicure services </h1>
                        <div>
                            icons
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full bg-[#1E3B2B] ">
                <div class=" max-w-7xl w-full m-auto px-5 py-10 lg:p-20 space-y-16">
                    <div class="w-full sm:flex sm:space-x-16 space-y-16 sm:space-y-0 items-center">
                        <div class="w-full sm:w-1/2 md:w-1/3 text-center space-y-16">
                            <div class="text-[#EAD7CA] font-['Montserrat'] ">
                                <p>
                                    City center, near Main railway station
                                </p>
                                <p class=" font-bold">
                                    Masarykova 31, Brno, Czech Republic
                                </p>
                                <p>
                                    in the indoor unit
                                </p>
                            </div>
                            
                            <button class="w-full rounded-full py-4 bg-[#EAD7CA] text-[#1E3B2B] font-['Montserrat']">
                                MAKE A RESERVATION
                            </button>
                        </div>
                        <div class="w-full sm:w-1/2 md:w-2/3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.454929903613!2d16.60810277762968!3d49.191928871379304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47129456f6af2e4d%3A0x5653299386d3ad4c!2zRnJhbnRpxaFrw6Fuc2vDoSA1MDEsIDYwMiAwMCBCcm5vLW3Em3N0bw!5e0!3m2!1sru!2scz!4v1699533808755!5m2!1sru!2scz" class="w-full" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>
