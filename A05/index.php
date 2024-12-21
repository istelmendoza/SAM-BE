<?php
include("connect.php");
$sql = "SELECT * FROM islandsofpersonality";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $cards = [];
    while($row = $result->fetch_assoc()) {
        $cards[] = $row;
    }
} else {
    echo "No island found";
}
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Island of Personality</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/logo.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    body,
    h1,
    h2 {
      font-family: "Raleway", sans-serif;
      margin:0;
      padding:0;
      overflow-x:hidden;
    }

    body,
    html {
      height: 100%;
      padding:0;
      overflow-x:hidden;
    }

    p {
      line-height: 2
    }

    .bgimg,
    .bgimg2 {
      min-height: 100%;
      background-position: center;
      background-size: cover;
    }

    .bgimg {
      background-image: url("assets/background.png")
    }

    .bgimg2 {
      background-image: url("/w3images/flowers.jpg")
    }

   
.custom-card {
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.custom-card:hover {
    background-color:rgb(243, 241, 105) !important;  
    transform: scale(1.05); 
}

.family-island {
            background-color: #f0f8ff; 
        }
        .sports-island {
            background-color: #f4f4f9; 
        }
        .friendship-island {
            background-color: #ffe4e1; 
        }
        .joy-tune-island {
            background-color: #ffebcd; 
        }

  </style>
</head>

<body>

  <!-- Header / Home-->
  <header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
    <div class="w3-display-middle w3-text-white w3-center" style="margin-top: 0">
      <h1 class="w3-jumbo" style="margin-top: 0">Inside Out</h1>
      <h2 style="margin-top: 0">"Core memories shape who we are."</h2>
    </div>
</header>


<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-oni" style="display: flex; justify-content: center; align-items: center;">
    <a href="../index.php" class="w3-bar-item w3-button w3-hover-red" style="width: 25%;">Home</a>
    <a href="#islandofpersonality" class="w3-bar-item w3-button w3-hover-yellow" style="width: 25%;">Island of Personality</a>
  </div>
</div>


  <div class="container mt-3 p-3" id="islandofpersonality">
    <h2 class="text-center mb-4 mt-5 p-3">Island of Personality</h2> 
    <div class="row">
        
        <?php if (!empty($cards)) { 
            $counter = 0;
            foreach ($cards as $card) {
               
                $card_color = ($counter % 2 == 0) ? "#f8f9fa" : "#e9ecef";
                $column = 'col-md-6'; 
        ?>
            <div class="<?php echo $column; ?> mb-4">
                <div class="card rounded-3 custom-card" style="background-color: <?php echo $card_color; ?>; height: 100%; min-height: 400px;">
                    <img src="<?php echo $card['image']; ?>" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $card['name']; ?></h5>
                        <p class="card-text"><?php echo $card['shortDescription']; ?></p>
                        <p class="card-text"><?php echo $card['longDescription']; ?></p>
                        <p class="card-text"><strong>Color</strong> <?php echo $card['color']; ?></p>
                        <p class="card-text"><strong>Status:</strong> <?php echo $card['status']; ?></p>
                    </div>
                </div>
            </div>
        <?php 
            $counter++;
            } 
        } ?>
    </div>
</div>

<!-- islandContent-->
  <div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="wedding">
  <?php

$conn = mysqli_connect("localhost", "root", "", "corememories");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$islandTypes = [1 => 'Family Island', 2 => 'Sports Island', 3 => 'Friendship Island', 4 => 'Joy Tune Island'];
?>

<div class="w3-container w3-padding-64 w3-pale-red w3-center" id="island-cards">
    <div class="container my-4">
        <?php foreach ($islandTypes as $islandId => $islandCategory): ?>
            <h3><?php echo $islandCategory; ?></h3>
            <div class="row">
                <?php

                $query = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = $islandId LIMIT 3";
                $result = mysqli_query($conn, $query);
                
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $imageUrl = $row['image'];
                    $content = $row['content'];
                    $color = $row['color'];
                ?>

                    <div class="col-md-4 mt-3 ">
                        <div class="card mb-5 " style="background-color: white;">
                            <img src="<?php echo $imageUrl; ?>" class="card-img-top" alt="Image">
                            <div class="card-body">
                                <p class="card-text"><?php echo $content; ?></p>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php

mysqli_close($conn);
?>

  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <p>Powered by <a href="" title="W3.CSS" target="_blank"
        class="w3-hover-text-green">Mendoza, Kristel Joy</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>

</html>