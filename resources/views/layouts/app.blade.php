<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Volt Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Sidebar Mobile Header -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="#">
            <span class="sidebar-icon"> Volt Overview </span>
        </a>
    </nav>

    <!-- Sidebar Utama -->
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="#" class="nav-link d-flex align-items-center mb-3">
                        <span class="sidebar-icon me-2">⚡</span>
                        <span class="sidebar-text fw-bold">Volt Overview</span>
                    </a>
                </li>
                
                <!-- Menu Dashboard -->
                <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                    <a href="/dashboard" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <!-- Menu Pelanggan -->
                <li class="nav-item {{ request()->is('pelanggan*') ? 'active' : '' }}">
                    <a href="{{ route('pelanggan.create') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                        </span>
                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="content">

        <!-- Topbar / Navbar Atas -->
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0 mb-4">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </span>
                                <input type="text" class="form-control" id="topbarInput" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <!-- Profil Pengguna Topbar -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('assets-admin/img/team/profile.jpg') }}">
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span class="mb-0 font-small fw-bold text-gray-900">Liska</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Area Konten Dinamis (Form Pelanggan / Isi Halaman) -->
        @yield('content')

        <!-- Footer -->
        <footer class="bg-white rounded shadow p-4 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© 2019- Themesberg</p>
                </div>
                <div class="col-12 col-md-8 col-lg-6 text-end">
                    <ul class="list-inline list-group-flush list-group-borderless mb-0">
                        <li class="list-inline-item px-0 px-sm-2"><a href="#">About</a></li>
                        <li class="list-inline-item px-0 px-sm-2"><a href="#">Themes</a></li>
                        <li class="list-inline-item px-0 px-sm-2"><a href="#">Blog</a></li>
                        <li class="list-inline-item px-0 px-sm-2"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>

    <!-- Core Scripts -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>

</html>