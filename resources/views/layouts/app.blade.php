<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Personal Portfolio')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
    :root {
        --primary: #0d6868;
        --secondary: #daf8f8;
        --text-dark: #2c3e50;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8ffff;
        color: var(--text-dark);

        display: flex;         
        flex-direction: column; 
        min-height: 100vh;  
    }

    main {
        flex: 1;
    }

    .navbar {
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(15px);
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    .navbar-brand {
        font-weight: 700;
        color: var(--primary) !important;
    }

    .jumbotron {
        padding-top: 160px;
        padding-bottom: 70px;
        background: linear-gradient(180deg, var(--secondary), #f8ffff);
    }

    .profile-circle {
        width: 165px;
        height: 165px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #fff;
        box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        margin-bottom: 20px;
    }

    .skill-tag {
        padding: 6px 14px;
        font-size: 13px;
        font-weight: 500;
        border-radius: 20px;
        background: var(--secondary);
        color: var(--primary);
        border: 1px solid rgba(13,104,104,0.25);
        white-space: nowrap;
    }

    section {
        padding: 4rem 0;
    }

    .section-divider {
        height: 2px;
        background: linear-gradient(to right, transparent, var(--primary), transparent);
    }

    .card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        transition: .3s;
    }
    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 30px rgba(0,0,0,.1);
    }
    .card-img-top {
        height: 140px;
        object-fit: cover;
    }

    #hobby {
        background: #f1fbfb;
    }

    .btn-main {
        background: var(--primary);
        color: #fff;
        padding: 10px 28px;
        border-radius: 50px;
        font-weight: 600;
    }

    footer {
        background: var(--primary);
        color: white;
        padding: 35px 0;
    }
    footer a {
        color: var(--secondary);
        text-decoration: none;
    }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Y0u_2</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link px-3" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#minat">Minat</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#kotak pesan">kotak pesan</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="{{ route('admin.pesan') }}">Pesan</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="{{ route('admin.pengalaman.index') }}">pengalaman</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="text-center">
    <div class="container">
        <p class="mb-1">
            Dibuat oleh <a href="#">y0u_2</a>
        </p>
        <small>&copy; 2026 Mahasiswa FILKOM UNIDA</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
