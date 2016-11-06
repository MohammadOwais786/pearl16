<?php
$conn =  mysqli_connect('bits-su.com','dbpearl','dotapearl2015','pearl_15');
$Pearl_id = "1";
$name = "harsh";
$college = "bits";
$city = "pat";
$phone = "9010";
$email = "velly";

$query = "insert into reg_16 (P_Id,name,college,city,phone,email) values ('$Pearl_id','$name','$college','$city','$phone','$email')";
mysqli_query($conn,$query);

$to = $email;
$subject = "ARENA Registration";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@bits-arena.com>' . "\r\n";
$message = "Thanks for registering. Your Arena id is ".$Pearl_id;
mail($to,$subject,$message,$headers);

$p ="1";
echo $p;

?>