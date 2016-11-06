<?php
session_start();
if(isset($_POST['message'],$_POST['Event_id'],$_POST['password'])){
require_once 'include/DB_Functions.php';
$event_id=$_POST['Event_id'];
$message=$_POST['message'];
$password=$_POST['password'];
	if($password=='Controlz_16'){
		    $db = new DB_Functions();
		    $user=$db->updateNotification($message,$event_id);
		    if($user){
		$query=mysqli_query($con,"SELECT * FROM user_token");
		$query2=mysqli_query($con,"SELECT count(id) FROM user_token");
		$result=mysqli_fetch_array($query2);
		$count=0;
		while($array=mysqli_fetch_array($query)){
		  $makearray[$count]=$array['token'];
		  $count++;
		}
		$makearray=array_chunk($makearray,500);
		$count=count($makearray);
		$act=0;
		while($act<$count){
		$arraynew=$makearray[$act];
		if($db->gcmCall($event_id,$message,$arraynew,$count)){
		   echo "<script>window.open('http://172.16.34.160/Pearl%202k16/PORTAL/Controlz/send_notification.php','_self');</script>";
		  }
		  else{
		  	echo "<script>alert('Notification sent but not recieved by users');</script>";
		     echo "<script>window.open('http://172.16.34.160/Pearl%202k16/PORTAL/Controlz/send_notification.php','_self');</script>";
		  }
		$act++;
		}
	}
	else{
		echo "<script>alert('Notification not sent');</script>";
	}
	}
	else{
	  echo '<script>alert("Password Incorrect");</script>';
	}
}
else{
echo 'hahah';
}
?>