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
    <title>Welcome To Doctor Patient Portal</title>

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
	<h2 style="position:absolute;"><a href="#ab" data-toggle="collapse">Welcome To Doctor Patient Portal</h2></a>
	<div style="position:absolute; margin-top:15%;" class="collapse" id="ab">
	<div style="width:100%; margin-top:-10%;" class="row">
	<div class="col-md-6">
	<div style="text-align:justify; opacity:0.8" class="well">
	<font size="8px"><b>P</b></font>atient portals are secure, convenient online tools that help you to manage and keep track of you and your family’s and whanau's health 24/7.
	Use it to book appointments, access your appointments history,  You can even book advance appointments for next 5 days.
	It’s safe, easy to use and a great way to keep tabs on your health whenever you need to.
	VIEW YOUR HEALTH RECORDS SECURELY ONLINE WITH YOUR PATIENT PORTAL.
	The easy way to keep up to date with your health information.
	</div>
</div>
<div class="col-md-6">
<img style="margin-left:10%;float:left; margin-top:-5%;opacity:0.8;" width="270px"  src="img/logom.png"/>
</div>
</div>
</div>
	<img style="margin-top:0.0%;"  class="dppbanner" src="img/220356.jpg"/>
	<div style="margin-left:-1.3%; width:102.7%; float:left; border-radius:0em;" class="jb jumbotron">
	<p>&nbsp;</p>
	<div style="margin-top:-7%;" class="row">
	<div class="col-md-4">
	<div style="margin-left:-12%; width:115%; float:left;" class="panel panel-primary">
  <div class="panel-heading"><span class="glyphicon glyphicon-cloud"></span> Services</div>
  <div class="panel-body">
    <div style="font-family:calibri;" class="list-group">
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-cloud"></span>&nbsp;&nbsp;
  <a class="aa" href="doclist.php">Get Quick Doctor List</a></button>
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-cloud"></span>&nbsp;&nbsp;Make Appointments Quickly</button>
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-cloud"></span>&nbsp;&nbsp;
   <a class="aa" href="doclist.php">Only Verified Doctor Here</a></button>
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-cloud"></span>&nbsp;&nbsp;All Types of doctor available</button>
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-cloud"></span>&nbsp;&nbsp;Message System Between Doctor Patient</button>
</div>
  </div>
</div>
</div>

<div class="col-md-4">
<div style="margin-left:-2%; width:110%; float:left;" class="panel panel-primary">
  <div class="panel-heading"><span class="glyphicon glyphicon-ok-sign"></span> Benifits</div>
  <div class="panel-body">
    <div style="font-family:calibri;" class="list-group">
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;&nbsp;No need to wait in line for appointment</button>
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;&nbsp;Manage Appointment in your own Dashboard</button>
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;&nbsp;Personal Message System</button>
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;&nbsp;One Step to fill Appointment Form</button>
  <button type="button" class="list-group-item"><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;&nbsp;Manage your profile and more..</button>
</div>
  </div>
</div>
</div>

<div class="col-md-4">
<div style="margin-left:3%; width:110%; float:left;" class="panel panel-primary">
  <div class="panel-heading"><span class="glyphicon glyphicon-comment"></span> Testimonials</div>
  <div class="panel-body">
<?php
$q = "SELECT feed,pid FROM feedback AS feed ORDER BY RAND() LIMIT 1";
$rr = mysqli_query($con,$q);
$res = mysqli_fetch_array($rr);
$p = $res['feed'];
$d = $res['pid'];

if($res == ""){
	echo "No feedback given yet";
}
elseif($p && $d !=""){
$qq = "select * from patient where pid='$d' ";


$rq = mysqli_query($con,$qq);

while($row = mysqli_fetch_array($rq)){
	$na = $row['name'];
	$adr = $row['adharno'];
}

$dir = "patient/".$adr."/img/";
$open = opendir($dir);

	while(($files = readdir($open)) != FALSE){
	if($files!="."&&$files!=".."&&$files !="Thumbs.db"){
		echo "<div style='font-family:calibri' class='well'><img id='hello' style='margin-top:2%; border-radius:6em;' width='50' height='50'  src='$dir/$files'> Given By <b>$na</b>";
	}
	
	
	}

echo "<br><br>$p</div>";
}
?>
  </div>
</div>
</div>
	</div>
	<div style="font-family:calibri; font-size:14px; text-align:center;" id="static">
	<?php
	include('includes/conn.php');
	$q = "SELECT COUNT(*) as cnt FROM doctor WHERE status='success'";
	$r = mysqli_query($con,$q);
	$res = mysqli_fetch_array($r);
	$doc = $res ['cnt'];
	
	$q1 = "SELECT COUNT(*) as cnt FROM patient";
	$r1 = mysqli_query($con,$q1);
	$res2 = mysqli_fetch_array($r1);
	$pat = $res2 ['cnt'];
	
	$q3 = "SELECT COUNT(*) as cnt FROM appointments";
	$r2 = mysqli_query($con,$q3);
	$res = mysqli_fetch_array($r2);
	$pen = $res ['cnt'];
	?>
	<b>Total Verified Doctor <span class="badge"><?php echo $doc;?></span> |&nbsp; Total Patient Registered  <span class="badge"><?php echo $pat;?></span> |&nbsp; Total Appointments  <span class="badge"><?php echo $pen;?></span> |</b>
	</div>
	</div>
	<div style="width:102.5%; margin-left:-1.2%;margin-top:-5%;" class="container footer"><center>&copy; 2023 | All Rights Reserved | Themed By <a style="color:white; cursor:pointer; target=_blank" href="https://www.linkedin.com/in/vaishali-patil-salunke/">@vaishali</a> |
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
	
<?php include "profilemodels.php"?>
	



<script>
function rset() {
    document.getElementById("form1").reset();
}

function rrset() {
    document.getElementById("form2").reset();
}

function letters(input) {
    var regex = /[^ a-z]/gi;
    input.value = input.value.replace(regex, "");
}
</script>


  </body>
</html>