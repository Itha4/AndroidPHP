<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){
	if(
		isset($_POST['username']) and
			isset($_POST['email']) and
				isset($_POST['password'])){
			$db = new DbOperation();

			if($db->createUser(
				$_POST['username'],
				$_POST['password'],
				$_POST['email']
			)){
	$response['error'] =  false;
	$response['message'] = "User registered successfully";
			}else{
				$response['error'] =  true;
	$response['message'] = "Some error occured.please try again";
			}
			


		}else{
		$response['error'] =  true;
		$response['message'] = "Required fields are missing";
		}

}else{
	$response['error'] =  true;
	$response['message'] = "Invalid Request";
}
echo json_encode($response);