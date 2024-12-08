<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        /* Header styling */
        .navbar-custom {
            background: linear-gradient(to right, #FF69B4, #FFB6C1) !important; /* Gradient pink shades */
            border-radius: 0 0 15px 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Navbar links styling */
        .navbar-nav .nav-link {
            color: #fff !important;
            transition: all 0.3s ease;
        }

        /* Navbar item hover effect */
        .navbar-nav .nav-link:hover {
            background-color: #FF1493 !important; /* Darker pink on hover */
            border-radius: 5px;
        }

        /* Active link styling */
        .navbar-nav .nav-link.active {
            font-weight: bold;
            background-color: #FF1493 !important; /* Darker pink for active link */
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            background-color: #FF69B4;
            border-radius: 5px;
        }

        .dropdown-item {
            color: #fff !important;
            padding: 10px 20px;
        }

        .dropdown-item:hover {
            background-color: #FF1493 !important;
            border-radius: 5px;
        }

        /* Main content styling */
        .content-container {
            padding: 20px;
        }

        .main-content {
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        /* Welcome message styling */
        .welcome-message {
            background-color: #FFB6C1; /* Light pink background for the message */
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 1.2rem;
            color: #fff; /* White text color */
        }

        /* Text color adjustments */
        h4, p {
            color: #fff; /* White font color */
        }
    </style>
</head>
<body>

<!-- Header (Navbar) -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">EAD Library Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dosenDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dosen</a>
                    <ul class="dropdown-menu" aria-labelledby="dosenDropdown">
                        <li><a class="dropdown-item" href="{{ route('dosen.create') }}">Tambah Dosen</a></li>
                        <li><a class="dropdown-item" href="{{ route('dosen.index') }}">Daftar Dosen</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mahasiswaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mahasiswa</a>
                    <ul class="dropdown-menu" aria-labelledby="mahasiswaDropdown">
                        <li><a class="dropdown-item" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-12 content-container">
            <!-- Conditional Section Before Content -->
            @if(auth()->check())
                <div class="welcome-message">
                    <h4>Welcome back, {{ auth()->user()->name }}!</h4>
                    <p>We're glad to see you again. Explore the EAD Library Dashboard to manage dosen and mahasiswa.</p>
                </div>
            @else
                <div class="welcome-message">
                    <h4>Welcome to the EAD Library Panel!</h4>
                </div>
            @endif

            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>