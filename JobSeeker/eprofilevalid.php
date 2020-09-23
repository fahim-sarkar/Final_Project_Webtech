<?php
	require_once('function.php');

	

	//edit new user
	if(isset($_POST['update'])){
		$name 	= 	$_POST['name'];
		$username 		= 	$_POST['username'];
		$email	=	$_POST['email'];
		$password 	= 	$_POST['password'];
		


		if(empty($name) || empty($username) || empty($email) || empty($password)){
			header('location: /edit_profile.php?username='.$username);
		}else{
			$user = [
				'name'		=> $name,
				'username'	=> $username,
				'email'		=> $email,
				'password'	=> $password
				


			];

			$status = AdminInfoUpdate($user);
			if($status){
				header('location: /profile.php?msg=success');
			}else{
				header('location: /edit_profile.php?msg=error');
			}
		}	
	}
?>