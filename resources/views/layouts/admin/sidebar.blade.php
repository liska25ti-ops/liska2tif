<nav id="sidebarMenu" class="sidebar d-md-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <ul class="nav flex-column pt-3 pt-md-0">
            <!-- Brand / Logo -->
            <li class="nav-item mb-2">
                <a href="{{ url('/dashboard') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon me-2">
                        <svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="mt-1 ms-1 sidebar-text fw-bold">Volt Overview</span>
                </a>
            </li>

            <!-- Menu Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') || Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon me-2">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 0112.9-6.57L17 5l-1.41 1.41-.59-.59A6 6 0 106 10H2z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>

            <!-- Menu Pelanggan -->
            <li class="nav-item {{ Request::routeIs('pelanggan.*') ? 'active' : '' }}">
                <a href="{{ route('pelanggan.index') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon me-2">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Pelanggan</span>
                </a>
            </li>

            <!-- Menu User -->
            <li class="nav-item {{ Request::routeIs('users.*') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon me-2">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">User</span>
                </a>
            </li>
        </ul>
    </div>
</nav>