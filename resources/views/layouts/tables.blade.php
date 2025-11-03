<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous" />
    @vite('resources/css/adminlte.css')

</head>

<body>
    <div class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
        <div class="app-wrapper">
            @include('layouts.partials.sidebar')
            @include('layouts.partials.navbar')
            @include('layouts.partials.tables')
            @include('layouts.partials.footer')
        </div>
    </div>
</body>
@vite('resources/js/adminlte.js')

</html>
