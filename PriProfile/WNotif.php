<?php
  session_start();
 if (isset($_SESSION['priusername'])){
  }
   else {
	   header("location: index.php");
   }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOD - Write Messages</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['priusername']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
           <ul>
          <li><a href="login.php" ><i class="fa fa-home fa-fw" class="active"></i>Dashboard</a></li>
            <li><a href="Students Eligibility.php"><i class="fa fa-bar-chart fa-fw"></i>Check Students Eligibility</a></li>
            <li><a href="Placement Drives.php"><i class="fa fa-database fa-fw"></i>Placement Drive Details</a></li>
            <li><a href="manage-users.php" ><i class="fa fa-users fa-fw"></i>Student Details</a></li>
            <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                   <li>
                  <a href="../../Homepage/index.php">Home CUSAT-SOE</a>
                </li>
                <li>
                  <a href="../../Drives/index.php">Drives Homepage</a>
                </li>
                <li>
                  <a href="Notif.php">Notification</a>
                </li>
                <li>
                  <a href="Change Password.php">Change Password</a>
                  </li>
              </ul>  
            </nav>
          </div>
        </div>
       <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Write Messages</h2>
            <p>Department Notifications to Students</p>
            <form action="WN.php" method="POST" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Subject:</label>
                    <textarea class="form-control" id="inputNote" rows="2" name="Subject"></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Message:</label>
                  <textarea name="Message" class="form-control" id="inputNote" rows="5"></textarea>
                </div>
              </div>
			  
             
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">POST</button>
                <button type="reset" class="templatemo-white-button">Clear</button>
              </div>  



	<center><label class="control-label" for="inputNote"><center><h2>OR</h2></center> <br/> <br/>To Upload an Image Click the Link below:</label><br/>
			   <br/>
			   <a href="upload.html" class="templatemo-blue-button">Post an Image</a></center>			    		  
            </form>
          </div>
          <footer class="text-right">
           		<p>Copyright &copy; 2018 CUSAT-SOE | Developed by
              <a href="http://znumerique.azurewebsites.net" target="_parent">HyperMine</a>
			  </p>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>
