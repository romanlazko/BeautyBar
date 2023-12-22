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
    <body class="w-full h-screen">
        <div class="flex h-screen bg-gray-200 font-roboto">
            
            <div class="flex-1 flex flex-col overflow-hidden">
                
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="mx-auto p-1">
                        <div class="w-full space-y-6 m-auto max-w-4xl">
                            <iframe class="w-full min-h-[80vh]" src="https://webapp.buukan.com/1"></iframe>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
    </body>
</html>