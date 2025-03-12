<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Website UMKM')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
            background: linear-gradient(to right, #1a237e, #283593);
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .content-wrapper {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,.05);
            padding: 25px;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
        footer {
            background: linear-gradient(to right, #1a237e, #283593);
            padding: 20px 0;
            position: relative;
            margin-top: 3rem;
        }
        .footer-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('products.index') }}">Website UMKM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <p class="mb-0" style="color: white;">{{ date('Y') }} Developer by: Andika Bartolomeus Purba</p>
                <p class="mb-0 mt-2" style="color: white;">I hope you enjoy in the website</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>