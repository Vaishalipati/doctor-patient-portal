
<?php
session_start();
if(isset($_POST['btn_login'])){
$useremail = $_POST['useremail'];	
$userpass =  $_POST['userpass'];

include('includes/conn.php');

$q1 = "SELECT * FROM doctor where email = '$useremail'";
$q2 = "SELECT * FROM patient where email = '$useremail'";
$q3 = "SELECT * FROM admin where email = '$useremail'";

$r = mysqli_query($con, $q1);
$rr = mysqli_query($con, $q2);
$ad = mysqli_query($con, $q3);

if(mysqli_num_rows($r)>0){
	while($row = mysqli_fetch_assoc($r)){
		$dbname = $row['name'];
		$dbemail = $row['email'];
		$dbpass = $row['password'];
		$type = $row['type'];
	}
	if($useremail == $dbemail && $userpass == $dbpass){
		$_SESSION['useremail'] =$useremail;
		$_SESSION['userpass'] = $userpass;
		if($_POST['remember'] == 'on' ){
					$expire = time()+86400;
					setcookie('dpp', $_POST['useremail'], $expire);
				}
		header("location:doctor.php");
	}
	else
	{
		echo "<script>";
	echo "alert('Wrong Doctor Email or Password')";
	echo "</script>";
	}
	
}elseif(mysqli_num_rows($rr)>0){
	while($row = mysqli_fetch_assoc($rr)){
		$dbid = 	@$row['id'];
		$dbname = $row['name'];
		$dbemail = $row['email'];
		$dbpass = $row['password'];
		$type = $row['type'];
	}
	if($useremail == $dbemail && $userpass == $dbpass){
		$_SESSION['useremail'] =$useremail;
		$_SESSION['userpass'] = $userpass;
		$_SESSION['status'] = "Success";
		if($_POST['remember'] == 'on' ){
					$expire = time()+86400;
					setcookie('dpp', $_POST['useremail'], $expire);
				}
		header("location:patient.php");
	}
	else{
		echo "<script>";
	echo "alert('Wrong Patient Email or Password')";
	echo "</script>";
	}
}
elseif(mysqli_num_rows($ad)>0){
	while($row = mysqli_fetch_assoc($ad)){
		$dbname = $row['name'];
		$dbemail = $row['email'];
		$dbpass = $row['password'];
		}
		if($useremail == $dbemail && $userpass == $dbpass){
			$_SESSION['useremail'] = $useremail;
			$_SESSION['userpass'] = $userpass;
			$_SESSION['status'] = "Success";
			if($_POST['remember'] == 'on' ){
					$expire = time()+86400;
					setcookie('dpp', $_POST['useremail'], $expire);
				}
			header("location:adminpanel.php");
			
		}else{
			echo "<script>";
		echo "alert('Wrong Patient Email or Password')";
		echo "</script>";
		}
		
}



else{
	echo "<script>";
	echo "alert('Account not exist')";
	echo "</script>";
}

}
?>