<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('links')
</head>
<body>

@include('layout.header') {{-- Cabeçalho --}}

@include('layout.navbar') {{-- Barra de navegação lateral --}}

@yield('content') {{-- Conteúdo --}}

@include('layout.footer') {{-- Rodapé --}}

{{-- Scripts --}}
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
@yield('scripts')
</body>
</html>
