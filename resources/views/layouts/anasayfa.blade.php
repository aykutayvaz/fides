<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
<navbar class="header clearfix">
    @include('layouts.partials.navbar')
</navbar>
<section class="flex-center position-ref full-height">
    @yield('content')
</section>
<footer>
    @include('layouts.partials.footer')
</footer>
</body>
</html>