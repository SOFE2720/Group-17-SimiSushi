<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title> Our Menu </title>
  <!-- FontAwesome for icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- our CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="menustyle.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

  <header>
    <div class="container-fluid">
      <nav class="navbar-expand-lg" aria-label="Site header">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link home" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="menu.php" style="font-weight: bold; border-bottom: 2px solid white;">MENU</a>
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

  <div class="page-container">
    <div class="content-wrap">
      <span>
        <form action="" style="margin-top: 20px; margin-bottom: 20px;">
          <section class="bg-menu bg-section" id="menu">
            <div class="container-fluid">
              <div class="row">

                <!-- Nav pills -->
                <ul class="nav nav-pills" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#rolls">Signature Rolls</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#appetizers">Appetizers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#asian-cuisine">Asian Cuisine</a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content slideanim">
                  <div id="rolls" class="tab-pane fade show active">
                    <div class="row">
                      <div class="col-sm-7">
                        <ul class="list-group">
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Tiger Roll<span class="badge pull-right">
                                $6.99
                                <div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbTR" onchange="cost();">
                                </div>
                              </span></h4>
                            <p class="list-group-item-text">avocado, tempura shrimp, cucumber
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">California Roll<span class="badge pull-right">$6.99
                                <div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbCR" onchange="cost();">
                                </div>
                              </span></h4>
                            <p class="list-group-item-text">crab, nori, cucumber and sesame seeds
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Dragon Roll<span class="badge pull-right">$6.99
                                <div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbDR" onchange="cost();">
                                </div>
                              </span></h4>
                            <p class="list-group-item-text">eel, Crab and Cucumber roll topped with
                              avocado
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Spicy Salmon Roll<span class="badge pull-right">$6.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbSSR" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">tuna and sesame siracha sauce, topped
                              with spicy mayo</p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Spider Roll<span class="badge pull-right">$6.99
                                <div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbSR" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">soft shell crab, cucumber and a choice
                              of sprouts, lettuce, roe, or avocado
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">
                              <span class="badge pull-right" style="width: 100%;padding-bottom: 10px;">
                                <div id="total" style="padding-top: 5px; padding-bottom: 5px;">
                                  Your subtotal = $<output id="subtotal" class="currency" style="font-size:larger"></output> |
                                  Tax = $<output id="tax" class="currency" style="font-size:larger"></output> |
                                  Your total = $<output id="ftotal" class="currency" style="font-size:larger"></output>
                                </div>
                                <button class="btn btn-light" type="button" id="order" onclick="orderPlaced()" style="font-size: larger;">Place Order</button>
                                <div id="orderSent" style="margin-top: 5px; font-size:larger"></div>
                              </span></h4>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-5">
                        <div class="right-cover">
                          <h3>Our Signature Rolls</h3>
                          <img src="bg2.jpg" class="menu-img img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- NEXT TAB -->
                  <div id="appetizers" class="tab-pane fade">
                    <div class="row">
                      <div class="col-sm-7">
                        <ul class="list-group">
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Squid sashimi<span class="badge pull-right">$6.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbSS" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">sliced squid served with soy sauce</p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Deep Fried Scallop<span class="badge pull-right">$5.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbDFS" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">freshly caught scallops deep fried until
                              golden</p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Calamari<span class="badge pull-right">$4.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbCal" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">deep fried squid with tonkatsu sauce
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Gyoza<span class="badge pull-right">$4.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbGyo" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">pan fried dumpling</p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Ika Yaki<span class="badge pull-right">$3.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbIY" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">grilled squid with fresh ginger sauce
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">
                              <span class="badge pull-right" style="width: 100%;padding-bottom: 10px;">
                                <div id="total2" style="padding-top: 5px; padding-bottom: 5px;">
                                  Your subtotal = $<output id="subtotal2" class="currency" style="font-size:larger"></output> |
                                  Tax = $<output id="tax2" class="currency" style="font-size:larger"></output> |
                                  Your total = $<output id="ftotal2" class="currency" style="font-size:larger"></output>
                                </div>
                                <button class="btn btn-light" type="button" id="order" onclick="orderPlaced2()" style="font-size: larger;">Place Order</button>
                                <div id="orderSent2" style="margin-top: 5px; font-size:larger"></div>
                              </span></h4>
                          </li>
                        </ul> 
                      </div>
                      <div class="col-sm-5">
                        <div class="right-cover">
                          <h3>Appetizers</h3>
                          <img src="https://trustudyabroad.files.wordpress.com/2019/04/2017_02_28_22453_1488267265._large.jpg" class="menu-img img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="asian-cuisine" class="tab-pane fade">
                    <div class="row">
                      <div class="col-sm-7">
                        <ul class="list-group">
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Noodle Soup<span class="badge pull-right">$6.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbNS" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">your choice of beef, chicken or shrimp
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Lo Mein<span class="badge pull-right">$6.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbLM" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">your choice of veggie, chicken, beef or
                              seafood</p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Pad Thai<span class="badge pull-right">$6.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbPT" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">your choice of veggie, chicken, beef or
                              seafood</p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">Fried Rice<span class="badge pull-right">$6.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbFR" onchange="cost();">
                                </div></span></h4>
                            <p class="list-group-item-text">your choice of veggie, chicken, beef or
                              seafood</p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading"> Sweet & Sour Chicken<span class="badge pull-right">$5.99<div class="quantity">
                                  <input type="number" min="0" max="9" step="1" value="0" id="numbSSC" onchange="cost();">
                                </div>
                              </span></h4>
                            <p class="list-group-item-text"> or beef or fish or shrimp
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="list-group-item-heading">
                              <span class="badge pull-right" style="width: 100%;padding-bottom: 10px;">
                                <div id="total3" style="padding-top: 5px; padding-bottom: 5px;">
                                  Your subtotal = $<output id="subtotal3" class="currency" style="font-size:larger"></output> |
                                  Tax = $<output id="tax3" class="currency" style="font-size:larger"></output> |
                                  Your total = $<output id="ftotal3" class="currency" style="font-size:larger"></output>
                                </div>
                                <button class="btn btn-light" type="button" id="order" onclick="orderPlaced3()" style="font-size: larger;">Place Order</button>
                                <div id="orderSent3" style="margin-top: 5px; font-size:larger"></div>
                              </span></h4>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-5">
                        <div class="right-cover">
                          <h3>Asian Cuisine</h3>
                          <img src="https://www.101corpuschristi.com/uploads/media/default/0001/23/fef92b31aa597167a112c932f2777db7941a79d3.jpeg" class="menu-img img-fluid" width="1100">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </form>
      </span>
    </div>

    <?php
    require_once("footer.html");
    ?>

    <script>
      jQuery(
          '<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>'
        )
        .insertAfter('.quantity input');
      jQuery('.quantity').each(function() {
        var spinner = jQuery(this),
          input = spinner.find('input[type="number"]'),
          btnUp = spinner.find('.quantity-up'),
          btnDown = spinner.find('.quantity-down'),
          min = input.attr('min'),
          max = input.attr('max');

        btnUp.click(function() {
          var oldValue = parseFloat(input.val());
          if (oldValue >= max) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue + 1;
          }
          spinner.find("input").val(newVal);
          spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
          var oldValue = parseFloat(input.val());
          if (oldValue <= min) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue - 1;
          }
          spinner.find("input").val(newVal);
          spinner.find("input").trigger("change");
        });

      });

      // ------------------------------------------------------------------------------

      function cost() {
        console.log("this is working");

        var TR = document.getElementById("numbTR").value;
        var CR = document.getElementById("numbCR").value;
        var DR = document.getElementById("numbDR").value;
        var SSR = document.getElementById("numbSSR").value;
        var SR = document.getElementById("numbSR").value;
        var SS = document.getElementById("numbSS").value;
        var DFS = document.getElementById("numbDFS").value;
        var Cal = document.getElementById("numbCal").value;
        var Gyo = document.getElementById("numbGyo").value;
        var NS = document.getElementById("numbNS").value;
        var FR = document.getElementById("numbFR").value;
        var IY = document.getElementById("numbIY").value;
        var LM = document.getElementById("numbLM").value;
        var PT = document.getElementById("numbPT").value;
        var SSC = document.getElementById("numbSSC").value;


        var subtotal = (TR * 6.99) + (CR * 6.99) + (DR * 6.99) + (SSR * 6.99) + (SR * 6.99) + (SS * 6.99) + (DFS * 5.99) + (Cal * 4.99) + (Gyo * 4.99) + (NS * 6.99) + (FR * 6.99) + (IY * 3.99) + (LM * 6.99) + (PT * 6.99) + (SSC * 5.99);
        var tax = subtotal * 0.13;
        var total = subtotal + tax;
        document.getElementById("subtotal").innerHTML = subtotal.toFixed(2) + "<br>";
        document.getElementById("tax").innerHTML = tax.toFixed(2) + "<br>";
        document.getElementById("ftotal").innerHTML = total.toFixed(2);
        document.getElementById("subtotal2").innerHTML = subtotal.toFixed(2) + "<br>";
        document.getElementById("tax2").innerHTML = tax.toFixed(2) + "<br>";
        document.getElementById("ftotal2").innerHTML = total.toFixed(2);
        document.getElementById("subtotal3").innerHTML = subtotal.toFixed(2) + "<br>";
        document.getElementById("tax3").innerHTML = tax.toFixed(2) + "<br>";
        document.getElementById("ftotal3").innerHTML = total.toFixed(2);
      }

      function orderPlaced() {
        document.getElementById("orderSent").innerHTML = "Order placed ✅ Thank You!";
      }

      function orderPlaced2() {
        document.getElementById("orderSent2").innerHTML = "Order placed ✅ Thank You!";
      }

      function orderPlaced3() {
        document.getElementById("orderSent3").innerHTML = "Order placed ✅ Thank You!";
      }
    </script>



  </div>
</body>
</html>