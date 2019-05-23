<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CONCESSIIONARIA</title>
    <!-- Mio Js -->
    <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
    <!-- Mio Css -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    <header>
      <a href="{{route('cars.index')}}">
        <h1>HEADER</h1>
      </a>
    </header>

    @yield('content')

    <footer>
      <h1>FOOTER</h1>
    </footer>
  </body>

</html>
