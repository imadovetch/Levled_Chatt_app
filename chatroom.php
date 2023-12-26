
<?php 
					session_start();
					if(!isset($_SESSION['user'])) {
						header("location: index.php");
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

	$array = ['houwa'=>$_SESSION['user'],
				'users'=> $users,
				'messagat' => $chatrooms,
				];
	
	// var_dump($array);
	echo json_encode($array);
	?>
