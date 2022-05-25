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
       $item_ID = $_GET['item_ID'];

       // samething as above just for the items table
       $items_sql = "SELECT * FROM items WHERE item_ID=$item_ID";
       $items_query = mysqli_query($dbconnect, $items_sql);
       $items_rs = mysqli_fetch_assoc($items_query);
      ?>

      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="<?php echo $items_rs['Images']; ?>" alt="img not found">
          </div>
          <div class="col-6">
            <h5><b><?php echo $items_rs['Item_Name']; ?></b></h5>
            <p><?php echo $items_rs['Description']; ?></p>
            <p><b></b> <?php echo $items_rs['Price'] ?></p>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
