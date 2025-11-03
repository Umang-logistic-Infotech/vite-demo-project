<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <link rel="preload" href="./css/adminlte.css" as="style" /> --}}
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    @vite('node_modules/admin-lte/dist/css/adminlte.css')
    <!--begin::Required css(AdminLTE)-->
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/adminlte.css') }}" /> --}}
    <!--end::Required css(AdminLTE)-->

</head>

<body>
    <div class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
        <!--begin::App Wrapper-->
        <div class="app-wrapper">
            @include('layouts.partials.sidebar')
            @include('layouts.partials.navbar')
            @include('layouts.partials.content')
            @include('layouts.partials.footer')
        </div>
    </div>
    {{-- <h1> Admin dashboard page</h1> --}}

    {{-- @vite('node_modules/admin-lte/dist/js/adminlte.js') --}}

</body>
@vite('resources/js/adminlte.js')
{{-- @vite('node_modules/admin-lte/dist/js/adminlte.js') --}}
{{-- <script src="{{ asset('admin/js/adminlte.js') }}"></script> --}}
<script></script>

</html>
