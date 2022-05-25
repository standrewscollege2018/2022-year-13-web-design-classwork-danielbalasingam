<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clothing Store</title>
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
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Index</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
            </tr>
          </thead>
          <tbody>
            <th scope="row">1</th>
            <td>Random</td>
            <td>Name</td>
            <td>price</td>
          </tbody>
        </table>
      </div>

      <div class="row p-3">
        <div class="col-12 col-md-6 col-xl-3">
          <a href="index.php" class="rounded bg-dark text-light p-1">Return To Home</a>
        </div>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
