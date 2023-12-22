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
        <div class="h-screen bg-gray-200 font-roboto">
            <main class="bg-gray-200">
                <iframe class="w-full h-screen" sandbox="allow-scripts" src="https://webapp.buukan.com/1"></iframe>
            </main>
        </div>
    </body>
</html>