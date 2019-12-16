<?php

$conn = mysqli_connect("localhost","root","","learn2pentest");


$reg_username = $_POST['reg_username'];
$reg_password = $_POST['reg_password'];
$reg_password_confirm = $_POST['reg_password_confirm'];
$reg_email = $_POST['reg_email'];
$reg_fullname = $_POST['reg_fullname'];

$sql = "INSERT INTO usr_profiles
(reg_username, reg_password, reg_password_confirm, reg_email, reg_fullname) VALUES 
('$reg_username', '$reg_password', '$reg_password_confirm', '$reg_email', '$reg_fullname')";

$result = mysqli_query($conn,$sql);

?>

<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  
	.sidenav {
	  height: 100%;
	  width: 160px;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
	  overflow-x: hidden;
	  padding-top: 20px;
	}

	.sidenav a {
	  padding: 6px 8px 6px 16px;
	  text-decoration: none;
	  font-size: 25px;
	  color: #818181;
	  display: block;
	}

	.sidenav a:hover {
	  color: #f1f1f1;
	}

	.main {
	  margin-left: 160px; /* Same as the width of the sidenav */
	  font-size: 28px; /* Increased text to enable scrolling */
	  padding: 0px 10px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	
</style>
</head>
<body>

	<!-- Side navigation bar -->
	<div class="sidenav">
	  <a href=""></a>
	  <a href=""></a>
	  <a href=""></a>
	  <a href="Signup.html">Lectures</a>
	  <a href="Signup.html">Labs</a>
	  <a href="Signup.html">Tutorials</a>
	</div>


	<!-- Banner text -->
	<div class="jumbotron text-center" style="margin-bottom:0">
	  <h1>Learn2Pentest</h1>
	  <p>The only learning envirnoment with built in Kali-Linux functionality!</p>
	</div>


	<!-- Navigation Bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
	  <a class="navbar-brand" href="#">InsertIcon</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		
		<li class="nav-item">
			<a class="nav-link" href="Main.html">Home</a>
		</li>
		  
		<li class="nav-item">
			<a class="nav-link" href="Signup.html">Forum</a>
		</li>
		  
		<li class="nav-item">
			<a class="nav-link" href="Signup.html">Kali Connect</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="Signup.html">Profile</a>
		</li>
		</ul>
		<ul class="navbar-nav justify-content-end">
		
		<li class="nav-item active">
		  <a class="nav-link" href="#">Login</a>
		</li>
		
		<li class="nav-item">
		  <a href="signup.html" class="nav-link active">Sign Up</a>
		</li>
		</ul>
	  </div>
	</nav
</body>
</html>
	