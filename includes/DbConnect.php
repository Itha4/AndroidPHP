<?php

class DbConnect{

	private $con;

	function_construct(){

	}

	function connect(){
	include_once dirname(_FILE_).'/Constants.php';
	$this-> con = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	if(mysqli_connect_errno){
	echo "failed to connect with database".mysqli_connect_err();
	}
	return $this->con;
	
	}
}