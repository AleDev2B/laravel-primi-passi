<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- MyFiles -->
        <link rel="stylesheet" href="css\app.css">
        <script src="css\app.css" charset="utf-8"></script>

    </head>
    <body>
        <header>
          @include('header')
        </header>

        <div class="prova">
          @yield('content')
          
        </div>

        <footer>
          @include('footer')
        </footer>


    </body>
</html>
