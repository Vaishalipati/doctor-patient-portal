<?php if($type=="doc"){?>
<!--Doctor Profile tab start-->
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
	<p align="center" style="font-family:calibri; margin-top:-18%;"><?php echo "&nbsp;&nbsp;&nbsp;<b>ID : $docid</b>";?></p>
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
<!--Doctor profile tab end-->
<?php } ?>



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