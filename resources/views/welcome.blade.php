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
                            <button id="menu" href="#" @click="menu = ! menu" class="uppercase">{{ __('menu') }}</button>
                        
                            <div x-cloak x-show="menu" @click="menu = false" class="fixed inset-0 z-10 w-full h-full"></div>
                        
                            <div x-cloak x-show="menu" class="w-[200px] absolute left-0 z-10 mt-2 bg-[#1E3B2B] rounded-md shadow-xl border border-[#EAD7CA] overflow-auto uppercase" id="menu">
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#main">{{ __('main') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#about">{{ __('about us') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#perks">{{ __('our privileges') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#sterilization">{{ __('sterilization') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#price">{{ __('price') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#masters">{{ __('our masters') }}</a>
                                <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#contacts">{{ __('contacts') }}</a>
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
                                <button id="menu" href="#" @click="menu = ! menu" @mouseover="menu = ! menu" class="uppercase">{{ __('menu') }}</button>
                        
                                <div x-cloak x-show="menu" @click="menu = false" class="fixed inset-0 z-10 w-full h-full"></div>
                            
                                <div x-cloak x-show="menu" class="w-[200px] absolute left-0 z-10 mt-2 bg-[#1E3B2B] rounded-md shadow-xl border border-[#EAD7CA] overflow-auto uppercase" id="menu">
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#main">{{ __('main') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#about">{{ __('about us') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#perks">{{ __('our perks') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#sterilization">{{ __('sterilization') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#price">{{ __('price') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#masters">{{ __('our masters') }}</a>
                                    <a class="block w-full p-2 hover:bg-[#EAD7CA] hover:text-[#1E3B2B]" href="#contacts">{{ __('contacts') }}</a>
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
                        <svg class="w-full" viewBox="0 0 400 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_448_14532)">
                            <path d="M169.347 121.439C163.667 126.279 156.75 130.748 147.857 130.748C140.637 130.748 135.997 127.569 135.08 116.733C131.693 125.733 121.987 130.996 112.047 130.996C100.437 130.996 93.0267 125.288 93.0267 114.613C93.0267 94.9975 120.733 98.317 134.77 88.7238V81.2307C134.77 73.4128 133.41 64.724 124.89 64.724C118.467 64.724 115.38 68.5693 115.38 74.6522C115.38 76.3638 116.003 78.3903 117.06 79.978C119.553 83.7195 118.723 88.851 114.89 91.179C113.13 92.2475 111.03 92.7701 108.837 92.7701C102.167 92.7701 97.1033 88.8008 97.1033 81.7265C97.1033 66.8342 116.863 63.7325 124.893 63.7325C142.183 63.7325 157.743 68.5727 157.743 82.9692V113.002C157.743 117.098 157.743 122.806 163.423 122.806C165.027 122.806 166.51 122.31 168.857 120.696L169.347 121.439ZM126.737 121.935C131.923 121.935 134.763 117.343 134.763 112.75V89.9531C125.973 95.6306 118.217 95.8785 118.217 109.649C118.217 115.604 120.317 121.935 126.74 121.935H126.737ZM168.533 130.004V129.013C177.303 129.013 178.413 126.531 178.413 114.616V51.5702C178.413 43.2565 177.92 33.1742 167.297 35.5323L167.05 34.5409L201.383 26.2272V114.619C201.383 126.534 202.493 129.016 211.263 129.016V130.007H168.53L168.533 130.004ZM279.423 106.798C273.99 120.076 262.75 130.999 245.583 130.999C228.417 130.999 213.843 118.713 213.843 98.4845C213.843 78.2563 228.17 63.7359 249.907 63.7359C271.643 63.7359 282.263 74.5316 278.313 90.2947H237.213C237.743 107.89 245.15 116.566 257.02 116.566C263.193 116.566 274.237 113.253 278.683 106.426L279.427 106.801L279.423 106.798ZM249.91 64.7273C239.29 64.7273 237.19 79.7435 237.19 88.6802V89.052H258.313C260.293 81.3413 259.467 64.7307 249.907 64.7307L249.91 64.7273ZM335.35 63.7359C343.907 63.7359 351.823 69.2761 351.52 79.8306C351.303 87.461 345.2 93.7615 337.607 93.6443C337.397 93.6443 337.187 93.6343 336.977 93.6209C330.35 93.2089 327.257 85.3943 331.303 80.1053C332.383 78.6951 333.003 76.9567 333.003 75.0307C333.003 71.0614 331.273 68.3281 327.57 68.3281C321.607 68.3281 317.137 76.4341 314.727 84.8181V114.619C314.727 126.534 315.837 129.016 325.843 129.016V130.007H281.877V129.016C290.647 129.016 291.757 126.534 291.757 114.619V83.5922C291.757 75.2785 291.263 70.9341 280.64 73.2922L280.393 72.3007L314.973 63.9871L314.493 82.2758C317.507 72.6424 323.553 63.7392 335.35 63.7392V63.7359ZM42.8733 37.5789C40.6467 32.913 38.7433 29.0475 36.9633 25.9224H2V26.9172C10.8967 26.9172 14.6 33.3719 22.3833 49.6307L63.39 132.493L75.91 104.226L42.8733 37.5789ZM98.9 25.2759C94.23 23.3767 85.2967 31.6066 81.9133 40.004C78.5333 48.4048 80.0467 56.9429 85.2933 59.0766C90.54 61.2103 97.5367 56.1289 100.917 47.7282C104.297 39.3274 103.41 27.1081 98.8967 25.2726L98.9 25.2759ZM398.667 130.007V129.016C389.897 129.016 388.787 126.534 388.787 114.619V78.2563L389.033 63.9837L354.453 72.2974L354.7 73.2889C365.32 70.9308 365.817 75.2752 365.817 83.5888V114.616C365.817 126.531 364.707 129.013 355.937 129.013V130.004H398.667V130.007ZM383.92 25.2759C379.25 23.3767 370.317 31.6066 366.933 40.004C363.553 48.4048 365.067 56.9429 370.313 59.0766C375.56 61.2103 382.557 56.1289 385.937 47.7282C389.317 39.3274 388.43 27.1081 383.917 25.2726L383.92 25.2759Z" fill="#EAD7CA"/>
                            <path d="M117.743 156.901V140.334H122.613C124.38 140.334 125.72 140.699 126.633 141.433C127.547 142.166 128.003 143.245 128.003 144.672C128.003 145.529 127.77 146.276 127.307 146.909C126.843 147.543 126.207 147.998 125.4 148.269C126.36 148.48 127.13 148.956 127.717 149.69C128.3 150.427 128.593 151.274 128.593 152.239C128.593 153.702 128.123 154.845 127.183 155.669C126.243 156.493 124.937 156.901 123.26 156.901H117.747H117.743ZM119.137 147.764H122.94C124.103 147.74 125.003 147.465 125.64 146.936C126.277 146.407 126.597 145.637 126.597 144.628C126.597 143.563 126.267 142.779 125.607 142.274C124.947 141.768 123.947 141.517 122.61 141.517H119.133V147.764H119.137ZM119.137 148.946V155.716H123.317C124.51 155.716 125.453 155.411 126.153 154.801C126.85 154.191 127.2 153.344 127.2 152.262C127.2 151.24 126.867 150.43 126.197 149.837C125.53 149.241 124.607 148.946 123.427 148.946H119.133H119.137ZM148.017 148.956H140.303V155.716H149.17V156.898H138.91V140.331H149.113V141.513H140.303V147.774H148.017V148.956ZM167.963 152.245H160.477L158.777 156.898H157.317L163.557 140.331H164.88L171.12 156.898H169.67L167.96 152.245H167.963ZM160.907 151.063H167.52L164.213 142.039L160.907 151.063ZM191.667 140.331V151.642C191.66 152.758 191.413 153.729 190.93 154.557C190.447 155.384 189.767 156.02 188.887 156.462C188.007 156.905 186.997 157.129 185.857 157.129C184.12 157.129 182.73 156.653 181.683 155.702C180.637 154.751 180.097 153.431 180.057 151.746V140.334H181.437V151.542C181.437 152.939 181.833 154.021 182.627 154.791C183.42 155.561 184.497 155.947 185.853 155.947C187.21 155.947 188.287 155.558 189.077 154.784C189.867 154.011 190.26 152.935 190.26 151.552V140.331H191.663H191.667ZM213.697 141.513H208.047V156.898H206.653V141.513H201.013V140.331H213.697V141.513ZM228.333 149.365L233.373 140.331H234.98L229.023 150.664V156.901H227.63V150.664L221.683 140.331H223.337L228.33 149.365H228.333ZM256.937 156.898V140.331H261.807C263.573 140.331 264.913 140.696 265.827 141.43C266.74 142.163 267.197 143.242 267.197 144.669C267.197 145.526 266.963 146.273 266.5 146.906C266.037 147.539 265.4 147.995 264.593 148.266C265.55 148.477 266.323 148.953 266.91 149.686C267.493 150.423 267.787 151.271 267.787 152.235C267.787 153.699 267.317 154.841 266.377 155.665C265.437 156.489 264.13 156.898 262.453 156.898H256.94H256.937ZM258.33 147.76H262.133C263.297 147.737 264.197 147.462 264.833 146.933C265.47 146.404 265.79 145.633 265.79 144.625C265.79 143.56 265.46 142.776 264.8 142.27C264.14 141.764 263.14 141.513 261.803 141.513H258.327V147.76H258.33ZM258.33 148.943V155.712H262.51C263.703 155.712 264.647 155.407 265.347 154.798C266.043 154.188 266.393 153.341 266.393 152.259C266.393 151.237 266.06 150.427 265.39 149.834C264.72 149.241 263.8 148.943 262.62 148.943H258.327H258.33ZM287.007 152.242H279.52L277.82 156.895H276.36L282.6 140.328H283.923L290.163 156.895H288.713L287.003 152.242H287.007ZM279.95 151.06H286.563L283.257 142.036L279.95 151.06ZM305.707 149.991H300.917V156.898H299.513V140.331H304.87C306.63 140.331 308.003 140.76 308.993 141.614C309.983 142.471 310.477 143.667 310.477 145.205C310.477 146.266 310.167 147.201 309.547 148.011C308.927 148.822 308.097 149.385 307.057 149.693L311.18 156.747V156.895H309.697L305.71 149.988L305.707 149.991ZM300.917 148.809H305.187C306.357 148.809 307.297 148.474 308.007 147.807C308.717 147.137 309.07 146.273 309.07 145.208C309.07 144.039 308.7 143.131 307.96 142.485C307.22 141.838 306.183 141.517 304.847 141.517H300.917V148.812V148.809Z" fill="#EAD7CA"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_448_14532">
                            <rect width="400" height="157.789" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                            
                        <a href="https://t.me/valeri_beautybar_bot?start=referal=569568856" target="_blank" class="block w-full rounded-full p-4 bg-[#EAD7CA] text-[#1E3B2B] font-['Montserrat'] text-center shadow-md hover:scale-105 transition ease-in-out duration-150 uppercase">
                            {{ __('make a reservation') }}
                        </a>
                    </div>
                </div>
            </section>

            <section id="about" class="w-full bg-[#F1EBE7]">
                <div class="max-w-7xl flex w-full m-auto p-10 lg:p-20 space-x-16 items-center">
                    <div class="sm:w-3/5">
                        <div class="grid h-full content-between text-center py-12 space-y-16">
                            <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase">
                                {{ __('we are happy to see you in') }} <br> valeri beauty bar
                            </h1>
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
                            <h1 class="text-right text-md sm:text-lg font-['Zapfino'] text-[#6B1C02] font-thin whitespace-nowrap">{{ __('Sincerelly yours, Valeri Beauty Bar') }}</h1>
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
                                    {{ __('PROFESSIONAL MANICURE') }}
                                </h1>
                                <p class="text-xs md:text-sm font-['Montserrat'] ">
                                    {{ __('Our masters are bringing their expertise and precision to every service, ensuring that you will leave our studio with beautiful nails. Your satisfaction is the number one priority for us.') }}
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
                                    {{ __('Here you`ll find a warm and inviting ambiance the warmth and relaxation. Our friendly staff wishes make you feel comfortable and unique.') }}
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
                                    {{ __('Our studio is situated in the heart of the city, making it more accessible for clients.') }}
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
                        <h1 class="m-auto text-center uppercase bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">
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
                        <h1 class="m-auto text-center uppercase bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">
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
                        <h1 class="m-auto text-center uppercase bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">
                            {{ __('Nail services') }}
                        </h1>
                        <div class="w-full flex sm:space-x-6">
                            <div style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(180deg); transform-origin: center;" class="hidden sm:block">
                                <h1 class="m-auto text-center uppercase bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap">
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
                        <h1 class="m-auto text-center uppercase bg-[#EAD7CA] rounded-full h-full px-1 sm:px-3 text-[#1E3B2B] font-['Cinzel'] text-2xl whitespace-nowrap sm:hidden">
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
                    
                    <h1 class="text-right text-md sm:text-lg font-['Zapfino'] text-[#F1EBE7] font-thin leading-10">
                        {{ __('We also have gift certificates available for manicure services') }}
                    </h1>
                </div>
            </section>

            <section id="masters" class="w-full bg-[#F1EBE7] ">
                <div class="max-w-7xl w-full m-auto px-5 py-10 lg:p-20 space-y-16 md:space-y-20">
                    <h1 class="text-2xl font-['Cinzel'] font-medium text-[#1E3B2B] uppercase text-center w-full">
                        {{ __('our masters are the real professionals') }}
                    </h1>
                    <div class="w-full sm:flex space-y-16 sm:space-y-0 sm:space-x-3">
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
                        <h1 class="text-center sm:text-left text-md sm:text-lg font-['Zapfino'] text-[#6B1C02] font-thin w-full leading-10">{{ __('We`ll make a perfect manicure and choose the perfect nail polish for you') }}</h1>
                        <div class="w-full flex space-x-5 justify-center sm:justify-end">
                            <a href="https://instagram.com/valeri.beautybar" target="_blank">
                                <img src="/img/icon/inst.svg" alt="">
                            </a>
                            <a href="https://t.me/valeri_kim95" target="_blank">
                                <img src="/img/icon/telegram.svg" alt="">
                            </a>
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
                            <a href="https://t.me/valeri_beautybar_bot?start=referal=569568856" target="_blank" class="block w-full rounded-full p-4 bg-[#EAD7CA] text-[#1E3B2B] font-['Montserrat'] text-center shadow-md hover:scale-105 transition ease-in-out duration-150 uppercase">
                                {{ __('make a reservation') }}
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
