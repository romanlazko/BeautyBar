<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
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
            <section id="main" class="w-full bg-[#1E3B2B]">
                <div class="max-w-7xl md:flex w-full m-auto h-[800px]">
                    <nav class="md:hidden w-full m-auto flex font-['Montserrat'] text-[#EAD7CA] justify-between py-4 px-10 fixed bg-[#1E3B2B] shadow-lg z-50">
                        <div x-data="{ menu: false }" class="relative">
                            <button id="menu" href="#" @click="menu = ! menu">{{ __('MENU') }}</button>
                        
                            <div x-cloak x-show="menu" @click="menu = false" class="fixed inset-0 z-10 w-full h-full"></div>
                        
                            <div x-cloak x-show="menu" class="w-[200px] absolute left-0 z-10 mt-2 bg-[#1E3B2B] rounded-md shadow-xl border border-[#EAD7CA] overflow-auto" id="menu">
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#main">{{ __('MAIN') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#about">{{ __('ABOUT US') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#perks">{{ __('OUR PERKS') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#sterilization">{{ __('STERILIZATION') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#price">{{ __('PRICE') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#masters">{{ __('OUR MASTERS') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#contacts">{{ __('CONTACTS') }}</a>
                            </div>
                        </div>
                        <div x-data="{ lang: false }" class="relative">
                            <button id="lang" href="#" @click="lang = ! lang" class="uppercase">{{ session('my_locale', 'cz') ?? config('app.locale') }}</button>
                        
                            <div x-cloak x-show="lang" @click="lang = false" class="fixed inset-0 z-10 w-full h-full"></div>
                        
                            <div x-cloak x-show="lang" class="w-[200px] absolute right-0 z-10 mt-2 bg-[#1E3B2B] rounded-md shadow-xl border border-[#EAD7CA] overflow-auto" id="lang">
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="{{ route('language', 'cz') }}">CZ</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="{{ route('language', 'en') }}">EN</a>
                            </div>
                        </div>
                    </nav>
                    <div class="h-1/2 md:h-full w-full bg-no-repeat bg-cover bg-center" style="background-image:url({{ asset('img/main.png')}});">
                    </div>
                    <div class="h-1/2 md:h-full w-full grid p-10 lg:p-20 content-between">
                        <nav class="hidden md:flex w-full m-auto font-['Montserrat'] text-[#EAD7CA] justify-between">
                            <div x-data="{ menu: false }" class="relative">
                                <button id="menu" href="#" @click="menu = ! menu" @mouseover="menu = ! menu">{{ __('MENU') }}</button>
                        
                                <div x-cloak x-show="menu" @click="menu = false" class="fixed inset-0 z-10 w-full h-full"></div>
                            
                                <div x-cloak x-show="menu" class="w-[200px] absolute left-0 z-10 mt-2 bg-[#1E3B2B] rounded-md shadow-xl border border-[#EAD7CA] overflow-auto" id="menu">
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#main">{{ __('MAIN') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#about">{{ __('ABOUT US') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#perks">{{ __('OUR PERKS') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#sterilization">{{ __('STERILIZATION') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#price">{{ __('PRICE') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#masters">{{ __('OUR MASTERS') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#contacts">{{ __('CONTACTS') }}</a>
                                </div>
                            </div>
                            <div x-data="{ lang: false }" class="relative">
                                <button id="lang" href="#" @click="lang = ! lang" @mouseover="lang = ! lang" class="uppercase">{{ session('my_locale', 'cz') ?? config('app.locale') }}</button>
                            
                                <div x-cloak x-show="lang" @click="lang = false" class="fixed inset-0 z-10 w-full h-full"></div>
                            
                                <div x-cloak x-show="lang" class="w-[200px] absolute right-0 z-10 mt-2 bg-[#1E3B2B] rounded-md shadow-xl border border-[#EAD7CA] overflow-auto" id="lang">
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="{{ route('language', 'cz') }}">CZ</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="{{ route('language', 'en') }}">EN</a>
                                </div>
                            </div>
                        </nav>
                        <img class="w-full" src="/img/logo.svg" alt="">
                        <a href="https://t.me/valeri_beautybar_bot?start=referal=569568856" class="block w-full rounded-full p-4 bg-[#EAD7CA] text-[#1E3B2B] font-['Montserrat'] text-center shadow-md hover:scale-105 transition ease-in-out duration-150">
                            {{ __('MAKE A RESERVATION') }}
                        </a>
                    </div>
                </div>
            </section>

            <section id="about" class="w-full bg-[#F1EBE7]">
                <div class="max-w-7xl flex w-full m-auto p-10 lg:p-20 space-x-16 items-center">
                    <div class="sm:w-3/5">
                        <div class="grid h-full content-between text-center py-12 space-y-16">
                            <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B]">{{ __('WE ARE HAPPY TO SEE YOU IN') }} <br> VALERI BEAUTY BAR</h1>
                            <div class="space-y-6 font-['Montserrat'] text-base text-[#1E3B2B]">
                                <p>
                                    {{ __('Our mission is to inspire and to show you, that manicure is not only a beauty procedure,  but an expression of self-care.') }}
                                </p>
                                <p>
                                    {{ __('You shouldn’t worry about the quality and comfort - leave it for us.') }}
                                </p>
                                <p>
                                    {{ __('Just relax, enjoy and take your time.') }}
                                </p>
                            </div>
                            <h1 class="text-right text-lg font-['Zapfino'] text-[#6B1C02] font-thin">{{ __('Sincerelly yours Valeri Beuty Bar') }}</h1>
                        </div>
                    </div>
                    <div class="w-2/5 hidden sm:block">
                        <img src="/img/about.png" alt="" class="">
                    </div>
                </div>
            </section>

            <section id="perks" class="w-full bg-[#1E3B2B] ">
                <div class="max-w-7xl w-full m-auto px-5 py-10 lg:p-20 space-y-12 md:space-y-20">
                    <div class="w-full sm:flex space-y-12 sm:space-x-10 lg:space-x-20 sm:space-y-0">
                        <div class="w-full flex space-x-3 text-[#EAD7CA] md:px-5">
                            <div>
                                <img src="/img/icon/nail.svg" alt="" class="w-full h-min min-w-[5rem] shadow-md rounded-full">
                            </div>
                            <div class="w-full space-y-2">
                                <h1 class="font-['Cinzel'] font-medium text-md">
                                    {{ __('PROFESSIONAL MANICURES') }}
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    {{ __('Our masters bring their expertise and precision to every service, ensuring that you leave our studio with beautiful, well-crafted nails. Your satisfaction is our priority.') }}
                                </p>
                            </div>
                        </div>
                        <div class="w-full flex space-x-3 text-[#EAD7CA] md:px-5">
                            <div>
                                <img src="/img/icon/coffee.svg" alt="" class="w-full h-min min-w-[5rem] shadow-md rounded-full">
                            </div>
                            <div class="w-full space-y-2">
                                <h1 class="font-['Cinzel'] font-medium text-md">
                                    {{ __('COZY ATMOSPHERE') }}
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    {{ __('Here you`ll find a warm and inviting ambiance. Our friendly staff is dedicated to making you feel comfortable and unique.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:flex space-y-12 sm:space-x-10 lg:space-x-20 sm:space-y-0">
                        <div class="w-full flex space-x-3 text-[#EAD7CA] md:px-5">
                            <div>
                                <img src="/img/icon/city.svg" alt="" class="w-full h-min min-w-[5rem] shadow-md rounded-full">
                            </div>
                            <div class="w-full space-y-2">
                                <h1 class="font-['Cinzel'] font-medium text-md">
                                    {{ __('PRIME LOCATION') }}
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    {{ __('Our studio is situated in the heart of the city, making it more accessible to clients.') }}
                                </p>
                            </div>
                        </div>
                        <div class="w-full flex space-x-3 text-[#EAD7CA] md:px-5">
                            <div>
                                <img src="/img/icon/palette.svg" alt="" class="w-full h-min min-w-[5rem] shadow-md rounded-full">
                            </div>
                            <div class="w-full space-y-2">
                                <h1 class="font-['Cinzel'] font-medium text-md">
                                    {{ __('WIDE COLOR PALETTE') }}
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    {{ __('Choose from a vast spectrum of nail polish colors to match your unique style and mood.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="sterilization" class="w-full bg-[#F1EBE7] ">
                <div class="max-w-7xl flex w-full m-auto px-5 py-10 lg:p-20">
                    <div class="overwlow-auto sm:flex text-center space-y-12 sm:space-y-0">
                        <div class="w-full sm:w-1/3 grid content-between sm:border-b-[1px] sm:border-b-[#1E3B2B] justify-center space-y-12 px-4">
                            <div class="space-y-8">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    {{ __('desinfection') }}
                                </h1>
                                <p class="font-['Montserrat'] text-base text-[#1E3B2B] ">
                                    {{ __('We wash and disinfect our hands using special products before we start working with each client.') }}
                                </p>
                            </div>
                            <div class="m-auto rounded-full w-[10px] h-[10px] bg-[#1E3B2B] transform translate-y-[60%]">
                            </div>
                        </div>
                        <div class="w-full sm:w-1/3 grid content-between sm:border-b-[1px] sm:border-b-[#1E3B2B] justify-center space-y-12 px-4">
                            <div class="space-y-8">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    {{ __('sterile tools') }}
                                </h1>
                                <p class="font-['Montserrat'] text-base text-[#1E3B2B] ">
                                    {{ __('All instruments used in manicure go through a cleaning and sterilization procedure in special devices. This ensures that they are completely safe to use.') }}
                                </p>
                            </div>
                            <div class="m-auto rounded-full w-[10px] h-[10px] bg-[#1E3B2B] transform translate-y-[60%]">
                            </div>
                        </div>
                        <div class="w-full sm:w-1/3 grid content-between sm:border-b-[1px] sm:border-b-[#1E3B2B] justify-center space-y-12 px-4">
                            <div class="space-y-8">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    {{ __('clean surface') }}
                                </h1>
                                <p class="font-['Montserrat'] text-base text-[#1E3B2B] ">
                                    {{ __('The surfaces on which the master works are also regularly disinfected and cleaned to eliminate the risk of transmitting infections.') }}
                                </p>
                            </div>
                            <div class="m-auto rounded-full w-[10px] h-[10px] bg-[#1E3B2B] transform translate-y-[60%]">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="price" class="w-full bg-[#1E3B2B] ">
                <div class="max-w-5xl w-full m-auto px-5 py-10 lg:p-20 space-y-16" x-data="{ show: true }">
                    <h1 class="m-auto sm:w-3/4 text-center uppercase border-2 border-[#EAD7CA] rounded-full py-3 text-[#EAD7CA] font-['Cinzel'] text-2xl">
                        {{ __('PRICE LIST') }}
                    </h1>
                    <div class="flex justify-end font-medium">
                        <button id="valeriButton" class="py-1 px-5 border rounded-l-full font-['Cinzel']" @click="show = true" :class="show ? 'bg-[#EAD7CA] text-[#1E3B2B]' : 'bg-[#1E3B2B] text-[#EAD7CA]'">
                            {{ __('VALERI') }}
                        </button>
                        <button id="sofiButton" type="button" class="py-1 px-5 border rounded-r-full font-['Cinzel']" @click="show = false" :class="! show ? 'bg-[#EAD7CA] text-[#1E3B2B]' : 'bg-[#1E3B2B] text-[#EAD7CA]'">
                            {{ __('SOFI') }}
                        </button>
                    </div>
                    <div id="valeri" class="space-y-16 bg-[#1E3B2B]" x-show="show" x-transition.duration.200ms>
                        <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">
                            {{ __('Nail services') }}
                        </h1>
                        <div class="w-full flex sm:space-x-6">
                            <div style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(180deg); transform-origin: center;" class="hidden sm:block">
                                <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap">
                                    {{ __('Nail services') }}
                                </h1>
                            </div>
                            <ul class="w-full space-y-10 text-[#EAD7CA] font-['Montserrat'] border-l-[1px] py-5">
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="sm:flex space-x-40">
                                            <h1 class="font-medium text-lg">
                                                {{ __('Classic Manicure*') }}
                                            </h1>
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
                                        <div class="md:flex w-full">
                                            <h1 class="md:w-1/2 font-medium text-lg">
                                                {{ __('KombiLight*') }}
                                            </h1>
                                            <p class="md:w-1/2 font-extralight text-sm">
                                                {{ __('(manicure + gel polish)') }}
                                            </p>
                                        </div>
                                        <div>
                                            <span>
                                                800
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="md:flex w-full">
                                            <h1 class="md:w-1/2 font-medium text-lg">
                                                {{ __('KombiHard*') }}
                                            </h1>
                                            <p class="md:w-1/2 font-extralight text-sm">
                                                {{ __('(manicure + strengthening + gel polish)') }}
                                            </p>
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
                                        <div class="md:flex w-full">
                                            <h1 class="md:w-1/2 font-medium text-lg">
                                                {{ __('Nail Extension*') }}
                                            </h1>
                                            <p class="md:w-1/2 font-extralight text-sm ">
                                                {{ __('(only by agreement with the master)') }}
                                            </p>
                                        </div>
                                        <div>
                                            <span>
                                                1200
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="md:flex w-full">
                                            <h1 class="md:w-1/2 font-medium text-lg">
                                                {{ __('Removing') }}
                                            </h1>
                                            <p class="md:w-1/2 font-extralight text-sm">
                                                {{ __('(without further manicure and coating)') }}
                                            </p>
                                        </div>
                                        <div>
                                            <span>
                                                200
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">
                            {{ __('Nail art') }}
                        </h1>
                        <div class="w-full flex sm:space-x-6">
                            <div style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(180deg); transform-origin: center;" class="hidden sm:block">
                                <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap">
                                    {{ __('Nail art') }}
                                </h1>
                            </div>
                            <ul class="w-full space-y-10 text-[#EAD7CA] font-['Montserrat'] border-l-[1px] py-5">
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="sm:flex space-x-40 justify-around">
                                            <h1 class="font-medium text-lg">
                                                {{ __('Sliders, foil, glitter') }}
                                            </h1>
                                            <p class="font-extralight text-sm"></p>
                                        </div>
                                        <div>
                                            <span>
                                                10
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full ">
                                        <div class="sm:flex space-x-40 justify-around">
                                            <h1 class="font-medium text-lg">
                                                {{ __('French/lunar manicure') }}
                                            </h1>
                                            <p class="font-extralight text-sm"></p>
                                        </div>
                                        <div>
                                            <span>
                                                100
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="sm:flex space-x-40 justify-around">
                                            <h1 class="font-medium text-lg">
                                                {{ __('Light Nailart') }}
                                            </h1>
                                            <p class="font-extralight text-sm"></p>
                                        </div>
                                        <div>
                                            <span>
                                                10
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="sm:flex space-x-40 justify-around">
                                            <h1 class="font-medium text-lg">
                                                {{ __('Hard Nailart') }}
                                            </h1>
                                            <p class="font-extralight text-sm"></p>
                                        </div>
                                        <div>
                                            <span>
                                                50
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="sofi" class="space-y-16 bg-[#1E3B2B]" x-show="!show" x-transition.duration.200ms>
                        <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">
                            {{ __('Nail services') }}
                        </h1>
                        <div class="w-full flex sm:space-x-6">
                            <div style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(180deg); transform-origin: center;" class="hidden sm:block">
                                <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap">
                                    {{ __('Nail services') }}
                                </h1>
                            </div>
                            <ul class="w-full space-y-10 text-[#EAD7CA] font-['Montserrat'] border-l-[1px] py-5">
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="sm:flex space-x-40">
                                            <h1 class="font-medium text-lg">
                                                {{ __('Classic Manicure*') }}
                                            </h1>
                                            <p class="font-extralight text-sm"></p>
                                        </div>
                                        <div>
                                            <span>
                                                450
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="md:flex w-full">
                                            <h1 class="md:w-1/2 font-medium text-lg">
                                                {{ __('KombiLight*') }}
                                            </h1>
                                            <p class="md:w-1/2 font-extralight text-sm">
                                                {{ __('(manicure + gel polish)') }}
                                            </p>
                                        </div>
                                        <div>
                                            <span>
                                                700
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="md:flex w-full">
                                            <h1 class="md:w-1/2 font-medium text-lg">
                                                {{ __('KombiHard*') }}
                                            </h1>
                                            <p class="md:w-1/2 font-extralight text-sm">
                                                {{ __('(manicure + strengthening + gel polish)') }}
                                            </p>
                                        </div>
                                        <div>
                                            <span>
                                                800
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="md:flex w-full">
                                            <h1 class="md:w-1/2 font-medium text-lg">
                                                {{ __('Removing') }}
                                            </h1>
                                            <p class="md:w-1/2 font-extralight text-sm">
                                                {{ __('(without further manicure and coating)') }}
                                            </p>
                                        </div>
                                        <div>
                                            <span>
                                                150
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">
                            {{ __('Nail art') }}
                        </h1>
                        <div class="w-full flex sm:space-x-6">
                            <div style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(180deg); transform-origin: center;" class="hidden sm:block">
                                <h1 class="m-auto text-center uppercase border-2 bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap">
                                    {{ __('Nail art') }}
                                </h1>
                            </div>
                            <ul class="w-full space-y-10 text-[#EAD7CA] font-['Montserrat'] border-l-[1px] py-5">
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="sm:flex space-x-40 justify-around">
                                            <h1 class="font-medium text-lg">
                                                {{ __('Sliders, foil, glitter') }}
                                            </h1>
                                            <p class="font-extralight text-sm"></p>
                                        </div>
                                        <div>
                                            <span>
                                                10
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full ">
                                        <div class="sm:flex space-x-40 justify-around">
                                            <h1 class="font-medium text-lg">
                                                {{ __('French/lunar manicure') }}
                                            </h1>
                                            <p class="font-extralight text-sm"></p>
                                        </div>
                                        <div>
                                            <span>
                                                100
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="rounded-full w-[10px] h-[10px] bg-red-50 transform -translate-x-[60%]">
                                    </div>
                                    <div class="flex justify-between pl-5 w-full">
                                        <div class="sm:flex space-x-40 justify-around">
                                            <h1 class="font-medium text-lg">
                                                {{ __('Light Nailart') }}
                                            </h1>
                                            <p class="font-extralight text-sm"></p>
                                        </div>
                                        <div>
                                            <span>
                                                10
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full">
                        <ul class="text-[#F1EBE7]">
                            <li>
                                {{ __('* removing as a gift') }}
                            </li>
                            <li>
                                {{ __('** the prices are indicative and may vary depending on additional services') }}
                            </li>
                        </ul>
                    </div>
                    
                    <h1 class="text-right text-lg font-['Zapfino'] text-[#F1EBE7] font-thin leading-10">
                        {{ __('We also have gift certificates available for manicure services') }}
                    </h1>
                </div>
            </section>

            <section id="masters" class="w-full bg-[#F1EBE7] ">
                <div class="max-w-7xl w-full m-auto px-5 py-10 lg:p-20 space-y-16 md:space-y-20">
                    <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase text-center w-full">
                        {{ __('our masters are the real professionals') }}
                    </h1>
                    <div class="w-full sm:flex space-y-16 sm:space-y-0 space-x-3">
                        <div class="w-full flex space-x-4">
                            <div class="h-min w-2/4 aspect-square rounded-full bg-no-repeat bg-cover bg-center" style="background-image:url({{ asset('img/avatar/valeria_kim.png')}});">
                            </div>
                            <div class="w-full space-y-4 ">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    {{ __('valery') }}
                                </h1>
                                <ul class="list-disc list-outside font-['Montserrat'] text-xs md:text-sm text-[#1E3B2B] pl-5 space-y-1">
                                    <li>
                                        {{ __('Working with natural nails (gel polish)') }}
                                    </li>
                                    <li>
                                        {{ __('Strengthening of natural nails by harder materials') }}
                                    </li>
                                    <li>
                                        {{ __('Full nail extensions with reservation only') }}
                                    </li>
                                    <li>
                                        {{ __('Designs of any difficulty') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full flex space-x-4">
                            <div class="h-min w-2/4 aspect-square rounded-full bg-no-repeat bg-cover bg-center" style="background-image:url({{ asset('img/avatar/sofi.png')}});">
                            </div>
                            <div class="w-full space-y-4 ">
                                <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                    {{ __('sofi') }}
                                </h1>
                                <ul class="list-disc list-outside font-['Montserrat'] text-xs md:text-sm text-[#1E3B2B] pl-5 space-y-1">
                                    <li>
                                        {{ __('Working with natural nails (gel polish)') }}
                                    </li>
                                    <li>
                                        {{ __('Strengthening of natural nails by harder materials') }}
                                    </li>
                                    <li>
                                        {{ __('Basic designs (foil, lines, sliders, French)') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sm:flex justify-around space-y-6 sm:space-y-0">
                        <h1 class="text-left text-lg font-['Zapfino'] text-[#6B1C02] font-thin w-full leading-10">{{ __('We`ll make a perfect manicure and choose the perfect nail polish for you') }}</h1>
                        <div class="w-full flex space-x-5 justify-end">
                            <img src="/img/icon/inst.svg" alt="">
                            <img src="/img/icon/telegram.svg" alt="">
                            <img src="/img/icon/tik tok.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section id="contacts" class="w-full bg-[#1E3B2B] ">
                <div class=" max-w-7xl w-full m-auto px-5 py-10 lg:p-20 space-y-16">
                    <div class="w-full sm:flex sm:space-x-16 space-y-16 sm:space-y-0 items-center">
                        <div class="w-full sm:w-1/2 md:w-1/3 text-center space-y-16">
                            <div class="text-[#EAD7CA] font-['Montserrat'] ">
                                <p>
                                    {{ __('City center, near Main railway station') }}
                                </p>
                                <p class=" font-bold">
                                    {{ __('Masarykova 31, Brno, Czech Republic') }}
                                </p>
                                <p>
                                    {{ __('in the indoor unit') }}
                                </p>
                            </div>
                            <a href="https://t.me/valeri_beautybar_bot?start=referal=569568856" class="block w-full rounded-full p-4 bg-[#EAD7CA] text-[#1E3B2B] font-['Montserrat'] text-center shadow-md hover:scale-105 transition ease-in-out duration-150">
                                {{ __('MAKE A RESERVATION') }}
                            </a>
                        </div>
                        <div class="w-full sm:w-1/2 md:w-2/3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.454929903613!2d16.60810277762968!3d49.191928871379304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471294568b34f273%3A0x178e6c6b47ad6c0f!2sMasarykova%20427%2F31%2C%20602%2000%20Brno-m%C4%9Bsto!5e0!3m2!1sru!2scz!4v1700772719215!5m2!1sru!2scz" class="w-full" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>
