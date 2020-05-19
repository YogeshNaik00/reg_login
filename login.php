<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_reg.css">
	<title>Login Form</title>
	<style type="text/css">
		*{
	margin:0;
	padding: 0;
}
body{
	font-size: 120%;
	background:#F8F8FF;
}

.header{
	width: 30%;
	margin:	50px auto 0px;
	color: white;
	background:#5F9EA0;
	text-align: center;
	border:1px solid #80C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form{
	width: 30%;
	margin:0px auto;
	padding: 20px;
	border:1px solid #80C4DE;
	background:white;
	border-radius: 0px 0px 10px 10px;
}
.input_group{
	margine:10px 0px 10px 0px;
}
.input_group label{
	display: block;
	text-align: left;
	margin:3px;
}
.input_group input{
	height: 30px;
	width:290px;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid gray;
}
.btn{
	padding: 5px;
	font-size: 35px;
	color:white;
	background:#5F9EA0;
	border:none;
	border-radius: 5px;
}
.error{
	width: 80%;
	margin:0px auto;
	padding: 10px;
	/*border:1px solid #a94442;*/
	color: #a94442;
	/*background:#f2dede;*/
	border-radius: 5px;
	text-align: left;
	color: red;
}
	</style>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php') ?>
		<div class="input_group">
			<label>User Name:</label>
			<input type="text" name="username">
		</div>

		<div class="input_group">
			<label>Password:</label>
			<input type="password" name="psw_1">
		</div>
		<div class="input_group">
			<p>&nbsp;</p>
			<button type="submit" name="login" class="btn">Login</button>
		</div>

		<p>
			<p>&nbsp;</p>
			Not yet a member? <a href="reg.php">Sign Up</a>
		</p>
	</form>

</body>
</html>