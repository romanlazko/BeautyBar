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
    <body class="w-full h-screen bg-gray-200">
        <div class="flex h-screen bg-gray-200 font-roboto">
            <main class="bg-gray-200">
                <div class="mx-auto p-1">
                    <div class="w-full space-y-6 m-auto max-w-4xl">
                        <iframe class="w-full h-screen" src="https://webapp.buukan.com/1"></iframe>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>