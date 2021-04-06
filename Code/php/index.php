<!DOCTYPE html>
<html lang="en">

<head>
  <title>Simi Sushi</title>

  <!-- attach external links to scripts and css -->
  <?php
  require_once("links.html");
  ?>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <!-- navigation bar -->
  <header>
    <div class="container-fluid">
      <nav class="navbar-expand-lg" aria-label="Site header">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link home" href="index.php" style="font-weight: bold; border-bottom: 2px solid white;">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="menu.php">MENU</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"> LOCATIONS </a>
          </li>
          <li class="nav-item">
            <a class="nav-link reservations" href="customer.php"> RESERVATIONS </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"> ABOUT US </a>
          </li>
          <li class="nav-item orderonline">
            <a class="nav-link menu" href="menu.php"> ORDER ONLINE </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="jumbotron-custom">
    <h1> SIMI SUSHI</h1>
    <p>Perfection in every dish.</p>
  </div>


  <div class="jumbotron">
    <div class="container">
      <div class="row">

        <div class="col">
          <img src="sushiRoll.jpg" id="sushi-img">
        </div>

        <div class="col">
          <img src="rice.jpg" id="rice-img">
        </div>

        <div class="col">
          <img src="misoSoup.jpg" id="soup-img">
        </div>

      </div>
      <h1 style="margin-top: 15px;">Quality</h1>
      <p>Ethically sourcing the freshest ingredients for a defined taste.</p>
    </div>
  </div>

  <div class="jumbotron-custom">
    <div class="container">
      <h1>Safety</h1>
      <p>All food prepared under strict sanitation conditions and a contact-less take-out.</p>
    </div>
  </div>


  <footer class="page-footer" id="footer">
  <div class="text-center" style="background-color:#5a4d4a;">
    <div class="row">
      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3" style="padding: 20px;">

        <!-- Content -->
        <h5 class=" text-uppercase">LOCATIONS AND CONTACT</h5>
        <br>
        <p>Toronto, ON - Take-out Only </p>
        <p>(647) 298-3754 - Oshawa, Toronto, ON</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3" style="padding: 20px;">

        <!-- Content -->
        <a href="review.php">
          <button type="button" class="btn btn-info btn-rounded btn-lg" style="border-style: none;">leave a review<i
              class="fas fa-heart ml-2" aria-hidden="true"></i></button>
        </a>
      </div>
    </div>
  </div>
</footer>

  <!-- ----------------------------------------------------- -->
  <!-- JQuery -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
  </script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>

</html>