<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auto Complete</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <livewire:styles>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div class="flex flex-col">
        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full w-3/4">
                <livewire:search-input />
            </div>
        </div>
    </div>
<livewire:scripts>
</body>
</html>
