<?php
include "C:/xampp/htdocs/chat_app/Back_end/start/models/Modelusers.php";
if($_SERVER['REQUEST_METHOD'] === "POST"){
    
    if ($data !== null) {
       
        
        var_dump($data);
        if($data['idsender'] != $data['idreceiver']){
            $roomid =  $users->Insert("friends", ["user_id" => $data["idsender"], "friend_id" => $data["idreceiver"]]);
        }
        http_response_code(200); 
        

    } else {
        
        echo "Failed to decode JSON data";
    }


}else{
    echo "no perm";
}


?>