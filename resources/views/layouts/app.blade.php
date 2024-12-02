<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <a href="{{ url('/') }}" class="text-white text-decoration-none">
                <h4>SIKIMA</h4>
            </a>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ url('/events') }}" class="nav-link text-white {{ request()->is('events') ? 'active' : '' }}">Event</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/users') }}" class="nav-link text-white {{ request()->is('users') ? 'active' : '' }}">Pengguna</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/certificates') }}" class="nav-link text-white {{ request()->is('certificates') ? 'active' : '' }}">Sertifikat</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="flex-grow-1">
            <!-- Topbar -->
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <span class="navbar-brand">Sistem Informasi Kegiatan Mahasiswa</span>
                    <ul class="nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="container p-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
