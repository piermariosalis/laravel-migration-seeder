<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

<header>

        <nav class="navbar navbar-expand navbar-dark bg-dark">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="">Students</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add') }}">Add Students</a>
                    </li>
                </ul>
    </nav>


</header>
@yield('home')
            @yield('content')
    </body>
</html>
