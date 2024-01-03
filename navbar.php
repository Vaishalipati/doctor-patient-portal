<?php
	include('includes/conn.php');
	@$eml = $_SESSION['useremail'];
	$qry = "SELECT * FROM doctor where email = '$eml'";
	$qry2 = "SELECT * FROM patient where email = '$eml'";
	$qry3 = "SELECT * FROM admin where email = '$eml'";
	$h = mysqli_query($con, $qry);
	$h2 = mysqli_query($con, $qry2);
	$h3 = mysqli_query($con, $qry3);
	while($row = mysqli_fetch_assoc($h)){
		$id = $row['did'];
		$user = $row['name'];
		$type = $row['type'];
		$docid = $row['docid'];
		$age = $row['age'];
		$phone = $row['phone_number'];
		$email = $row['email'];
		$sex = $row['gender'];
	}
	while($row = mysqli_fetch_assoc($h2)){
		$user = $row['name'];
		$type = $row['type'];
		$patid = $row['pid'];
		$agep = $row['age'];
		$mob = $row['phone'];
		$sexp = $row['gender'];
		$adrid = $row['adharno'];
		$emailp = $row['email'];
	}
	while($row = mysqli_fetch_assoc($h3)){
		$user = $row['name'];
		$type = $row['type'];
	}
	?>

				
	<?php if(!isset($_SESSION['useremail'])){?>

    <div  style="padding:25px; border-top-left-radius:0.5em; border-top-right-radius:0.5em;" class="mainmenu container nav navbar-inverse" data-spy="affix" data-offset-top="100">
	<button type="button" style="background:#005173; border-color:#005173;" class="navbar-toggle" data-toggle="collapse" data-target="#coo">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand"><img width="85px" height="85px" style="margin-top:-38%;" title="Doctor Patient Portal" class="logomain" src="img/logom.png"/></a>
	<div class="collapse navbar-collapse" id="coo">
	
	
	<ul class="nav navbar-nav pull-right">
	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	<li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
	<li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
	<li><a href="help.php"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
	<li class="a"><a data-toggle="modal" data-target="#login" href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
	<li class="ar"><a data-toggle="modal" data-target="#register" href="#"><span class="glyphicon glyphicon-registration-mark"></span> Register</a></li>
	</ul>
	</div>
	
	</div><?php }else{
		?>
	 <div  style="padding:25px; border-top-left-radius:0.5em; border-top-right-radius:0.5em;" class="mainmenu container nav navbar-inverse" data-spy="affix" data-offset-top="100">
	<button style="border:0px;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#co">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand"><img width="85px" height="85px" style="margin-top:-38%;" title="Doctor Patient Portal" class="logomain" src="img/logom.png"/></a>
	
	<div id="co" class="collapse navbar-collapse">
	<ul class="nav navbar-nav pull-right">
	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	<li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
	<li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
	<li><a href="help.php"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
	<?php if($type=="doc"){?>
	<li class="a" ><a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Hi <?php echo $user?>
	<span class="caret"></span></a>
	<ul style="float:left; margin-left:-35%;" class="dropdown-menu">
    <li><a data-toggle="modal" href="#profiletab"><span class="glyphicon glyphicon-eye-open"></span> Your Profile</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="doctor.php"><span class="glyphicon glyphicon-th-list"></span> Your Dashboard</a></li>
	<li role="separator" class="divider"></li>
	 <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
  </ul>
	
	
	</li>
	<?php } ?>
	<?php if($type=="pat"){?>
	<li class="a" ><a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Hi <?php echo $user?>
	<span class="caret"></span></a>
	<ul style="float:left; margin-left:-35%;" class="dropdown-menu">
	<li><a href="doclist.php"><span class="glyphicon glyphicon-list-alt"></span> Quick Doctor List</a></li>
	<li role="separator" class="divider"></li>
    <li><a data-toggle="modal" href="#profiletab2"><span class="glyphicon glyphicon-eye-open"></span> Your Profile</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="patient.php"><span class="glyphicon glyphicon-th-list"></span> Your Dashboard</a></li>
	<li role="separator" class="divider"></li>
	 <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
  </ul>
	
	
	</li>
	<?php } ?>
	<?php if($type=="admin"){?>
	<li class="a" ><a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Hi <?php echo $user?>
	<span class="caret"></span></a>
	<ul style="float:left; margin-left:-35%;" class="dropdown-menu">
    <li><a href="adminpanel.php"><span class="glyphicon glyphicon-th-list"></span> Your Dashboard</a></li>
	<li role="separator" class="divider"></li>
	 <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
  </ul>
	
	
	</li>
	<?php } ?>
	</div>
	</ul>
	
	</div>

		<?php } ?>

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
	  <center><a style="font-family:calibri;" href="forgetpass.php">Forget Password?</a></center>
	  <center><input type="checkbox" name="remember"/> Remember me? </center>
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
