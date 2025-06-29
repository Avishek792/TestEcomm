<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Admin Panel</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="nav-link btn" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>