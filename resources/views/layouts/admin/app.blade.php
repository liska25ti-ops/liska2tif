<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Volt - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.admin.css')
</head>

<body>

    {{-- Pemanggilan Sidebar Admin --}}
    @include('layouts.admin.sidebar')

    <main class="content">
        {{-- Pemanggilan Header / Topbar Admin --}}
        @include('layouts.admin.header')

        {{-- Tempat Konten Utama (Index User, Pelanggan, dll) --}}
        @yield('content')

        {{-- Pemanggilan Footer Admin --}}
        @include('layouts.admin.footer')
    </main>

    @include('layouts.admin.js')
</body>

</html>