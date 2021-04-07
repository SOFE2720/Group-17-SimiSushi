<!DOCTYPE html>
<html lang="en">

<head>
    <title> Book a reservation! </title>

    <?php
    require_once("../html/links.html");
    ?>

    <link rel="stylesheet" href="../css/resStyle.css">

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
                        <a class="nav-link reservations" href="../php/customer.php" style="font-weight: bold; border-bottom: 2px solid white"> RESERVATIONS </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> ABOUT US </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="../promotions.php">PROMOTIONS</a>
                    </li>
                    <li class="nav-item orderonline">
                        <a class="nav-link menu" href="../php/menu.php"> ORDER ONLINE </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="container-time">
            <h2 class="heading">Hours</h2>
            <h3 class="heading-days">Monday - Friday</h3>
            <p>11am - 3pm (lunch all you can eat!)</p>
            <p>3pm - 10pm (dinner all you can eat!)</p>
            <br>

            <h3 class="heading-days">Saturday and Sunday</h3>
            <p>12pm - 3pm (lunch all you can eat!)</p>
            <p>3pm - 11pm (dinner all you can eat!)</p>

            <hr>
            <hr>

            <h4 class="heading-phone">Call Us: (647) 298-3754</h4>
        </div>

        <div class="container-form">
            <form method="POST">
                <h2 class="heading heading-yellow" style="border-bottom: 2px solid black;">Book a table today!</h2>

                <div class="form-field">
                    <p>First Name </p>
                    <input type="text" name="fname" placeholder="enter your first name (required)" required style="width: 254px;">
                </div>
                <div class="form-field">
                    <p>Last Name</p>
                    <input type="text" name="lname" placeholder="enter your last name(required)" required style="width: 254px;">
                </div>
                <div class="form-field">
                    <p>Telephone Number </p>

                    <input id="telNo" name="phone" type="tel" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="eg. 888-888-8888">
                </div>
                <div class="form-field">
                    <p>Date</p>
                    <input type="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="form-field">
                    <p>Time (every 30 min) </p>
                    <span class="time"> <input type="time" min="11:00" name="time" max="23:00" class="form-field" step="1800" required>
                        <span class="validity"></span> </span>

                </div>
                <div class="form-field">
                    <p>How many people?</p>
                    <input type="number" name="size" min="1" max="10" step="1" required>
                </div>

                <button class="btn" name="formsubmit">Submit</button>

                <?php
                //Create a database connection
                if (!empty($_POST)) {
                    $dbhost = "localhost";
                    $dbuser = "sofe2800customer";
                    $dbpass = "4VtjCdx3H97eI4bV";
                    $dbname = "sofe2800final";
                    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                }
                if (mysqli_connect_errno()) {
                    die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
                }
                if (isset($_POST['formsubmit'])) {
                    //read the input passed from the form
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $phone = $_POST['phone'];
                    $date = $_POST['date'];
                    $time = $_POST['time'];
                    $size = $_POST['size'];

                    //Max 1 reservation per phone number
                    $sql = "select PhoneNumber from reservations where PhoneNumber='" . $phone . "'";
                    $customer = 0;
                    foreach ($connection->query($sql) as $row) {
                        if ($row['PhoneNumber'] == $phone)
                            $customer++;
                    }

                    // Max 20 reservations on the same day  
                    $sql2 = "select Date from reservations where Date='" . $date . "'";
                    $numDay = 0;
                    foreach ($connection->query($sql2) as $row) {
                        if ($row['Date'] == $date)
                            $numDay++;
                    }

                    //total capacity
                    $totalCapacity = 0;
                    $sql2 = "select SUM(Size) from reservations where Date='" . $date . "' and Time='" . $time . "'";
                    foreach ($connection->query($sql2) as $row) {
                        $totalCapacity = $row['SUM(Size)'] + $size;
                    }
                    // alert function
                    function alert($msg)
                    {
                        echo "<script type='text/javascript'>alert('$msg');</script>";
                    }

                    //error messages
                    if ($customer != 0) {
                        $error1 = "Reservation using the phone number " . $phone . " was already made.";
                        alert($error1);
                    }
                    if ($numDay >= 20) {
                        $error2 = "Max reservations for this day has been reached. Please choose another day";
                        alert($error2);
                    }
                    if ($totalCapacity > 20) {
                        $error3 = "Max capacity for this time has been reached. Please choose another time/day.";
                        alert($error3);
                    }

                    //insert into database
                    if ($customer == 0 && $numDay < 20 && $totalCapacity <= 20) {
                        $sql = "INSERT INTO reservations (FirstName,LastName,PhoneNumber,Date,Time,Size) VALUES (
                    '{$connection->real_escape_string($fname)}',
                    '{$connection->real_escape_string($lname)}',
                    '{$connection->real_escape_string($phone)}',
                    '{$connection->real_escape_string($date)}',
                    '{$connection->real_escape_string($time)}',
                    '{$connection->real_escape_string($size)}'
                )";
                        $insert = $connection->query($sql);

                        if ($insert == TRUE) {
                            //$resOutput = "Reservation complete for " . $fname . " " . $lname . "<br>Phone Number: " . $phone . " <br>Date: " . $date . " <br>Time: " . $time . "<br>Thank you!<br>";

                            echo '<div class="info"> ✅ Reservation complete for ' . $fname . ' ' . $lname . '<br>Phone Number: ' . $phone . '<br>Date: ' . $date . '<br>Time: ' . $time . ' <br>Thank you!<br> </div> ';
                        } else {
                            die("Error: {$connection->errno}: {$connection->error}");
                        }
                    }
                    $connection->close();
                }
                ?>
            </form>
        </div>
    </div>

    <?php
    require_once("../html/footer.html");
    ?>

</body>

</html>