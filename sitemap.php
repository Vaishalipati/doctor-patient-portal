<?php include "check_user.php"?>
<!DOCTYPE html>
<html lang="en">
<noscript>
  <META HTTP-EQUIV="Refresh" CONTENT="0;URL=nojs.html">
</noscript>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sitemap -  Doctor Patient Portal</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="theme/home.css" rel="stylesheet">
	<link href="theme/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<br>
	<?php include "navbar.php"?>
	<div class="container">
	<div style="float:left; margin-left:-1.2%;width:102.5%;" class="jumbotron">
	
	<div class="si container-fluid"><span class="glyphicon glyphicon-map-marker"></span> Sitemap</div>
	<div class="row">
	<div style="font-family:Verdana;font-size:16px;" class="col-md-3 wholemap">
	<ul><li><a style="color:red;" href="index.php"><b>Home</b></a></li></ul>
	<ul><li><a style="color:red;" href="about.php"><b>About</b></a></li></ul>
	
	</div>
	
	<div style="font-family:Verdana;" class="col-md-3 wholemap">
	<ul><li><a style="font-size:16px; color:red;" href="patient.php"><b>Services (Patient)</b></a>
	
	
	<ul style="font-family:Verdana; color:black;font-size:15px;">
	<li>Dashboard
	
	<ul style="font-family:Verdana; font-size:12px;">
	<li>Manage Appointments</li>
	<li>Register Appointments</li>
	<li>Pay For Appointments</li>
	<li>Messenger</li>
	<li>Quick Doctor List</li>
	<li>Manage Profile</li>
	
	</ul>
	
	</li>
	
	</ul>
	
	
	
	</li></ul>
	
	</div>
	
	<div style="font-family:Verdana;" class="col-md-3 wholemap">
	<ul><li><a style="font-size:16px; color:red;" href="doctor.php"><b>Services (Doctor)</b></a>
	
	
	<ul style="font-family:Verdana; color:black;font-size:15px;">
	<li>Dashboard
	
	<ul style="font-family:Verdana; font-size:12px;">
	<li>View Todays/Upcoming Appointments</li>
	<li>Complete Appointments</li>
	<li>View Feedback (by patient)</li>
	<li>Messenger</li>
	
	
	<li>Manage Profile</li>
	
	</ul>
	
	</li>
	
	</ul>
	
	
	
	</li></ul>
	
	</div>
	
	<div style="font-size:16px; font-family:Verdana;" class="col-md-3 wholemap">
	<ul><li><a style="color:red;" href="contact.php"><b>Contact</b></a></li></ul>
	<ul><li><a style="color:red;" href="help.php"><b>Help</b></a></li></ul>
	</div>
	
	</div>
	</div>
	<?php include "footer.php"?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	
	<?php if(isset($_SESSION['useremail'])){
		
		include "profilemodels.php"; 
	 }?>


  </body>
</html>