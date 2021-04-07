<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Leave a Review! </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Material Design Bootstrap -->
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
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="css/revStyle.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php
    require_once("html/headerNav.html");
    ?>

    <div class="container">

        <h2 class="heading heading-yellow" style="padding-top: 10px; padding-left: 20px; text-align: center;"> Deals of the Week </h2>

        <div class="col-lg-10 offset-lg-1 pt-5 pb-5 text-light" id="carousel2">
            <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel2">
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active text-center p-4">
                        <h1>
                            MONDAY
                        </h1>
                        <blockquote class="blockquote text-center">
                            
                            <footer class="footer">50% OFF SIGNATURE ROLLS
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            TUESDAY
                        </h1>
                        <blockquote class="blockquote text-center">
                            
                            <footer class="footer">BOGO RICE DISHES
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            WEDNESDAY
                        </h1>
                        <blockquote class="blockquote text-center">
                            
                            <footer class="footer">KIDS EAT HALF OFF<br>
                            <p style="font-size:11px; padding-top: 2px; padding-bottom: 2px">under 13</p>
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            THURSDAY
                        </h1>
                        <blockquote class="blockquote text-center">
                            
                            <footer class="footer">50% OFF GYOZA
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            FRIDAY
                        </h1>
                        <blockquote class="blockquote text-center">
                            
                            <footer class="footer">GROUPS 5+ 10% OFF
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                            </blockquote>
                    </div>  

                    <div class="carousel-item text-center p-4">
                        <h1>
                            SATURDAY
                        </h1>
                        <blockquote class="blockquote text-center">
                            
                            <footer class="footer">1 FREE FRIED RICE<br>
                                <p style="font-size:11px; padding-top: 2px; padding-bottom: 2px">w/ any signature roll purchase</p>
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                        </blockquote>
                    </div>

                    <div class="carousel-item text-center p-4">
                        <h1>
                            SUNDAY
                        </h1>
                        <blockquote class="blockquote text-center">
                            
                            <footer class="footer">LUNCH 12% OFF<br>
                                <p style="font-size:11px; padding-top: 2px; padding-bottom: 2px">11:30-3:00</p>
                            </footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
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


    </div>
    </div>
    </div>

    <?php
    require_once("html/footer.html");
    ?>

</body>

</html>