<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VR/46 Bikers Pitstop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .hero {
            height: 100vh;
            background: url('assets/images/hero.jpg') center/cover no-repeat;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }
        .btn-primary {
            background-color: #ff6f00;
            border: none;
        }
        .brands img {
            width: 100%;
            max-width: 150px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">VR/46 Bikers</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1 class="display-3">VR/46 Bikers Pitstop</h1>
        <p class="lead">Your one-stop shop for all biker needs</p>
        <a href="shop.php" class="btn btn-primary btn-lg">Shop Now</a>
    </div>

    <!-- Brands Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Our Brands</h2>
        <div class="row text-center brands">
            <div class="col-md-3">
                <img src="assets/images/brand1.png" alt="Brand 1">
            </div>
            <div class="col-md-3">
                <img src="assets/images/brand2.png" alt="Brand 2">
            </div>
            <div class="col-md-3">
                <img src="assets/images/brand3.png" alt="Brand 3">
            </div>
            <div class="col-md-3">
                <img src="assets/images/brand4.png" alt="Brand 4">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 VR/46 Bikers Pitstop. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
