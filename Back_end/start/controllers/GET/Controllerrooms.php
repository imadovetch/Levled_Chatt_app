<?php
include "C:/xampp/htdocs/chat_app/Back_end/start/models/Modelrooms.php";

    
    
       
        
http_response_code(200);
       echo json_encode($rooms->selectAll("rooms"));
       
        

    





?>