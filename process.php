<?php session_start();
	include 'db.php';
	echo 'In';
	if(isset($_POST['login'])){
		echo 'Login';
		if(!empty($_POST['uname']) && !empty($_POST['psw']))
		{
				
			$get_user_name = mysqli_real_escape_string($conn,$_POST['uname']);
			$get_password = mysqli_real_escape_string($conn,$_POST['psw']);
			
			$sql = "SELECT * FROM user WHERE email = '$get_user_name' AND password = '$get_password'";
			if($result = mysqli_query($conn,$sql)){
			
				while($rows = mysqli_fetch_assoc($result)){
					if(mysqli_num_rows($result) != 0){
						$_SESSION['user'] = $get_user_name;
						$_SESSION['password'] = $get_password;
					
						header('Location:./index1.php');
					} else {
						header('Location:../index.php?login_error=wrong');
					}
				}
				
			}else {
				header('Location: ../index.php?login_error=query_error');
			}
		} 
	}
?>