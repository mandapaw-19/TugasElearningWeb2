<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Data Mahasiswa')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-pink: #ff69b4;
            --light-pink: #ffb6c1;
            --soft-pink: #ffe4e1;
            --dark-pink: #c71585;
            --pink-gradient: linear-gradient(135deg, #ff69b4, #ff1493);
        }
        
        .navbar-softpink {
            background: rgba(255, 182, 193, 0.85) !important; /* soft pink transparan */
            box-shadow: 0 2px 12px 0 rgba(255, 182, 193, 0.10);
            min-height: 56px;
            padding-top: 0.2rem;
            padding-bottom: 0.2rem;
            border-radius: 20px;
            margin-top: 24px;
        }
        .navbar-brand {
            font-weight: bold;
            color: var(--dark-pink) !important;
            font-size: 1.3rem;
            letter-spacing: 0.5px;
            text-shadow: 0 1px 4px rgba(255, 182, 193, 0.15);
            padding-top: 0.2rem;
            padding-bottom: 0.2rem;
        }
        .navbar-nav .nav-link {
            color: var(--dark-pink) !important;
            font-weight: 500;
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            background-color: rgba(255, 182, 193, 0.25);
            color: var(--dark-pink) !important;
            border-radius: 20px;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 182, 193, 0.25);
        }
        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(255, 105, 180, 0.1);
            border: 1px solid rgba(255, 105, 180, 0.2);
            border-radius: 15px;
        }
        .card-header {
            background: linear-gradient(135deg, var(--soft-pink), var(--light-pink));
            border-bottom: 1px solid rgba(255, 105, 180, 0.2);
            border-radius: 15px 15px 0 0 !important;
        }
        .btn-primary {
            background: var(--pink-gradient);
            border: none;
            border-radius: 25px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--dark-pink), var(--primary-pink));
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 105, 180, 0.3);
        }
        .btn-warning {
            background: linear-gradient(135deg, #ffb347, #ff8c00);
            border: none;
            border-radius: 25px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        .btn-warning:hover {
            background: linear-gradient(135deg, #ff8c00, #ff6b35);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 140, 0, 0.3);
        }
        .btn-info {
            background: linear-gradient(135deg, #87ceeb, #4682b4);
            border: none;
            border-radius: 25px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        .btn-info:hover {
            background: linear-gradient(135deg, #4682b4, #1e90ff);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(70, 130, 180, 0.3);
        }
        .btn-danger {
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            border: none;
            border-radius: 25px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        .btn-danger:hover {
            background: linear-gradient(135deg, #ee5a52, #d63031);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(238, 90, 82, 0.3);
        }
        .btn-secondary {
            background: linear-gradient(135deg, #95a5a6, #7f8c8d);
            border: none;
            border-radius: 25px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            background: linear-gradient(135deg, #7f8c8d, #6c7b7d);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(127, 140, 141, 0.3);
        }
        .table th {
            background: linear-gradient(135deg, var(--soft-pink), var(--light-pink));
            border-top: none;
            color: var(--dark-pink);
            font-weight: 600;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(255, 182, 193, 0.1);
        }
        .badge.bg-secondary {
            background: linear-gradient(135deg, #95a5a6, #7f8c8d) !important;
        }
        .badge.bg-info {
            background: linear-gradient(135deg, #87ceeb, #4682b4) !important;
        }
        .alert-success {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            border: 1px solid rgba(40, 167, 69, 0.2);
            border-radius: 15px;
        }
        .alert-danger {
            background: linear-gradient(135deg, #f8d7da, #f5c6cb);
            border: 1px solid rgba(220, 53, 69, 0.2);
            border-radius: 15px;
        }
        .form-control:focus {
            border-color: var(--primary-pink);
            box-shadow: 0 0 0 0.2rem rgba(255, 105, 180, 0.25);
        }
        .form-select:focus {
            border-color: var(--primary-pink);
            box-shadow: 0 0 0 0.2rem rgba(255, 105, 180, 0.25);
        }
        .text-primary {
            color: var(--primary-pink) !important;
        }
        .text-muted {
            color: #6c757d !important;
        }
        .btn-group .btn {
            border-radius: 20px;
            margin: 0 2px;
        }
        .pagination .page-link {
            color: var(--primary-pink);
            border-color: var(--light-pink);
        }
        .pagination .page-item.active .page-link {
            background: var(--pink-gradient);
            border-color: var(--primary-pink);
        }
        .pagination .page-link:hover {
            background-color: var(--soft-pink);
            border-color: var(--primary-pink);
        }
        body {
            background: linear-gradient(135deg, #fff5f7, #ffeef2);
            min-height: 100vh;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 8px 32px rgba(255, 105, 180, 0.1);
        }
        footer {
            background: linear-gradient(135deg, var(--soft-pink), var(--light-pink)) !important;
            border-top: 1px solid rgba(255, 105, 180, 0.2);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-softpink">
        <div class="container">
            <a class="navbar-brand" href="{{ route('students.index') }}">
                <i class="fas fa-graduation-cap me-2"></i>
                Data Mahasiswa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">
                            <i class="fas fa-list me-1"></i>Daftar Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.create') }}">
                            <i class="fas fa-plus me-1"></i>Tambah Mahasiswa
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p class="text-muted mb-0">
                &copy; {{ date('Y') }} Aplikasi Data Mahasiswa. Dibuat dengan Laravel.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html> 