<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        p {
            color: red;
        }
    </style>
</head>

<body>
<form method="post"> 
    <h1>Remove Individual Reservation</h1>
    First Name: <input type = "text" name = "fname" placeholder="Enter First Name" required/>
    Phone Number: <input type = "tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="000-000-0000" required/>
    <input type = "submit" name="remove" value = "remove" /><br><br>

<?php
//Create a database connection
if(!empty($_POST)){
$dbhost="localhost";
$dbuser="sofe2800admin";
$dbpass="ai1iy7zIcnSZhaJa";
$dbname="sofe2800final";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}
if (mysqli_connect_errno()){
    die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
}

//remove a reservation from database
if(isset($_POST['remove'])) { 
    $phone = $_POST['phone'];
    $fname = $_POST['fname'];
    $sql1 = "delete from reservations where FirstName='". $fname . "' and PhoneNumber='". $phone . "'";
    $delete=$connection->query($sql1);

    if ($delete==TRUE){
        echo $fname . "(".$phone.")"." deleted <br><br>";
    } else{
        die("Error: {$connection->errno}: {$connection->error}");
    } 
    $connection->close(); //close connection
}
?>
</form>

<form method="post"> 
    <h1>Remove Reservation by Date</h1>
    Date: <input type = "date" name = "date" required/>
    <input type = "submit" name="removeDay" value = "Remove" /><br><br>

<?php
//Create a database connection
if(!empty($_POST)){
$dbhost="localhost";
$dbuser="sofe2800admin";
$dbpass="ai1iy7zIcnSZhaJa";
$dbname="sofe2800final";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}
if (mysqli_connect_errno()){
    die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
}

//remove all reservations in a day
if(isset($_POST['removeDay'])) { 
    $date = $_POST['date'];
    $sql1 = "delete from reservations where Date='". $date . "'";
    $delete=$connection->query($sql1);

    if ($delete==TRUE){
        echo $date . " deleted <br><br>";
    } else{
        die("Error: {$connection->errno}: {$connection->error}");
    } 

    $connection->close(); //close connection
}
?>
</form>

<form  method="POST">
    <h1>Add Reservation</h1>
    First Name: <input type = "text" name = "fname" placeholder="Enter First Name" required/><br>
    Last Name: <input type = "text" name = "lname" placeholder="Enter Last Name" required/><br>
    Phone Number: <input type = "tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="000-000-0000" required/><br>
    Date: <input type = "date" name = "date" min="<?php echo date('Y-m-d');?>" required/><br>
    Time (avail from 9:00 AM - 11:00 PM, every 30 min): <input type = "time" name = "time" min="09:00" max="23:00" step="1800" required/><br>
    Reservation Size: <input type="number" name="size" min="1" max="100" step="1" required>
    <input type = "submit" name="addRes"/><br><br>   

    <?php
//Create a database connection
if(!empty($_POST)){
$dbhost="localhost";
$dbuser="sofe2800admin";
$dbpass="ai1iy7zIcnSZhaJa";
$dbname="sofe2800final";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}
if (mysqli_connect_errno()){
    die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
}

//remove all reservations in a day
if(isset($_POST['addRes'])) { 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $size = $_POST['size'];   

    $sql="INSERT INTO reservations (FirstName,LastName,PhoneNumber,Date,Time,Size) VALUES (
        '{$connection->real_escape_string($fname)}',
        '{$connection->real_escape_string($lname)}',
        '{$connection->real_escape_string($phone)}',
        '{$connection->real_escape_string($date)}',
        '{$connection->real_escape_string($time)}',
        '{$connection->real_escape_string($size)}'
    )";
    $insert=$connection->query($sql);

    if ($insert==TRUE){
        echo"Reservation complete for ".$fname." ".$lname."<br>Phone Number: ".$phone." <br>Date: ".$date." <br>Time: ".$time.".<br><br>";

    } else{
        die("Error: {$connection->errno}: {$connection->error}");
    } 

    $connection->close(); //close connection
}
?>
</form>

<form method="post"> 
    <h1>Reservation List</h1>
    <input type="submit" name="makeList" value="Generate Reservation List" /><br><br>
<?php
//Create a database connection
if(!empty($_POST)){
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="PASSWORD24";
    $dbname="sofe2800final";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}
if (mysqli_connect_errno()){
    die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
}

//print all reservation information
if(isset($_POST['makeList'])) { 
    $sql = "select *  from reservations";
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Date</th><th>Time</th><th>Size</th></tr>";
    foreach ($connection->query($sql) as $row){
        echo"<tr><td>" . $row['FirstName'] . 
            "</td><td>" . $row['LastName'] . 
            "</td><td>" . $row['PhoneNumber'] . 
            "</td><td>" . $row['Date'] . 
            "</td><td>" . $row['Time'] . 
            "</td><td>" . $row['Size'] . 
            "</td></tr>";
    }
    echo "</table><br><br>";

    $connection->close(); //close connection

}

?>
</form> 


</body>
</html>