<?php
include("connect.php");
$sql = "SELECT * FROM sports";
$result = $conn->query($sql);

$sports = [];
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $sports[] = $row;
  }
}

$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>USA Athletes</title>
  <link rel="icon" type="image/png" href="assets/icon.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>

#home {
    position: relative;
    overflow: hidden;
}

.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: White;
    font-size: 5rem; 
    font-weight: bold;
    text-shadow: 5px 5px 15px rgba(0, 0, 0, 0.8); 
    z-index: 10; 
    letter-spacing: 2px; 
  opacity: 10px;
}
    #topCountries h2 {
      text-align: center;
      font-size: 3rem;
      margin-top: 50px;
    }


    .vidcontainer {
      height: 100vh;
      width: 100%;
      overflow: hidden;
    }

    .zoom-hover-effect {
      transition: transform 0.3s ease-in-out;
    }

    .zoom-hover-effect:hover {
      transform: scale(1.1);
    }

    
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary shadow-sm px-2 py-1 mb-3"
    style="position: fixed; top: 0; width: 100%; z-index: 1000;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/OlympicLogo.png" alt="OlympicLogo" width="40" height="20">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link fw-bold small" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold small" href="#summerSports">Summer Sports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold small" href="#highlights">Highlights</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="home" class="vidcontainer mt-4">
    <iframe class="video opacity-50"
      src="https://www.youtube.com/embed/xHRQ7Ecu8N0?autoplay=1&mute=1&loop=1&playlist=xHRQ7Ecu8N0&rel=0&controls=0"
      style="width: 100vw; height: 100vh; border: none;" title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
    </iframe>
    
    <!-- Overlay Text -->
    <div class="overlay-text">
        USA Athletes
    </div>
</div>


  <!-- Olympic Section -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card bg-light rounded-3 shadow-sm">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="assets/USA.jpg" class="img-fluid rounded-start h-100" alt="Olympics Image">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center p-4">
              <h2 class="card-title text-center text-primary">USA Athlete</h2>
              <p class="card-text">
                USA Olympic athletes are known for their outstanding skill, dedication, and diverse backgrounds,
                excelling in various sports like track and field, swimming, gymnastics, and basketball. With a rich
                history of dominance, these athletes consistently represent their country with pride and inspire
                millions worldwide.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Summer Sports Section -->
  <div id="summerSports"
    class="container-fluid mt-3 vh-100 d-flex justify-content-center align-items-center text-center">
    <div>
      <h2>Summer Sports</h2>
      <div class="row">
        <?php foreach ($sports as $sport): ?>
          <div class="col-md-4 mb-4">
            <div class="card h-100 mt-3">
              <div class="col-12 overflow-hidden">
                <img src="<?= $sport['image_url'] ?>" class="img-fluid zoom-hover-effect" alt="<?= $sport['name'] ?>">
              </div>
              <div class="col-12">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title"><?= $sport['name'] ?></h5>
                  <p class="card-text"><?= $sport['description'] ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>




  <div id="playersUSA" class="container mt-3 text-center">
    <?php
    $conn = new mysqli("localhost", "root", "", "olympics");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sports = [
      1 => "Gymnastics",
      2 => "Swimming",
      3 => "Wrestling"
    ];

    foreach ($sports as $sport_id => $sport_name):
      $sql = "SELECT name, medal, description, image_url FROM athletes WHERE sport_id = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("i", $sport_id);
      $stmt->execute();
      $result = $stmt->get_result();
      ?>

      <h2><?= htmlspecialchars($sport_name) ?></h2>
      <div class="row justify-content-center">
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="<?= htmlspecialchars($row['image_url']) ?>" class="img-fluid hover-zoom"
                alt="<?= htmlspecialchars($row['name']) ?>">
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($row['name']) ?></h5>
                <p class="card-text fst-italic "><?= htmlspecialchars($sport_name) ?> -
                  <?= htmlspecialchars($row['medal']) ?> Medal
                </p>
                <p class="card-text"><?= htmlspecialchars($row['description']) ?></p>
                <div class="medal-box 
                            <?= ($row['medal'] == 'Gold') ? 'bg-warning' : (($row['medal'] == 'Silver') ? 'bg-secondary' : 'bg-bronze') ?> 
                            text-white p-2">
                  <?= htmlspecialchars($row['medal']) ?> Medal
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

      <?php
      $stmt->close();
    endforeach;
    ?>
  </div>

  <?php $conn->close(); ?>

  <div id="highlights" class="container text-center d-flex flex-column justify-content-center pt-5" style="min-height: calc(100vh - 160px);">
  <h2 class="display-4 font-weight-bold text-dark mb-4 mt-5 pt-5">USA Highlights</h2>
    <div class="row justify-content-center pt-3">
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm hover-shadow">
          <div class="embed-responsive" style="position: relative; padding-top: 56.25%;">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dkYLO4RheEA?si=M18ERq1pxmLp48zx"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Suni Lee on Vault</h5>
            <p class="card-text">Clean performance landing in Vault</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm hover-shadow">
          <div class="embed-responsive" style="position: relative; padding-top: 56.25%;">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Jl3gTWj--1E?si=526T9QRv8VEwDLZc"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Brody Malone</h5>
            <p class="card-text">A bounceback performance on the floor</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm hover-shadow">
          <div class="embed-responsive" style="position: relative; padding-top: 56.25%;">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EBhHrzshWjM?si=HffLIhbhv7k0dpzT"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Lawrence Sapp</h5>
            <p class="card-text">Swimming Trials</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm hover-shadow">
          <div class="embed-responsive" style="position: relative; padding-top: 56.25%;">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/T8AlpNI5BTY?si=Y6vaxONMCFpkAm-j"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Matt Fallon</h5>
            <p class="card-text">Breaks the 200m breast AMERICAN RECORD</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm hover-shadow">
          <div class="embed-responsive" style="position: relative; padding-top: 56.25%;">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/c0eA2vPjHTM?si=6zlBh9H50kSAt9ns"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Swimming Duo</h5>
            <p class="card-text">Olympic silver medalists Parratto + Schnell make it back to Olympics</p>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Footer -->

<div>
<footer class="bg-dark text-white py-4 mt-auto">
  <div class="container text-center">
    <h5 class="mb-2">USA Athletes</h5>
    <p class="mb-0">Proudly supporting and celebrating the excellence of USA athletes worldwide.</p>
    <small>&copy; 2025 USA Athletes | All Rights Reserved</small>
  </div>
</footer>
</div>



  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anr.addEventListener("click", function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute("href")).scrollIntoView({
          behavior: "smooth",
        });
      });
    });
  </script>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>