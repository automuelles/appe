<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="../../public/img/vendedor.jpeg" class="card-img-top" alt="Imagen de Vendedores">
                            <div class="card-body">
                                <i class="fas fa-comment fa-2x"></i>
                                <a href="vendedor/vendedor.php" class="btn btn-outline-primary">Vendedores</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="../../public/img/bodega.png" class="card-img-top" alt="Imagen de Vendedores">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-2x"></i>
                                <a href="../views/bodega/bodega.php" class="btn btn-outline-primary">Bodega</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="../../public/img/mensajero.png" class="card-img-top" alt="Imagen de Vendedores">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-2x"></i>
                                <a href="../views/Mensajeros/Mensajero.php" class="btn btn-outline-primary">Mensajeros</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="../../public/img/Despachos.png" class="card-img-top" alt="Imagen de Vendedores">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-2x"></i>
                                <a href="../views/Despachos/Despachos.php" class="btn btn-outline-primary">Despachos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="../../public/img/caja.png" class="card-img-top" alt="Imagen de Vendedores">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-2x"></i>
                                <a href="#" class="btn btn-outline-primary">Mercancia pendiente por entrega</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="../../public/img/libro.png" class="card-img-top" alt="Imagen de Vendedores">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-2x"></i>
                                <a href="#" class="btn btn-outline-primary">Base de Conocimiento</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="../../public/img/admin.png" class="card-img-top" alt="Imagen de Vendedores">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-2x"></i>
                                <a href="../views/Administrativo/Admin.php" class="btn btn-outline-primary">Modulo Administrativo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-desktop fa-2x"></i>
                                <h5 class="card-title">#</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
