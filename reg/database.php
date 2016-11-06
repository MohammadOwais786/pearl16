<?php
$conn =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');


$name = $_POST['name'];
$college = $_POST['college'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "select Sno from reg_16 where Sno = (select MAX(Sno) from reg_16)";
$result = mysqli_query($conn,$sql);

$row = $result->fetch_assoc();
$Pearl_id = "PL".$row['Sno'];



$query = "insert into reg_16 (P_Id,name,college,city,phone,email) values ('$Pearl_id','$name','$college','$city','$phone','$email')";
mysqli_query($conn,$query);

$to = $email;
$subject = "Pearl Registration";
$headers  = "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: Pearl <info@bits-pearl.com>\r\n";


$message = "Thanks for registering. Your Pearl id is ".$Pearl_id;
mail($to,$subject,$message,$headers);


$p ="1";
echo $p;

?>