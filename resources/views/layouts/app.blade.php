<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        <header>
            <div class="logo">Header</div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>&copy;Library</p>
        </footer>
    </body>
</html>