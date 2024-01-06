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
    <title>Contact us -  Doctor Patient Portal</title>

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
	<div style="box-shadow:2px 2px 5px grey; margin-top:-3%;" class="alert alert-info">
	<span style="color:#059216; font-size:16px;" class="glyphicon glyphicon-ok-circle" ></span> 
	We will try to reach you within 24hrs. Kindly input valid email than we cant contact you
	</div>
	<div class="well">
	<table align="center" border="0"  cellspacing="0" width="600px">
	<form action="" method="POST">
	<tr>
	<td>Email : </td>
	<td style="padding:5px"><input class="form-control" type="email" name="email"></td>
	</tr>
	<tr>
	<td >Subject:</td>
	<td style="padding:5px"><input class="form-control" type="text" name="sub"></td>
	</tr>
	<tr>
	<td>Message : </td>
	<td style="padding:5px"><textarea class="form-control" name="message" rows="10" cols="30"></textarea></td>
	</tr>
	<tr>
	<td align="center" colspan="2"><input class="btn btn-success" type="submit" name="submit" value="Submit"/></td>
	</tr>
	</form>
	<?php
	if(isset($_REQUEST['submit'])){
	$to = $_REQUEST['email'];
	$subject = $_REQUEST['sub'];
	$body = $_REQUEST['message'];
	$from = "ankitswonders@gmail.com";
	$headers = "From : $from";
	
	if($to && $subject && $body){
		mail($to,$subject,$body,$headers);
		echo "<center><div class='alert alert-success'>Your mail has been sent</div></center>";
	}else{
		
		echo "<center><div class='alert alert-danger'>Please fill all the fields !</div></center>";
		
	}
}
?>
	</table>
	</div>
	</div>
	<?php include "footer.php"?>
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
	

<?php if(isset($_SESSION['useremail'])){		
	include "profilemodels.php"; 
}?>
<!--feedback box-->


<script>
function rset() {
    document.getElementById("form1").reset();
}
</script>


  </body>
</html>