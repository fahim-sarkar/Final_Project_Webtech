<?php
	function AdminInfoUpdate($user){
		$con = DBconnect();
		$sql = "update jobseeker_reg set name='{$user['name']}', username='{$user['username']}', email='{$user['email']}', password='{$user['password']}' where username='username'";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	?>