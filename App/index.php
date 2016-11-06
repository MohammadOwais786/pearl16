<?php

if (isset($_POST['tag']) && $_POST['tag'] != ''){
    // get tag
    $tag = $_POST['tag'];
    $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
    // include db handler
    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
 
    // response Array
    $response = array("tag" => $tag, "error" => FALSE);
    $response2 =array();
    $k= array();
if ($tag == 'getevents') {
        // Get all events
          $user = $db->getEvents();
            if ($user) {
                // got events successfully
                
            } else {
                // data not fetched
                $response["error"] = TRUE;
                $response["error_msg"] = "Error occured in fetching Events";
                echo json_encode($response);
            }
        }
    else  if ($tag == 'get_event_schedule') {
        // Getting Event Schedule
        $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
        $updated_at =$_POST['updated_at'];
                      
        // login user
            $user = $db->getSchedule($updated_at);
            if ($user) {
                // user credentials correct
                $response["error"] = FALSE;
                $response["data"] = $user;
            } else {
                // user failed to login
                $response["error"] = TRUE;
                $response["error_msg"] = "Error occured in getting updated Schedule!";
                
            }
            echo json_encode($response);
        }
    else  if ($tag == 'get_feed') {
        // Getting all feeds
        $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
        $updated_at = $_POST['updated_at'];
                      
        // login user
            $user = $db->getFeed($updated_at);
            if ($user) {
                // user credentials correct
            } else {
                // user failed to login
                $response["error"] = TRUE;
                $response["error_msg"] = "Error occured in fetching Feed!";
                echo json_encode($response);
            }
        }
        else  if ($tag == 'add_token') {
        // Adding GCm token
        $con =  mysqli_connect('bits-su.com','dbpearl','dotapearl15','pearl_15');
        $token = $_POST['token'];
                      
        // login user
            $user = $db->addToken($token);
            if ($user) {
                // user credentials correct
                $response["error"] = FALSE;
                $response["error_msg"] = "Successfully added toekn!";
            } else {
                // user failed to login
                $response["error"] = TRUE;
                $response["error_msg"] = "Error occured in adding Token!";
                
            }
            echo json_encode($response);
        }
        
    else{
        $response["error"] = TRUE;
    $response["error_msg"] = "Required time missing!";
    echo json_encode($response);
    }
}
 else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameter 'tag' is missing!";
    echo json_encode($response);
}
?>		