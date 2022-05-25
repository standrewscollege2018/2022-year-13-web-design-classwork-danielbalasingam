<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mens Clothing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="custom2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">
  </head>
  <body>

    <?php
    // includes the navbar
      include("navbar.php");
    ?>

    <div class="row p-2">
      <div class="col-12 col-md-2">
        <div class="card border-dark">
          <h1 class="bg-dark text-light p-1">Mens Clothing</h1>
          <p class="p-1">Filler text</p>
          <p class="p-1">Filler text</p>
          <p class="p-1">Filler text</p>
          <p class="p-1">Filler text</p>
        </div>
      </div>

      <div class="col-12 col-md-9">

        <div class="row bg-dark p-1 mb-3 rounded">
          <div class="col-6 col-xl-4 p-1">
            <div class="card p-1">
              <a href="mens-results.php">
                <img src="images/shoe1.jpg" class="img-fluid" alt="item1">
              </a>
                <p>Adidas Golf Shoes</p>
                <p>$259.99</p>
            </div>
          </div>
          <div class="col-6 col-xl-4 p-1">
            <div class="card p-1">
              <a href="mens-results.php">
                <img src="images/shoe2.jpg" class="img-fluid" alt="item2">
              </a>
                <p>Adidas Golf Shoes</p>
                <p>$259.99</p>
            </div>
          </div>
          <div class="col-6 col-xl-4 p-1">
            <div class="card p-1">
              <a href="mens-results.php">
                <img src="images/shoe3.jpg" class="img-fluid" alt="item3">
              </a>
                <p>Asics Golf Shoes</p>
                <p>$159.99</p>
            </div>
          </div>
          <div class="col-6 col-xl-4 p-1">
            <div class="card p-1">
              <a href="mens-results.php">
                <img src="images/shoe4.jpg" class="img-fluid" alt="item4">
              </a>
                <p>New Balance Golf Shoes</p>
                <p>$199.99</p>
            </div>
          </div>
        </div>

      </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
