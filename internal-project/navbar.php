<nav class="navbar navbar-expand-lg custom-nav">
  <div class="container-fluid">
    <a href="index.php"><img src="images/logo.png" alt="logo" style="width:40px;height:40px;"></a>
    <div class="custom-nav-dropdown">
      <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown rounded">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mens</a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-in-down">
            <li><a href="mens.php" class="dropdown-item">Shoes</a></li>
            <li><a href="#" class="dropdown-item">Test</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Womens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kids</a>
        </li>
        <li class="nav-item dropdown rounded">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">More Info</a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-in-down">
            <li><a href="#" class="dropdown-item">Test</a></li>
            <li><a href="#" class="dropdown-item">Test</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" action="index.php" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary text-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- <form class="d-flex" action="index.php?page=searchresults" method="post"> -->
