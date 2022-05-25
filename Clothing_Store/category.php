<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clothing Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">

    <style media="screen">
      .card a:link {
        color: black;
        text-decoration: none;
      }
      .card a:hover {
        color: black;
        text-decoration: none;
      }
      .card a {
        color: black;
        text-decoration: none;
      }
    </style>

  </head>
  <body>
    <?php
      include("navbar.php");
      include("dbconnect.php");
     ?>

     <?php
        // gets the ID for the category
        $ID = $_GET['ID'];

        // runs a query to get all of the info from the category table
        $category_sql = "SELECT * FROM category WHERE ID=$ID";
        $category_query = mysqli_query($dbconnect, $category_sql);
        $category_rs = mysqli_fetch_assoc($category_query);
        // samething as above just for the items table
        $items_sql = "SELECT * FROM items WHERE Category_ID=$ID";
        $items_query = mysqli_query($dbconnect, $items_sql);
        $items_rs = mysqli_fetch_assoc($items_query);
      ?>
      <!-- echos the name for the category selected -->
      <h5><?php echo $category_rs['Category_Name'] ?></h5>

    <div class="container d-flex align-items-center justify-content-center">
      <div class="row p-5">
      <?php
        // sets a do while loop to show all items in the database
        do {
      ?>
      <div class="col-12 col-xl-4 col-md-6 p-3">
          <div class="card" style="width: 20rem;">
            <a href="item.php?item_ID=<?php echo $items_rs['item_ID'] ?>">
              <img src="<?php echo $items_rs['Images']; ?>" class="card-img-top img-fluid" style="height: 26rem;" alt="img not found">
              <div class="card-body">
                <h5><b><?php echo $items_rs['Item_Name']; ?></b></h5>
                <p><?php echo $items_rs['Description']; ?></p>
                <p><b></b> <?php echo $items_rs['Price'] ?></p>
              </div>
            </a>
          </div>
      </div>
      <?php
    } while ($items_rs = mysqli_fetch_assoc($items_query));
      ?>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
