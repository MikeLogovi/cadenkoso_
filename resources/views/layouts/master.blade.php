<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>24 News — Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
    @include('stylesheets.styles')
    @stack('bootstrap')
    <!-- Bootstrap CSS -->
    
    <!-- Modernizr JS -->
    <script src="/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
@include('scripts.scripts')
</body>