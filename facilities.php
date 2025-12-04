<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facilities - PARK HOTEL</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * { font-family: 'Poppins', sans-serif; }

    html { scroll-behavior: smooth; }

    body { padding-top: 90px; }

    .h-font { font-family: 'Poppins', sans-serif; }

    .text-danger { color: #dc3545 !important; }

    .facility-card:hover { transform: translateY(-5px); transition: all 0.3s ease; border: 1px solid #dc3545; }

    .social-icon:hover { color: #dc3545 !important; transform: scale(1.2); transition: all 0.3s ease; }

    .hero-section {
      background: url('https://images.unsplash.com/photo-1576675782203-c40d2ab1fa9e') center/cover no-repeat;
      height: 350px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: rgba(219, 0, 0, 0.854);
      text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
    }

    .hero-section h1 { font-size: 3rem; }
    .navbar-nav .nav-link.active {
      color: #dc3545 !important;
      font-weight: 600;
    }

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white px-lg-1 py-3 shadow-sm fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3" href="index.html">
        <p class="double-underline mb-0">
          <span class="text-danger">HOTEL</span> PARK
        </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link fs-5" href="index.html#home">Home</a></li>
          <li class="nav-item"><a class="nav-link fs-5" href="index.html#rooms">Rooms</a></li>
          <li class="nav-item"><a class="nav-link fs-5 active" href="#">Facilities</a></li>
          <li class="nav-item"><a class="nav-link fs-5" href="index.html#about">About Us</a></li>
          <li class="nav-item"><a class="nav-link fs-5" href="index.html#contact">Contact</a></li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero-section">
    <h1>Our Facilities</h1>
  </div>

  <!-- Facilities Grid -->
  <div class="container my-5">
    <div class="text-center mb-4">
      <h2 class="fw-bold h-font">EXPLORE OUR FACILITIES</h2>
      <p>Luxury and convenience for an unforgettable stay</p>
    </div>
    <div class="row">

      <!-- WiFi -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow text-center p-4 facility-card">
          <i class="bi bi-wifi fs-1 text-danger mb-3"></i>
          <h5>High-Speed WiFi</h5>
          <p>Stay connected with unlimited high-speed internet throughout the hotel.</p>
        </div>
      </div>

      <!-- Restaurant -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow text-center p-4 facility-card">
          <i class="bi bi-cup-straw fs-1 text-danger mb-3"></i>
          <h5>Restaurant & Bar</h5>
          <p>Enjoy exquisite meals and refreshing beverages in our premium dining area.</p>
        </div>
      </div>

      <!-- Gym -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow text-center p-4 facility-card">
          <i class="bi bi-heart-pulse fs-1 text-danger mb-3"></i>
          <h5>Modern Gym</h5>
          <p>State-of-the-art fitness center equipped with latest machines and trainers.</p>
        </div>
      </div>

      <!-- Swimming Pool -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow text-center p-4 facility-card">
          <i class="bi bi-water fs-1 text-danger mb-3"></i>
          <h5>Swimming Pool</h5>
          <p>Relax and unwind in our pristine outdoor pool.</p>
        </div>
      </div>

      <!-- Spa -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow text-center p-4 facility-card">
          <i class="bi bi-spa fs-1 text-danger mb-3"></i>
          <h5>Spa & Wellness</h5>
          <p>Pamper yourself with massages, therapies, and rejuvenating treatments.</p>
        </div>
      </div>

      <!-- Movie Theater -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow text-center p-4 facility-card">
          <i class="bi bi-camera-reels fs-1 text-danger mb-3"></i>
          <h5>Movie Theater</h5>
          <p>Private theater screening latest movies for entertainment and relaxation.</p>
        </div>
      </div>

      <!-- Conference Hall -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow text-center p-4 facility-card">
          <i class="bi bi-building fs-1 text-danger mb-3"></i>
          <h5>Conference Hall</h5>
          <p>Fully equipped hall for business meetings, events, and conferences.</p>
        </div>
      </div>

      <!-- Lounge -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow text-center p-4 facility-card">
          <i class="bi bi-cup fs-1 text-danger mb-3"></i>
          <h5>Hotel Lounge</h5>
          <p>Relax in our cozy lounge with beverages, snacks, and comfortable seating.</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Social Links -->
  <div class="container mb-4">
    <div class="row text-center">
      <div class="col-lg-12 mb-3">
        <h2 class="fw-bold h-font">FOLLOW US</h2>
      </div>
      <div class="col-lg-12">
        <a href="#" class="text-dark fs-4 mx-2 social-icon"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-dark fs-4 mx-2 social-icon"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-dark fs-4 mx-2 social-icon"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-dark fs-4 mx-2 social-icon"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="text-dark fs-4 mx-2 social-icon"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-danger text-center text-white py-3">
    <div class="container">
      <p class="mb-0">&copy; 2025 PARK HOTEL. All rights reserved.</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
