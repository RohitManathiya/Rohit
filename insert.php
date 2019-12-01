<?php
    include_once 'condb.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phoneno=$_POST['phone'];
	date_default_timezone_set('Australia/Melbourne');
    $checkin = date('h:i:s');
	$hname=$_POST['hname'];
	$hemail=$_POST['hemail'];
	$hphoneno=$_POST['htel'];
	$address=$_POST['address'];
	
   $sql="insert into visitorinfo(name,email,phoneno,checkin,hostname,hostemail,hostphone,address) values('$name','$email',$phoneno,'$checkin','$hname','$hemail',$hphoneno,'$address');";
   mysqli_query($con,$sql);
   
   //now host get the visitor info 
        $to=$hemail;
		$subject='This is visitor info';
		$message.=$uname."\r\n";
		$message.='phone no'.$uphone."\r\n";
		$message.='check-in time '.$ucheckin;
		$message.='check-out time '.$ucheckout;
		$headers=$uemail."\r\n";
		$headers.="Content-type: text/html\r\n";
		mail($to,$subject,$message,$headers);
  
  // mysqli_num_rows($checkres);
    header("Location: ../ass.php?singup=succes");
   