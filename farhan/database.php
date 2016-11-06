<?php
$conn =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');


$name = $_POST['name'];
$phone = $_POST['phone'];


$query = "insert into farhan (name,phone) values ('$name','$phone')";
mysqli_query($conn,$query);



$p ="1";
echo $p;

?>