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
  </head>
  <body>
    <?php
    // includes the navbar
      include("navbar.php");
      include("dbconnect.php")
    ?>

    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3>LOGIN</h3>
              </div>
              <div class="panel-body">
                  <p>Login to make a purchase.</p>
                  <form method="post" action="login_script.php">
                      <div class="form-group">
                          <input type="text" class="form-control" name="name" placeholder="username">
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                      </div>
                      <div class="form-group">
                          <input type="submit" value="Login" class="btn btn-primary">
                      </div>
                  </form>
              </div>
              <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
              </div>
          </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
