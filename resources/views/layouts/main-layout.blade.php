<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    @vite('resources/js/app.js')
    @vite('resources/scss/app.scss')
    @yield('head')
</head>
<body>
    @include('components.header')

    
        @yield('content')
    
    
    @include('components.footer')
</body>
</html>