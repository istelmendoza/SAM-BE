<?php
include("A05/connect.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/K3.png">
  <title>Istel's Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .card {
      transition: transform 0.5s ease, background-color 0.5s ease, box-shadow 0.5s ease;
    }

    .card:hover {
      background-color: rgba(255, 255, 255, 0.801);
      color: black;
      transform: scale(1.0);
      box-shadow: 0px 5px 10px #6c757d;
    }

    footer {
      bottom: 0;
      width: 100%;
      z-index: 1000;
    }

    section {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
  </style>
</head>

<body data-bs-theme="dark">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg px-3 mb-3 bg-body-tertiary"
    style="position: fixed; top: 0; width: 100%; z-index: 1000;">
    <a class="navbar-brand fw-bold" href="#">KRISTEL JOY MENDOZA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#AboutMe">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#explorenow">Projects</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Home Section -->
  <div id="home" class="carousel slide" data-bs-ride="carousel" style="height: 100vh;">
    <div class="carousel-inner" style="height: 100%;">
      <div class="carousel-item active position-relative" style="height: 100%;">
        <img src="assets/bg.jpg" class="d-block w-100 opacity-50" style="height: 100%; object-fit: cover;" alt="...">
        <div class="carousel-caption d-flex justify-content-center align-items-center" style="height: 100%;">
          <div class="text-center text-body">
            <h1><b>Welcome to My Portfolio!!</b></h1>
            <p class="fs-3 fst-italic">
              Take a look at my simple collection of projects! Each one shows off my knack for coming up with creative
              solutions and making things happen. If you’re interested in learning more or just want to say hi, reach me
              out through the contacts below!
            </p>
            <a class="btn btn-outline-secondary fw-bold rounded-3 text-white" href="#AboutMe">Get to Know Me!!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
   

  <!-- Projects Section -->
  <section id="explorenow" style="background: url('img/home.png') no-repeat center center; background-size: cover;">
    <div class="container p-5 text-center">
      <h2 class="display-3 font-monospace fs-4">My Latest Projects</h2>
      <div class="row my-3 justify-content-center">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
          <div class="card my-3 shadow" style="width: 100%; border-radius: 15px; overflow: hidden;">
            <img src="assets/insideout.jpg" class="card-img-top" alt="Canon Brochure" style="height: 300px; object-fit: cover;">
            <div class="card-body d-flex flex-column text-center justify-content-between">
              <h5 class="card-title">Tri-Fold Brochure</h5>
              <p class="card-text">
                A Canon tri-fold A4 brochure that showcases the system's attributes and characteristics.
              </p>
              <a class="btn btn-outline-secondary fw-bold rounded-3" href="A05/index.php">
                View Project
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 <!-- About Section -->
<section id="AboutMe">
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img src="assets/Picture.JPG" alt="Profile Pic" class="img-fluid rounded-3" style="width: 20rem;">
      </div>
      <div class="col-lg-6">
        <h1 class="fw-bold">Mendoza, Kristel Joy A.</h1>
        <p>Bachelor of Science in Information Technology - Polytechnic University of the Philippines</p>
  
        <div class="mt-4">
          <div class="d-flex justify-content-center align-items-center flex-wrap">
            <a href="https://www.facebook.com/profile.php?id=100004845437215&mibextid=ZbWKwL"
              class="text-decoration-none mx-2" target="_blank">
              <img src="assets/fb.png" alt="Facebook Profile" style="width: 30px; height: 30px;">
            </a>
            <a href="https://github.com/istelmendoza" class="text-decoration-none mx-2" target="_blank">
              <img src="assets/github.png" alt="GitHub Profile" style="width: 30px; height: 30px;">
            </a>
            <a href="https://www.instagram.com/iiistell/profilecard/?igsh=ZDNnbXVrMTNqOTJx"
              class="text-decoration-none mx-2" target="_blank">
              <img src="assets/ig.png" alt="Instagram Profile" style="width: 30px; height: 30px;">
            </a>
            <a href="https://t.me/iistel" class="text-decoration-none mx-2" target="_blank">
              <img src="assets/tg.png" alt="Telegram Profile" style="width: 30px; height: 30px;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <footer class="bg-dark text-white text-center shadow">
    <div class="p-2">
      © 2024 Mendoza, Kristel Joy A. All rights reserved.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
