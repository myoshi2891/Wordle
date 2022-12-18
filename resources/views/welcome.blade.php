<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TryCat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    {{-- <script src="/js/app.js" defer></script> --}}

<body>
    <main x-data="game" @keyup.window="onKeyPress($event.key)">
        <div id="game">
            <template x-for="row in board">
                <div class="row">
                    <template x-for="tile in row">
                        <div class="tile" x-text="tile.letter"></div>
                    </template>
                </div>
            </template>
        </div>
        <output x-text="message"></output>
    </main>
</body>
</head>

</html>
