<?php
session_start(); 
$username = "";
$email = "";
$errors = array();
$db = mysqli_connect("localhost", "root", "", "nkdm");

if (isset($_POST['register'])) 
{
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['psw_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['psw_2']);

	if(empty($username))
	{
		array_push($errors, "Username is required");
	}

	if(empty($email))
	{
		array_push($errors, "Email is required");
	}
	if(empty($password_1))
	{
		array_push($errors, "Password is required");
	}
	if($password_1 != $password_2)
	{
		array_push($errors, "Not Match");
	}

	if(count($errors) == 0)
	{
		$password = md5($password_1);
		$sql="INSERT INTO user(user, email, password) 
		VALUES('$username', '$email', '$password' )";

		mysqli_query($db, $sql); 
		$_SESSION['username'] = $username;
		$_SESSION['success'] ="You are logged in..";
		header('location:home.php');
} 
	
}
if(isset($_POST['login']))
{
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['psw_1']);
	if(empty($username))
	{
		array_push($errors, 'Username required');
	}
	if(empty($password))
	{
		array_push($errors, 'Password is required');
	}
	if(count($errors)==0)
	{
		$password= md5($password);
		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		//if(mysqli_num_rows($result)== 1)
		//{
		$_SESSION['username'] = $username;
		$_SESSION['success'] ="You are logged in..";
		header('location:home.php');
		//}
		/*else{
			array_push($errors, "Wrong Entry");
			//header("location:login.php");
		} */
	}
	else{
			array_push($errors, "Wrong Entry");
			//header("location:login.php");
		} 
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location:login.php');

}
?>