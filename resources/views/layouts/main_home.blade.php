<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="/images/logo/ada_logo_main_white.svg">

  <title>ADA | {{ $title }}</title>

  <style>
    nav {
      padding-top: 10px;
    }

    .hero-section {
      height: 100vh;
      
    }
    .highlight-section{
      height: 50vh;
    }
    .team-section {
      height: 100vh;
      padding : 50px 400px 10px 400px;
    }
    .login-section{
      height: 100vh;
      padding : 50px 400px 10px 400px;
    }
    footer{
      /* padding-top:100px ; */
    }
  </style>
</head>

<body>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>

  <nav class="px-5">
    @auth
    @include('partials.login-navigation') 
    @else
    @include('partials.navbar') 
    @endauth

  </nav>
    {{-- content --}}
    @yield('container')
    {{-- content --}}
  <footer class="">
    @include('partials.footer')
  </footer>
</body>

</html>