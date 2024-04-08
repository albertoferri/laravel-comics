<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials/header')
    @include('partials/comics')
    @include('partials/findUs')

    @yield('content')
   
</body>
</html>