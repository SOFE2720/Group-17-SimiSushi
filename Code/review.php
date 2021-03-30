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
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="revStyle.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<?php
	require_once("headerNav.html");
	?>

	<div class="container">

		<h2 class="heading heading-yellow" style="padding-top: 10px; padding-left: 20px;"> Here's what our customers are saying </h2>

		<div class="col-lg-10 offset-lg-1 pt-5 pb-5 text-light" id="carousel">
			<div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active text-center p-4">
						<blockquote class="blockquote text-center">
							<p class="mb-0"><i class="fa fa-quote-left"></i> Amazing food, really blew me away. Will be
								coming back ASAP.
							</p>
							<footer class="blockquote-footer">M. Morales<cite title="Source Title"> Student</cite>
							</footer>
							<!-- Client review stars -->
							<!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
							<p class="client-review-stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>
							</p>
						</blockquote>
					</div>
					<div class="carousel-item text-center p-4">
						<blockquote class="blockquote text-center">
							<p class="mb-0"><i class="fa fa-quote-left"></i> Stopped by after several positive
								recommendations, did not disappoint.
							</p>
							<footer class="blockquote-footer">Grace Sunderfield <cite title="Source Title">Mirazur
									Chef</cite></footer>
							<!-- Client review stars -->
							<!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
							<p class="client-review-stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</p>
						</blockquote>
					</div>
					<div class="carousel-item text-center p-4">
						<blockquote class="blockquote text-center">
							<p class="mb-0"><i class="fa fa-quote-left"></i> Every bite made me want to go back even
								more. Amazing staff to top it off.
							</p>
							<footer class="blockquote-footer">G. Ramsay <cite title="Source Title">TV Chef</cite>
							</footer>
							<!-- Client review stars -->
							<!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
							<p class="client-review-stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</p>
						</blockquote>
					</div>
				</div>
				<br>
				<ol class="carousel-indicators">
					<li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
					<li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
				</ol>
			</div>
		</div>
		<br>
		<br>

		<div class="container-form">

			<div class="reviewBox">
				<form method="POST">
					<h2 class="heading heading-yellow" style="border-bottom: 2px solid black;"> Consider leaving a
						review! </h2>

					<div class="form-field">
						<p>Your Name </p>
						<input type="text" name="reviewerName" placeholder="enter your name (required)" required style="width: 254px;">
					</div>
					<div class="form-field">
						<p>Your Email </p>

						<input type="email" name="reviewerEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Make sure to include '@' in the email address" placeholder="E-mail (required)" required>
					</div>
					<div class="form-field">
						<p>Your Review </p>

						<textarea name="usersReview" cols="30" rows="10" style="resize: none;" maxlength="400" required></textarea>
					</div>

					<button class="btn" name="formsubmit">Submit</button>

					<?php
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
						$name = $_POST['reviewerName'];
						$email = $_POST['reviewerEmail'];
						$review = $_POST['usersReview'];

						$sql = "INSERT INTO reviews (ReviewerName,Email,UserReview) VALUES (
											'{$connection->real_escape_string($name)}',
											'{$connection->real_escape_string($email)}',
											'{$connection->real_escape_string($review)}'
										)";

						$insert = $connection->query($sql);

						if ($insert == TRUE) {
							echo '<div class="info" style="text-align: center; font-size: larger;">Submitted ✅ Thank you for your feedback!</div> ';
						} else {
							die("Error: {$connection->errno}: {$connection->error}");
						}

						$connection->close();
					}

					?>
			</div>
		</div>
	</div>


	</div>
	</div>
	</div>

	<?php
	require_once("footer.html");
	?>

</body>

</html>