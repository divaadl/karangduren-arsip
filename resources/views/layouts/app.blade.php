<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Arsip Surat')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f7fa;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: linear-gradient(180deg, #0d6efd, #0a58ca);
            color: #fff;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
        }
        .sidebar h4 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
        }
        .sidebar .nav-link {
            color: #dbeafe;
            border-radius: 8px;
            margin: 6px 8px;
            padding: 10px 15px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.15);
            color: #fff;
            transform: translateX(5px);
        }

        /* Profile (opsional kalau mau dipakai di About) */
        .profile img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
            border: 3px solid #fff;
            margin-bottom: 15px;
        }

        /* Content Area */
        .content-area {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            animation: fadeIn 0.5s ease;
        }

        /* Animasi */
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(10px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="p-3 sidebar d-flex flex-column">
        <h4>📂 Menu</h4>
        <ul class="nav flex-column flex-grow-1">
            <li class="nav-item"><a href="{{ route('arsip.index') }}" class="nav-link">📑 Arsip</a></li>
            <li class="nav-item"><a href="{{ route('kategori.index') }}" class="nav-link">🗂 Kategori Surat</a></li>
            <li class="nav-item"><a href="{{ route('arsip.about') }}" class="nav-link">ℹ️ About</a></li>
        </ul>
        <div class="mt-auto small text-center text-light">
            <p class="mb-0">&copy; {{ date('Y') }} Arsip Desa</p>
        </div>
    </div>

    <!-- Content -->
    <div class="p-4 flex-grow-1">
        <div class="content-area">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>