<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand navbar-light bg-white shadow-sm px-3">
        <a class="navbar-brand fw-bold" href="{{ url('/dashboard') }}">Student Management System</a>

        <ul class="navbar-nav ms-auto align-items-center">
            <!-- Notification icon + badge -->
            <li class="nav-item me-3">
                <a class="nav-link position-relative" href="#">
                    <i class="bi bi-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                </a>
            </li>

            <!-- User dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">Log Out</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 bg-dark p-3 min-vh-100">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-light active fw-bold" href="{{ url('/dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#"><i class="bi bi-people me-2"></i>Students</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#"><i class="bi bi-book me-2"></i>Courses</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#"><i class="bi bi-cash-coin me-2"></i>Fees</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#"><i class="bi bi-credit-card me-2"></i>Payments</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#"><i class="bi bi-graph-up me-2"></i>Reports</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                </ul>
            </aside>

            <!-- Main content (each page fills this in) -->
            <main class="col-md-9 col-lg-10 p-4">
                @yield('content')
                {{ $slot ?? '' }}
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>