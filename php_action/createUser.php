<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$userName 		= $_POST['userName'];
  $password 			= md5($_POST['password']);
  $email 			= $_POST['email'];

	
				$sql = "INSERT INTO users (username, password, email) 
				VALUES ('$userName', '$password' , '$email')";
				//echo $sql;exit;
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
					header('location:../users.php');
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}

				// /else	
		
	} // if in_array 		

	$connect->close();

	echo json_encode($valid);
 
