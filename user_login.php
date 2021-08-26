<?php include('server.php') ?>
<html>
<head>
	<title>Regestration</title>
		<style>
	    	body
{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: black;
	background-size: cover;
	background-position: center;

}
		.cnt
{
	background:#f0f0f0;	
	width: 500px;
	box-shadow: 0 0 3px 0 rgba(0,0,0,0.9);
	background: #F5F5F5;
	padding: 25px;
	margin: 10% auto 0;
	text-align: center;
}
		.input-box{
	border-radius: 20px;
	padding: 10px;
	margin: 10px 0;
	width: 100%;
	border: 1px solid #999;
	outline: none;

}
.btn{
	color: white;
	width: 100%;
	padding: 10px;
	border-radius: 20px;
	font-size: 15px;
	margin: 10px 0;
	border: none;
	outline: none;
	cursor: pointer;
	background-color: black;
}
	</style>
</head>
<body>

	<div class="cnt">
		<div class="header">
			<h2>Login In </h2>
			
		</div>
		<form action="user_login.php" method="post">
			<div>
				<label for="username"><b>Username</b></label>
				<input type="text" name="username" class="input-box" required>
			</div>

			
			<div>
				<label for="password"><b>Password</b></label>
				<input type="password" name="password_1" class="input-box" required>
			</div>
			
			
			

			<button type="submit" name="login_user" class="btn">Log In</button>

			<p>Not a user??<a href="user_register.php"><b>Register Here!</b></a></p>
			
		</form>
		
	</div>

</body>
</html>