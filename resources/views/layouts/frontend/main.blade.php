<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('dist_frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist_frontend/css/style.css') }}">


<body>
    {{-- nav --}}
    @include('layouts.frontend.navbar')
    {{-- body --}}
    @yield('content')
    {{-- footer --}}
    @include('layouts.frontend.footer')
</body>
{{-- js --}}
<script src="{{ asset('dist_frontend/js/bootstrap.bundle.min.js') }}"></script>

{{-- icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</html>
