<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$jsonData = file_get_contents("php://input");


if (!empty($jsonData)) {

    $data = json_decode($jsonData, true);
	$finaldata = json_decode($data);
}else{
	echo json_encode(['message' => 'TOKEN MAWSLNICH FL BACK']);
}
					
					
					require("db/users.php");
					require("db/chatrooms.php");
					// var_dump( $_SESSION['user']);
					$objChatroom = new chatrooms;
					$chatrooms   = $objChatroom->getAllChatRooms();

					$objUser = new users;
					$users   = $objUser->getAllUsers();
				 ?>
				
	<?php

	$array = ['houwa'=>$finaldata,
				'users'=> $users,
				'messagat' => $chatrooms,
				];
	
	// var_dump($array);
	echo json_encode($array);
	?>
