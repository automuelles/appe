<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html { line-height: 1.15; -webkit-text-size-adjust: 100% }
            body {
                margin: 0;
                font-family: 'Nunito', sans-serif;
                background-image: url('/path/to/your/background-image.jpg'); /* Ruta de tu imagen de fondo */
                background-size: cover; /* Asegura que la imagen cubra todo el fondo */
                background-position: center; /* Centra la imagen de fondo */
                color: white; /* Cambia el color del texto si es necesario */
            }

            .button {
                display: inline-block;
                padding: 10px 20px;
                margin: 10px;
                border: none;
                border-radius: 5px;
                background-color: #4CAF50; /* Color de fondo del botón */
                color: white; /* Color del texto */
                text-decoration: none; /* Sin subrayado */
                font-weight: bold;
                transition: background-color 0.3s; /* Transición suave para el color de fondo */
            }

            .button:hover {
                background-color: #45a049; /* Color del botón al pasar el mouse */
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="button">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
