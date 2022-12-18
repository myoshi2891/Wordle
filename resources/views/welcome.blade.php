<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TryCat</title>
    <link rel="stylesheet" href="/css/app.css" />
    <script src="/js/app.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <div id="game">
        {{-- <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div>
        <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div>
        <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div> --}}
    </div>
</body>
</head>

</html>
