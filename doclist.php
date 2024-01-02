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
    <title>Doctor List -  Doctor Patient Portal</title>

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
	<div style="box-shadow:2px 2px 5px grey; margin-top:-3%;" class="alert alert-success">
	<span style="color:#059216; font-size:16px;" class="glyphicon glyphicon-ok-circle" ></span> 
	Here is our verified doctor list
	</div>
<?php 
 $qr = "SELECT * FROM doctor where status='success' AND availability='Available' ";
 $r = mysqli_query($con,$qr);
 
foreach($r as $row){
	 $did = $row['did'];
	 $docnam = $row['name'];
	 $spcl = $row['specialist'];
	 $docid = $row['docid'];
	 $avbl = $row['availability'];
	 $add = $row['address'];
	 
	 ?>
	 <div style="box-shadow:3px 3px 5px grey;" class="well">
	 <table border="0" width="1000px" cellspacing="0">
	 <tr>
	 <td align="center"><?php 
	 $dir = "doctor/".$docid."/img/";
	 $open = opendir($dir);
	 while(($files = readdir($open)) != FALSE){
	 if($files!="."&&$files!=".."&&$files !="Thumbs.db"){
		echo "<img class='imgs2' style='border-radius:5em; padding:5px;' width='70px' title='$docnam' src='$dir/$files'/><br/>";
	
		}
	 }?>
	 <font style="font-family:calibri;"><b><?php echo $docnam;?></b></font><br>
	 <i><font style="font-size: 15px; font-family:calibri"><?php echo $spcl;?></i></font>
	 <br>
	 <a href="#feedbox<?php echo $row['did'];?>" data-toggle="modal">• View Feedback</a>
	 
	 <div class="modal fade" id="feedbox<?php echo $row['did'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	 
  <div style="width:70%" class="modal-dialog" role="document">
    <div class="modal-content">
	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">View Feedbacks for <?php echo "Dr.$docnam";?></h4><br>
		<?php
	$fq = "SELECT * FROM feedback where did = '$did' ";
	$fres = mysqli_query($con,$fq);
	while($frow = mysqli_fetch_assoc($fres)){
		$fpid = $frow['pid'];
		$feed = $frow ['feed'];
		$dt = $frow['dt'];
		
		$date = date("d-M-Y", strtotime($dt));
		$fp = "SELECT * FROM patient where pid ='$fpid'";
		$fpres = mysqli_query($con,$fp);
		
		while($fprow = mysqli_fetch_assoc($fpres)){
			$name = $fprow['name'];
			$adrid = $fprow['adharno'];
			?>
			<div style="text-align:justify" class="well">
				<?php
	$dir = "patient/".$adrid."/img/";
	$open = opendir($dir);

	while(($files = readdir($open)) != FALSE){
	if($files!="."&&$files!=".."&&$files !="Thumbs.db"){
		echo "
		<img style=border-radius:6em;' width='38' height='38' title='$name' src='$dir/$files'>&nbsp;&nbsp;Given by <b>$name</b> on <font style='font-family:calibri'>$date</font><br><br>  ";
	}
	
	
	}
	?>
			<font style="font-family:calibri;"><?php echo "$feed";?></font>
			</div>
			<?php
		}
	}
	?>
      </div>
</div>
</div>
</div>

</td>
	 <td style="background:#FFFFBE; border-radius:0.5em; padding:5px; width:18%;font-family:calibri" align="center"><?php echo $add;?></td>
	 <td align="center"><font style="font-size:14px; font-family:calibri">Status</font>  <br><b><font style="color:green;font-size:16px; font-family:calibri"><?php echo $avbl;?></font></b></td>
	 <td align="center">
	 <?php
	 if(!isset($_SESSION['useremail'])){
	 ?>
	 <button data-toggle="modal" data-target="#login" style="background-color:#059216; border-radius:2em;" class="btn btn-success">
	 +</button>
	 <?php }else{
		?>
		<form action="makeap.php" method="POST">
		<input type="hidden" name="getdid" value="<?php echo $did;?>"/>
		<input style="background-color:#059216; border-radius:2em;" class="btn btn-success" type="submit" name="btn_sub" value="+"/>
		</form></td>
		<td style="width:25%;" align="center">
		
		<form id="myForm" action="feed.php" method="POST">
		<input type="hidden" name="pid" value="<?php echo $pid;?>"/>
		<input type="hidden" name="did" value="<?php echo $did;?>"/>
		<textarea  rows="5" col="5" required name="postfeed" placeholder="Enter your feedback" class="form-control"></textarea>
		<input style="margin-top:2%;" type="submit" class="btn btn-primary" value="Submit" name="feed"/>
		</form>
		

		</td>
		<!--Appointment Form-->
	
<!--Apporintment form end-->
		<?php
	  } ?>
	  </tr>
	  </table>
    </div>
	 <?php
 }
 
?>
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