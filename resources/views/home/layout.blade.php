<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body class="bg-app">
    <div id="app" class=" scrollbar-app">
        <div class="nav-container bg-principal-light bg-opacity-75 rounded-bottom">
            <nav class="navbar navbar-expand-md shadow-sm justify-content-between">
                <a class="fs-1 ps-3 navbar-brand text-complement" href="{{ url('/') }}">
                    {{ env('APP_AUTHOR', config('app.name', 'Laravel')) }}
                </a>
                <div class="d-flex">
                    <div class="px-4 border-complement-light border-left text-center">
                        <a class="text-principal" href="{{ url('/') }}">
                            <div class="m-auto bg-principal-dark img-container-circle border-solid border-complement-light">
                                <img src="{{ Vite::asset('resources/images/svg/projects-development.svg') }}" class="img-svg filter-complement"  alt="project"/>
                            </div>
                            <span class="d-none d-sm-none d-md-inline">Proyectos</span>
                        </a>
                    </div>
                    <div class="px-4 border-complement-light border-left text-center">
                        <a class="text-principal" href="{{ url('/') }}">
                            <div class="m-auto bg-principal-dark img-container-circle border-solid border-complement-light">
                                <img src="{{ Vite::asset('resources/images/svg/components-development.svg') }}"  class="img-svg filter-complement"  alt="component"/>
                            </div>
                            <span class="d-none d-sm-none d-md-inline">Complementos</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <main class="py-5">
            @yield('content')
        </main>
        <footer class="fixed-bottom w-100 p-2 bg-principal-dark text-principal">
            <div class="d-flex">
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                    <span class="ps-5"> &copy; Copyright 2022, {{env('APP_AUTHOR')}}</span>
                    <span class="ps-5 d-none d-sm-inline">devnatera@gmail.com</span>
                </div>
                <div class="d-none d-sm-none d-md-block col-md-4 col-lg-6 text-end">
                    <span class="pe-3">es - CO</span>
                    <span class="pe-5">Soledad, Atlántico.</span>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
