<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @yield('css')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-600">
            {{-- Navbar Start --}}

                <div class="w-11/12 mx-auto flex justify-between py-4">
                    <div>
                        <h1 class="text-4xl text-slate-400 font-bold">MyBlog.</h1>
                    </div>
                    <div class="flex ">
                        <a class="px-5 hover:text-slate-100 text-slate-300 cursor-pointer">
                            Home
                        </a>
                        <a class="px-5 hover:text-slate-100 text-slate-300 cursor-pointer">
                            Articles
                        </a>
                    </div>  
                </div> 

            {{-- Navbar Close --}}
            @yield('main')
        </div>

        @yield('js')
    </body>
</html>
