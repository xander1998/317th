<!doctype html>
<html class="font-body" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body class="text-white">
    @include('includes.background')
    <div class="relative">
        <header>
            @include('includes.header')
        </header>
        <div>
            @yield('content')
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </div>
</body>

</html>