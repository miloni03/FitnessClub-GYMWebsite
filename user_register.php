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
      .color{
        background: black;
      }
		.cnt
{
	background:#f0f0f0;	
	width: 500px;
	box-shadow: 0 0 3px 0 rgba(0,0,0,0.8);
	background: #F5F5F5;
	padding: 25px;
	margin: 5% auto 0;
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
<div class="color">
	<div class="cnt">
		<div class="header">
			<h1>Welcome to Fitness Club!</h1><h2>Register Here</h2>
			
		</div>
		<form action="user_register.php" method="post">

			
			<div>
				<label for="username"><b>Username:</b></label>
				<input type="text" name="username" class="input-box" required>
			</div>

			<div>
				<label for="email"><b>Email:</b></label>
				<input type="email" name="email" class="input-box" required>
			</div>


			<div>
				<label for="password"><b>Password:</b></label>
				<input type="password" name="password_1" class="input-box" required>
			</div>
			
			
			<div>
				<label for="password"><b>Confirm Password:</b></label>
				<input type="password" name="password_2" class="input-box" required>
			</div>

			<button type="submit" name="reg_user" class="btn">Submit</button>

			<p>Already a user??<a href="user_login.php"><b>Login In</b></a></p>
			
		</form>
		
	</div>
</div>
</body>
</html>