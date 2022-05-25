<nav class="navbar navbar-expand-lg custom-nav">
  <div class="container-fluid">
    <a href="index.php"><img src="images/logo.png" alt="logo" style="width:40px;height:40px;"></a>
    <div class="custom-nav-dropdown">
      <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">

        <li class="nav-item dropdown rounded">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mens</a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-in-down">
            <li><a href="category.php?ID=1" class="dropdown-item">T-Shirts</a></li>
            <li><a href="category.php?ID=2" class="dropdown-item">Shorts</a></li>
            <li><a href="category.php?ID=3" class="dropdown-item">Pants</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown rounded">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Womens</a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-in-down">
            <li><a href="category.php?ID=5" class="dropdown-item">T-Shirts</a></li>
            <li><a href="category.php?ID=6" class="dropdown-item">Shorts</a></li>
            <li><a href="category.php?ID=7" class="dropdown-item">Pants</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown rounded">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kids</a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-in-down">
            <li><a href="category.php?ID=9" class="dropdown-item">T-Shirts</a></li>
            <li><a href="category.php?ID=10" class="dropdown-item">Shorts</a></li>
            <li><a href="category.php?ID=11" class="dropdown-item">Pants</a></li>
          </ul>
        </li>

      </ul>

      <ul class="navbar-nav ms-auto">
      <?php
        if(isset($_SESSION["loggedin"])){ ?>
          <li class="nav-item">
            <a class="nav-link active" href="logout.php">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="welcome.php">Profile</a>
          </li>
        <?php }
        else {
          ?>
        <li class="nav-item">
          <a class="nav-link active" href="register.php">Sign Up</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
      <?php } ?>

        <li class="nav-item dropdown rounded">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">info</a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-in-down">
            <li><a href="#" class="dropdown-item">BRUH</a></li>
          </ul>
        </li>

        <form class="d-flex" action="index.php" method="post">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary text-light" type="submit">Search</button>
        </form>
      </ul>



    </div>
  </div>
</nav>
