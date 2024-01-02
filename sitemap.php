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
	<div style="width:102.5%; margin-left:-1.2%;margin-top:-5%;" class="container footer"><center>&copy; 2023 | All Rights Reserved | Themed By <a style="color:white; cursor:pointer; target=_blank" href="https://www.linkedin.com/in/vaishali-patil-salunke/">@vaishali</a> ||
	<a style="color:white;" href="sitemap.php">Sitemap</a></center></div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!--Login Form-->
	<div  class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background:#005173; color:white;" class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:white;" aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Login Form Portal</h4>
      </div>
      <div class="modal-body">
	  <br>
        <form action="" name="lfrom" method="POST">
		<div class="input-group">
		<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope"></span></span>
		<input type="email" class="form-control" required name="useremail" placeholder="Enter your email" aria-describedby="sizing-addon2">
		</div><br>
		<div class="input-group">
		<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
		<input type="password" required class="form-control" name="userpass" placeholder="Enter your password" aria-describedby="sizing-addon2">
		</div>
		<div class="modal-footer">
        <center><input type="submit" value="Login" name="btn_login" class="btn btn-success"></center>
      </div>
		</form>
      </div>
    </div>
  </div>
</div>
<!--Login form end-->

<!--Register Form-->
	<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div style="background:#005173; color:white;" class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:white;" aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel2"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Register to Portal</h4>
      </div>
	  <div class="modal-body">
       
		<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#patient" aria-controls="patient" role="tab" data-toggle="tab">
		<span class="glyphicon glyphicon-user"></span> Patient</a></li>
		<li role="presentation"><a href="#doctor" aria-controls="doctor" role="tab" data-toggle="tab">
		<span class="glyphicon glyphicon-education"></span> Doctor</a></li>
		</ul>
	   <div class="tab-content">
		<!--Patient Registration-->
		<div role="tabpanel" class="tab-pane fade in active" id="patient">
		<br>
		<form method="POST" action="dp.php" ENCTYPE="multipart/form-data" action="" id="form1">
       <input type="text" name="pname" class="form-control" onkeyup="letters(this)" required placeholder="Enter your name"><br>
       <input type="email" name="pemail" class="form-control" required placeholder="Enter your email"><br>
       <input type="number" name="p_age" class="form-control" required placeholder="Enter your age"><br>
       <input type="password" name="p_password" class="form-control" required placeholder="Enter your password"><br>
	   <input type="text" name="adridpt" class="form-control" required placeholder="Enter your Aadhar ID"><br>
       <input type="text" name="paddress" class="form-control" required placeholder="Enter your address"><br>
	   
	   <label>Gender : </label>
	   <input type="radio" value="Male" name="pgender" required> Male 
	   <input type="radio" value="Female" name="pgender" required> Female <br></br>
		<div class="input-group form-group ">
		<span class="input-group-addon">+91</span>
		<input type="number" name="p_phone" class="form-control" id="user" maxlength="10"  placeholder="Enter your contact no." required >
		</div>
		<label>Your Picture</label>
		<input type="file" class="form-control" required name="pupload"/><br>

		<center><input type="submit" value="Register" name="btn_pat" class="btn btn-danger">
		<input type="button" value="Reset" onclick="rset()" class="btn btn-warning"></center>
		</form>
		
		</div>
		<!--Doctor Registration-->
		<div role="tabpanel" class="tab-pane fade" id="doctor">
		<br>
		 <form ENCTYPE="multipart/form-data" method="POST" action="dp.php" id="form2">
       <input type="text" name="name" class="form-control" onkeyup="letters(this)" required placeholder="Enter your name"><br>
       <input type="email" name="email" class="form-control" required placeholder="Enter your email"><br>
       <input type="number" name="age" class="form-control" required placeholder="Enter your age"><br>
       <input type="password" name="password" class="form-control" required placeholder="Enter your password"><br>
       <input type="text" name="address" class="form-control" required placeholder="Enter your address"><br>
	   <label>Gender : </label>
	   <input type="radio" value="Male" name="gender" required> Male 
	   <input type="radio" value="Female" name="gender" required> Female <br></br>
	   <input type="text" name="docid" class="form-control" required placeholder="Enter your Doctor ID"><br>
		<input type="text" name="adrid" class="form-control" required placeholder="Enter your Aadhar ID"><br>
		<label>Specialist in : </label>
		<select style="color:solid #ccc; border-radius:0.2em; padding:5px;" name="doccat">
		<option>Choose</option>
		<option value="Denitst">Denitst</option>
		<option value="Cardiologist">Cardiologist</option>
		<option value="Allergist">Allergist</option>
		<option value="Physcit">Physcit</option>
		<option value="Gynoclogist">Gyncologist</option>
		</select><sup style="color:red;"> *Required</sup><br></br>
		<div class="input-group form-group ">
		<span class="input-group-addon">+91</span>
		<input type="number" name="phone" class="form-control" id="user" maxlength="10"  placeholder="Enter your contact no." required >
		</div>
		<label data-toggle="tooltip" data-placement="right" title="PDF File Supported Only">Upload Your ID*</label>
		<input type="file" class="form-control" name="file" required /><br>
		<label>Your Picture</label>
		<input type="file" class="form-control" required name="newpic"/><br>
		<center><input type="submit" value="Register" name="btn_doc" class="btn btn-danger">
		<input type="button" value="Reset" onclick="rrset()" class="btn btn-warning"></center>
		</form>
		
		</div>
	</div>
		</div>
		
		
     
		
		
			 </div>
  </div>
</div>


<div  class="modal fade" id="ap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background:#005173; color:white;" class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:white;" aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Login Form Portal</h4>
      </div>
      <div class="modal-body">
	  <br>
        <form action="" name="lfrom" method="POST">
		<div class="input-group">
		<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope"></span></span>
		<input type="email" class="form-control" required name="useremail" placeholder="Enter your email" aria-describedby="sizing-addon2">
		</div><br>
		<div class="input-group">
		<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
		<input type="password" required class="form-control" name="userpass" placeholder="Enter your password" aria-describedby="sizing-addon2">
		</div>
		<div class="modal-footer">
        <center><input type="submit" value="Login" name="btn_login" class="btn btn-success"></center>
      </div>
		</form>
      </div>
    </div>
  </div>
</div>
<!--Login form end-->

<!--Profile tab start-->
	<div class="modal fade" id="profiletab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div style="width:35%; border-radius:0em;" class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background:#005173; height:35px; color:white;" class="modal-header">
        <button style="margin-top:-1.5%;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:white;" aria-hidden="true">&times;</span></button>
        <h5 style="font-family:calibri; margin-top:-1.5%;" class="modal-title" id="myModalLabel"><b><?php echo "#$id $user";?></b></h5>
      </div>
      <div style="border-bottom-left-radius:0px;" class="modal-body">
	  
       <div class="row">
		
		<div class="col-md-4">
		<?php
	$dir = "doctor/".$docid."/img/";
	$open = opendir($dir);

	while(($files = readdir($open)) != FALSE){
	if($files!="."&&$files!=".."&&$files !="Thumbs.db"){
		echo "<img id='hello' style='float:left; margin-left:15%; border-radius:6em;' width='100' height='100' title='$user' src='$dir/$files'>";
	}
	
	
	}
	?>
	<p align="center" style="font-family:calibri;">&nbsp;&nbsp;&nbsp;</p>
	<p align="center" style="font-family:calibri; margin-top:-18%;"><?php echo "&nbsp;&nbsp;&nbsp;<b>ID : $docpd</b>";?></p>
		</div>
		<div class="col-md-4">
		<img src="img/line.png"/>
		</div>
		
		<div class="col-md-4">
		<div style="font-family:calibri; float:left;margin-left:-70%;">
		<label>Name  </label>&nbsp;&nbsp; : <?php echo $user;?><br>
		<label>Email </label>&nbsp;&nbsp; : <?php echo $email;?><br>
		<label>Phone </label>&nbsp;:  <?php echo "+91-$phone";?><br>
		<label>Gender   </label>&nbsp;:&nbsp;<?php echo $sex;?><br>
		<label>Age   </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;<?php echo $age;?><br>
		
		</div>
		</div>
		
		</div>
		
      </div>
    </div>
  </div>
</div>
<!--profile tab end-->

<!--patient Profile tab start-->
	<div class="modal fade" id="profiletab2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div style="width:35%; border-radius:0em;" class="modal-dialog" role="document">
    <div class="modal-content">
      <div style="background:#005173; height:35px; color:white;" class="modal-header">
        <button style="margin-top:-1.5%;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:white;" aria-hidden="true">&times;</span></button>
        <h5 style="font-family:calibri; margin-top:-1.5%;" class="modal-title" id="myModalLabel"><b><?php echo "#$patid $user";?></b></h5>
      </div>
      <div style="border-bottom-left-radius:0px;" class="modal-body">
	  
       <div class="row">
		
		<div class="col-md-4">
		<?php
	$dir = "patient/".$adrid."/img/";
	$open = opendir($dir);

	while(($files = readdir($open)) != FALSE){
	if($files!="."&&$files!=".."&&$files !="Thumbs.db"){
		echo "<img id='hello' style='float:left; margin-left:15%; border-radius:6em;' width='100' height='100' title='$user' src='$dir/$files'>";
	}
	
	
	}
	?>
	<p align="center" style="font-family:calibri;">&nbsp;&nbsp;&nbsp;</p>
	<p align="center" style="font-family:calibri; margin-top:-18%;"><?php echo "&nbsp;&nbsp;&nbsp;<b>A. ID : $adrid</b>";?></p>	</div>
		<div class="col-md-4">
		<img src="img/line.png"/>
		</div>
		
		<div class="col-md-4">
		<div style="font-family:calibri; float:left;margin-left:-70%;">
		<label>Name  </label>&nbsp;&nbsp; : <?php echo $user;?><br>
		<label>Email </label>&nbsp;&nbsp; : <?php echo $emailp;?><br>
		<label>Phone </label>&nbsp;:  <?php echo "+91-$mob";?><br>
		<label>Gender   </label>&nbsp;:&nbsp;<?php echo $sexp;?><br>
		<label>Age   </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;<?php echo $agep;?><br>
		
		</div>
		</div>
		
		</div>
		
      </div>
    </div>
  </div>
</div>
<!--patint profile tab end-->

<!--feedback box-->


<script>
function rset() {
    document.getElementById("form1").reset();
}
</script>


  </body>
</html>