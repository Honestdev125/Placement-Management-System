﻿<?php
session_start();
if(isset($_SESSION['reset']))
{
	
} else
  header("location: Forgot Password.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
      <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="css/style.css">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>HOD-Reset Password</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
        <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Reset Password</h1>
	        </header>
	        <form action="rs1.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="text" name="USN" class="form-control" placeholder="Username" >           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" name="PASSWORD" class="form-control" placeholder="New Password" >           
		          	</div>	
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" name="repassword" class="form-control" placeholder="Retype Password" >           
		          	</div>	
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Reset Password</button>
				</div>
	        </form>
		</div>
		
			<!--footer-->
		<div class="footer">
			<div class="container">
				<div class="col-md-3 ftr_navi ftr">
					<h3>NAVIGATION</h3>
					<ul>
						<li>
							<a href="../../Homepage/index.php">Home</a>
						</li>
						<li>
							<a href="../SProfile/login.php">Student Login</a>
						</li>
						<li>
							<a href="../PProfile/login.php">Placement Login</a>
						</li>
						<li>
							<a href="../HODProfile/login.php">HOD Login</a>
						</li>
						<li>
							<a href="../PriProfile/login.php">Administrative Login</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 ftr_navi ftr">
					<h3>MEMBERS</h3>
					<ul>
						<li>
							<a href="#">Customer Support</a>
						</li>
						<li>
							<a href="#">Placement Support</a>
						</li>
						<li>
							<a href="#">Faculty Support</a>
						</li>
						<li>
							<a href="#">Registered Companies</a>
						</li>
						<li>
							<a href="#">Training</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 get_in_touch ftr">
					<h3>GET IN TOUCH</h3>
					<p>NH4, Herur</p>
					<p>Gubbi, Tumkur, India</p>
					<p>08138-223818/223365</p>
					<a href="mailto:cittumkur@rediffmail.com">cittumkur@rediffmail.com</a>
				</div>
				<div class="col-md-3 ftr-logo">
					<p>Copyright &copy; 2015 CIT-PMS | Developed by
              <a href="http://znumerique.azurewebsites.net" target="_parent">ZNumerique Technologies</a></p>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
	</body>
</html>