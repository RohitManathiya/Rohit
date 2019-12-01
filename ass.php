<?php
 include_once 'condb.php';
 $query="select * from visitorinfo";

 $result=mysqli_query($con,$query);
?>
<html>
 <head>
  <style>
    .butt{
		background-color: #4CAF50;
       color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 10%;
	  opacity: 0.9;
	}
  </style>
  <h1>Fill this form Before Entry</h1>
 </head>
 <body>
  <form action="insert.php" method="POST">
  <h3>Visitor Details</h3><br><br>
   Enter Name     <br>     <input type="text" name="name"><br><br>
   Enter Email ID    <br>  <input type="email" name="email"><br><br>
   Enter Phone no    <br>  <input type="tel" name="phone" ><br><br>
   Enter CheckIN time <br> <input type="text" name="checkin"><br><br>
   Enter checkout time <br><input type="text" name="checkout"><br><br><br><br>
   <h3>Host Details</h3><br><br>
    Enter Name     <br><input type="text" name="hname"><br><br>
	 Enter Email ID   <br>  <input type="email" name="hemail"><br><br>
	 Enter Valid Phone no  <br> <input type="tel" name="htel"><br><br>
	 Enter Address<br> <input type="text" name="address"><br><br>
   <button  class="butt" type="submit" name="submit">Submit Deatails</button>
  </form>
  <br>
 
   
   <?php
    date_default_timezone_set('Australia/Melbourne');
    $current_time = date('h:i:s');
    $tocheck='04:00:00';
	if($current_time==$tocheck){
    while($row=mysqli_fetch_assoc($result)){
		$uname=$row['name'];
		$uemail=$row['email'];
		$uphone=$row['phoneNo'];
		$ucheckin=$row['checkin'];
		$ucheckout=$row['checkout'];
		$hostemail=$row['hostemail'];
		$hostname=$row['hostname'];
		$address=$row['address'];
		$to=$uemail;
		$subject='This is email department';
		$message='<h1> Hello </h1>';
		$message.=$uname."\r\n";
		$message.='phone no'.$uphone."\r\n";
		$message.='check-in time '.$ucheckin;
		$message.='check-out time '.$ucheckout;
		$message.='Address '.$address;
		$headers=$hostemail."\r\n";
		$headers.="Content-type: text/html\r\n";
		mail($to,$subject,$message,$headers);
		
	}
	}
   ?>
  </body>
</html>