<?php
 $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
class DB_Functions {
    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        
      $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
    
     public function getEvents(){
         $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
        $getEvents=mysqli_query($con,"SELECT * FROM pearl_events");
        if ($getEvents) {
            // return user data
            $response=array();
            $i=0;
            while($result=mysqli_fetch_array($getEvents)){
            $response[$i]['event_id']=$result['event_id'];
            $response[$i]['event_name']=$result['event_name'];
            $response[$i]['paid']=$result['paid'];
             $i++;

            }
            echo json_encode($response);
            return true;
            

        } else {
            return false;
        }
    mysqli_close($con);
    }
    public function getSchedule($updated_at){
        $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
        $getEvents=mysqli_query($con,"SELECT * FROM event_details NATURAL JOIN pearl_events WHERE CAST(updated_at AS UNSIGNED) > $updated_at");
        if ($getEvents) {
            // return user data
            $response=array();
            $i=0;
            while($result=mysqli_fetch_array($getEvents)){
            $response[$i]['event_id']=$result['Event_id'];
           $response[$i]['round_name']=$result['Roundname'];
           $response[$i]['updated_at']=$result['updated_at'];
           $response[$i]['Event_venue']=$result['Event_venue'];
           $response[$i]['start_time']=$result['Event_date'];
           $response[$i]['event_name']=$result['event_name'];
           $response[$i]['id']=$result['id'];
             $i++;

            }
            return $response;
        } else {
            return false;
        }
    mysqli_close($con);
    }
    

public function gcmCall($event_id,$message,$arraynew,$count) {
     $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15'); 
     include_once 'GCMPushMessage.php';
    $apikey="AIzaSyC_blK8Z2MRgfsmIsSXIyEc4bn5Sl2UREQ";
    $gcm = new GCMPushMessage($apikey);
    $registration_ids = $arraynew;
    $message = array("message"=>$message,"event_id"=>$event_id);
    $gcm->setDevices($registration_ids);
    $result = $gcm->send($message);
        $act++;  
       
    $result= json_decode($result, true);
    if($result['success']>0){
        //delete entry          
     }
     else {
         //chat not added to GCM
            return false;
        }
     
mysqli_close( $con);
    }

public function addToken($token){
$con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
    $query=mysqli_query($con,"SELECT * FROM user_token WHERE token='$token'");
    $rows=mysqli_num_rows($query);
    if($rows==0){
     $result = mysqli_query($con,"INSERT INTO user_token(token) VALUES('$token')");
            // check for successful store
            if ($result) {
               return true;
            } else {
             //token not added
                return false;
            }
    }
    else{
        return true;
    }
    mysql_close( $con);
}
public function getFeed($updated_at){
        $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
        $getFeed=mysqli_query($con,"SELECT * FROM notifications  WHERE CAST(updated_at AS UNSIGNED) > $updated_at ORDER BY id DESC");
        if ($getFeed) {
            // return user data
            $response=array();
            $i=0;
            while($result=mysqli_fetch_array($getFeed)){
            $response[$i]['event_id']=$result['event_id'];
            $response[$i]['message']=$result['message'];
            $response[$i]['id']=$result['id'];
            $response[$i]['updated_at']=$result['updated_at'];
             $i++;

            }
            echo json_encode($response);
            return true;
        } else {
            return false;
        }
    mysqli_close($con);
    }
    public function updateNotification($message,$event_id){
        $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
        $time=Date('U');
        $addNotification=mysqli_query($con,"INSERT INTO notifications(event_id,message,updated_at) VALUES('$event_id','$message','$time')");
        if ($addNotification) {
            // return user data
            return true;
        } else {
            return false;
        }
    mysqli_close($con);
    }
}
?>