<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>DC Comics</title>
</head>
<body>

    @include('partials.header')
    @include('partials.jumbo')
    @include('partials.cards')
    @include('partials.cta')

    @yield('content')

    @include('partials.footer')

</body>
</html>
