<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basile's Lair</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #2d3748;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="m-auto py-12 sm:p-20 xl:w-10/12 rounded-lg">
        <div class="space-y-4 flex items-center content-center">
            <a href="/" class="flex flex-row items-center gap-6">
                <img src="{{ asset('images/Basile_and_Code_Logo.png') }}" class="w-40 hidden dark:block" alt="test" />
                <h1 class="text-gray-200 text-3xl">Basile's Lair</h1>
            </a>
        </div>
        <div class="relative overflow-hidden w-full m-auto rounded-lg">
                <img src="https://external-preview.redd.it/4MddL-315mp40uH18BgGL2-5b6NIPHcDMBSWuN11ynM.jpg?width=960&crop=smart&auto=webp&s=b98d54a43b3dac555df398588a2c791e0f3076d9" class="absolute h-full w-full object-cover"/>
                <div class="inset-0 bg-black opacity-25 absolute">
                    </div>
                <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-32 xl:py-40">
                        <div class="w-full font-mono flex flex-col items-center relative z-10">
                                <h1 class="font-extrabold text-5xl text-center text-white leading-tight mt-4">
                          You are all alone here
                                  </h1>
                                <p class="font-extrabold text-8xl my-44 text-white animate-bounce">
                                        404
                                    </p>
                            </div>
                    </div>
        </div>

    </div>
    </body>
</html>
