<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Leave a Review! </title>

    <?php
    require_once("html/links.html");
    //should require links
    ?>

    <!-- our CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="css/revStyle.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar-expand-lg" aria-label="Site header">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link home" href="../index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="../php/menu.php">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> LOCATIONS </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link reservations" href="../php/customer.php"> RESERVATIONS </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> ABOUT US </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="../promotions.php" style="font-weight: bold; border-bottom: 2px solid white;">PROMOTIONS</a>
                    </li>
                    <li class="nav-item orderonline">
                        <a class="nav-link menu" href="../php/menu.php"> ORDER ONLINE</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">

        <h2 class="heading heading-yellow" style="padding-top: 10px; padding-left: 20px; text-align: center;"> Deals of the Week </h2>

        <div class="col-lg-10 offset-lg-1 pt-5 pb-5 text-light" id="carousel2">
            <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel2">
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active text-center p-4">
                        <h1>
                            50% OFF SIGNATURE ROLLS
                        </h1>
                        <blockquote class="blockquote text-center">

                            <footer class="footer">Monday
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->

                            <br>

                            <a href="/group-17-simisushi/code/php/menu.php">
                                <button type=" button" class="btn btn-info btn-rounded btn-lg" style="border-style: none;">
                                    order now!
                                </button>
                            </a>
                        </blockquote>

                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            BOGO RICE DISHES
                        </h1>
                        <blockquote class="blockquote text-center">

                            <footer class="footer">Tuesday
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->

                            <br>

                            <a href="/group-17-simisushi/code/php/menu.php">
                                <button type=" button" class="btn btn-info btn-rounded btn-lg" style="border-style: none;">
                                    order now!
                                </button>
                            </a>
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            KIDS EAT HALF OFF
                        </h1>
                        <blockquote class="blockquote text-center">

                            <footer class="footer">Wednesday<br>
                                <p style="font-size:11px; padding-top: 2px; padding-bottom: 2px">under 13</p>
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->

                            <a href="/group-17-simisushi/code/php/menu.php"">
                            <button type=" button" class="btn btn-info btn-rounded btn-lg" style="border-style: none;">
                                order now!
                                </button>
                            </a>
                        </blockquote>

                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            50% OFF GYOZA
                        </h1>
                        <blockquote class="blockquote text-center">

                            <footer class="footer">Thursday
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->

                            <br>

                            <a href="/group-17-simisushi/code/php/menu.php">
                                <button type=" button" class="btn btn-info btn-rounded btn-lg" style="border-style: none;">
                                    order now!
                                </button>
                            </a>
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            GROUPS 5+ 10% OFF
                        </h1>
                        <blockquote class="blockquote text-center">

                            <footer class="footer">Friday
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->

                            <br>

                            <a href="/group-17-simisushi/code/php/menu.php">
                                <button type=" button" class="btn btn-info btn-rounded btn-lg" style="border-style: none;">
                                    order now!
                                </button>
                            </a>
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            1 FREE FRIED RICE
                        </h1>
                        <blockquote class="blockquote text-center">

                            <footer class="footer">Saturday<br>
                                <p style="font-size:11px; padding-top: 2px; padding-bottom: 2px">w/ any signature roll purchase</p>
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->


                            <a href="/group-17-simisushi/code/php/menu.php">
                                <button type=" button" class="btn btn-info btn-rounded btn-lg" style="border-style: none;">
                                    order now!
                                </button>
                            </a>
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            LUNCH 12% OFF
                        </h1>
                        <blockquote class="blockquote text-center">

                            <footer class="footer">Sunday<br>
                                <p style="font-size:11px; padding-top: 2px; padding-bottom: 2px">11:30-3:00</p>
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->



                            <a href="/group-17-simisushi/code/php/menu.php">
                                <button type=" button" class="btn btn-info btn-rounded btn-lg" style="border-style: none;">
                                    order now!
                                </button>
                            </a>
                        </blockquote>
                    </div>

                </div>
                <br>
                <ol class="carousel-indicators">
                    <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
                    <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
                    <li data-target="#client-testimonial-carousel" data-slide-to="3"></li>
                    <li data-target="#client-testimonial-carousel" data-slide-to="4"></li>
                    <li data-target="#client-testimonial-carousel" data-slide-to="5"></li>
                    <li data-target="#client-testimonial-carousel" data-slide-to="6"></li>
                </ol>
            </div>
        </div>
        <br>
        <br>
    </div>

    <?php
    require_once("html/footer.html");
    ?>

</body>

</html>