<?php

include("connection.php");

if(isset($_POST["query_submit_btn"]))
{

		$fn = $_POST["fuulname"];
		$eid = $_POST["email"];
		
		$cont = $_POST["mobile"];
		

		$qry = "INSERT INTO `queries`(`id`, `fuulname`, `email`, `contact`) VALUES (NULL,'$fn','$eid','$dob','$cont','$q')";

		$result = mysqli_query($connect, $qry);

		if($result)
		{
			?> <script> alert("Query Submitted successfully"); </script> <?php
		}
		else
		{
			?> <script> alert("Something went wrong"); </script> <?php
		}
}	//query



	
?>


<?php 

session_start();

include("nav.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link href="style.css" rel="stylesheet">

</head>
<body>

<!-- navigation starts here -->

<!-- end of navigation code -->


<!-- hero section start -->

<div class="jumbotron bg-theme" id="hero">
  <h1 class="display-4">The 2024 Valorant Champions Tour: Madrid Masters</h1>
  <p class="lead"> VCT Masters Madrid 2024 is an global tournament organized by Riot Games for the first-person shooter game Valorant as part of the Valorant Champions Tour 2024 competitive season.</p>
  <hr class="my-4">
  <p> The tickets are Live  !</p>
  <p class="lead">
    <a class="btn btn-dark btn-lg" href="#" role="button">Book Now</a>
  </p>
</div>

<!-- end of hero section -->


<!-- about us section -->

<div class="container" id="about">
	<h1> What is Valorent Masters </h1>
	<hr>
	<div class="row">	
		<div class="col-md-6">
			<img src="images/vct madrid.jpg" class="img-fluid">
		</div>
		<div class="col-md-6">
			<p> The Valorant Master is a global competitive esports tournament series for the video game Valorant organised by Riot Games, the game's developers. The series runs multiple events throughout each season, culminating in Valorant Champions, the top-level event of the tour. </p>

			<h4> Additional Data</h4>
			<ul>
				<li> <i class="bi bi-browser-edge"></i> The winner (seed 1) and the runner-up (seed 2) for all three International Leagues and China League Kickoffs around the world qualified for the first global event of the competitive season of VCT </li>
				<li> <i class="bi bi-browser-edge"></i>All eight teams played in the Swiss-system format with three rounds. </li>
				<li> <i class="bi bi-browser-edge"></i> Teams with two wins advanced to the playoffs, while teams with two losses were eliminated. </li>
				<li> <i class="bi bi-browser-edge"></i> All matches were best-of-three series. </li>
			</ul>

		</div>
	</div>
</div>


<!-- end of about us section -->


<!-- gallery section -->
<div class="container" id="gallery">
	<h1> About <span> Section </span> </h1>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<figure>
				<img src="images/img1.jpg" class="img-fluid">
			<figcaption>Registration for VCT Seoul </figcaption>
			</figure>
		</div>
		<div class="col-md-3">
			<figure>
				<img src="images/img2.jpg" class="img-fluid">
			<figcaption> Live From Madrid </figcaption>
			</figure>
		</div>
		<div class="col-md-3">
			<figure>
				<img src="images/img3.jpg" class="img-fluid">
			<figcaption> Madrid Tickets and venue Policies</figcaption>
			</figure>
		</div>
		<div class="col-md-3">
			<figure>
				<img src="images/img4.jpg" class="img-fluid">
			<figcaption> Qualified Teams For Valorent Masters </figcaption>
			</figure>
		</div>
	</div>

	


<!-- end of gallery section -->



<!-- Contact Us section -->
<br>
<div class="container" id="contact">
	<h1> Contact <span> Section </span> </h1>
	<hr>
	<br>
	<div class="row">
		<div class="col-md-6">
			<div style="overflow:hidden;resize:none;max-width:100%;width:500px;height:350px;"><div id="embed-ded-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Sipna+College+Of+Engineering+And+Technology,+Badnera+Road,+Gopal+Nagar,+Amravati,+Maharashtra,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="my-codefor-googlemap" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="get-map-data">premium bootstrap themes</a><style>#embed-ded-map-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style></div>
		</div>
		<div class="col-md-6">
			<h4 align="center"> Query Form </h4>
			<div class="row">
				<div class="col-md-6">
					
					<input type="text" placeholder="Fullname" class="form-control">
					
					<input type="email" placeholder="Email ID" class="form-control">
				</div>
				<div class="col-md-6">
					
					<input type="date" placeholder="Date of Birth" class="form-control">
					
					<input type="password" placeholder="Password" class="form-control">
					
				</div>
					
					<textarea class="form-control" rows="6"> Type your address </textarea>
			</div>
		</div>
	</div>
</div>


<!-- end of contact us section -->


<!-- footer section -->
<div class="bg-theme" style="margin-top: 100px" id="footer">
<div class="container">
	<div class="row mt-5">
		<div class="col-md-3">
			<h4> GET IN TOUCH </h4>
 <i class="bi bi-geo-alt-fill"></i> Headquaters - seoul,south korea <br>

 <i class="bi bi-telephone-fill"></i> +91 - 8087174347 <br>

 <i class="bi bi-envelope-arrow-down-fill"></i> valorentesports@gmail.com
		</div>

		<div class="col-md-3">
			<h4> IMPORTANT LINKS </h4>
			<ul>
				<li> <a href=""></a>Youtube </li>
				<li>  <a href=""></a>Twitch  </li>
				<li>  <a href=""></a>Rooter  </li>
				<li>  <a href=""></a>Instagram  </li>
				<li>  <a href=""></a>Loco  </li>
			</ul>

		</div>

		

		
	

<!-- end of footer section -->




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>