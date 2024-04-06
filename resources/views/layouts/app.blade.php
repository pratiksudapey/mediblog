<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('layouts.partial.meta_tag')
  @include('layouts.partial.style')
 @vite(['resources/css/app.css','resources/js/app.js'])
  @yield('style')
  <style>

  </style>
</head>

<body>
  @include('layouts.partial.nav')
  @yield('content')
  @include('layouts.partial.footer')
  @include('layouts.partial.script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
@yield('script')

</html>
