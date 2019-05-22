<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CONCESSIIONARIA</title>
    <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    <header>
      <h1>HEADER</h1>
    </header>

    @yield('content')

    <footer>
      <h1>FOOTER</h1>
    </footer>
  </body>

</html>
