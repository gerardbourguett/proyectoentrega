<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('title','default') | Panel de Administración</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
  @include('admin.template.partials.nav')
  <section class="jumbotron">
    @yield('content')
  </section>

  <footer>
    <blockquote class="blockquote-reverse">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
    </blockquote>
  </footer>

  <script src="{{ asset('plugins/JQuery/Jquery-3.2.1.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
