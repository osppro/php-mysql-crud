<?php 
include 'config.php';

//inserting records.. .
if (isset($_POST['add_btn'])) {
	trim(extract($_POST));
	//`id`, `fname`, `lname`, `phone`
	$sql = dbCreate("INSERT INTO crudapp VALUES (NULL,'$firstname','$lastname','$phone') ");
	if ($sql == 1) {
		$_SESSION['status'] = '<div class="alert alert-success text-center">User inserted successfully!</div>';
	}else{
		$_SESSION['status'] = '<div class="alert alert-danger text-center">User adding failed!</div>';
	}
}


?>