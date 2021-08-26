<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/sy.css">
<nav>
      
      <label class="logo">Fitness <span>Club</span></label>
      <ul>
        <li><a href="homee.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="user_logout.php">Logout</a></li>
      </ul>
    </nav>
    <style type="text/css">

    body
{
	margin: 0;
	padding: 0;
	font-family: 'Open Sans', sans-serif;
	background: #E2DFDC;
	background-size: cover;
	background-position: center;

}
    	.color{
	background: #E2DFDC;
}
		.cnt
{
	width: 800px;
	box-shadow: 0 0 3px 0 rgba(0,0,0,0.7);
	background: #F5F5F5;
	padding: 50px;
	margin:0 auto 0;
	text-align: center;
}
		.input-box{
			
	border-radius: 20px;
	padding: 10px;
	margin: 10px 0;
	width: 100%;
	border: 1px solid black;
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
		<?php 
		if(isset($_POST['insert'])){
			if(mail($_POST['email'], 'Greetings from localhost','Your feedback is been received..Thank you for taking a moment and sharing your experience with us.')){
				echo "send";
			}
			else{
				echo "not send";
			}
		}
	?>
	<div class="cnt">

		<h2>We would love to hear from you!<br> </h2><h4>Please take a moment to let us know about your experience.</h4><br>
	<form action="" method="post">
		<label><b>Name:</b></label>
		<input type="text" name="name" class="input-box" placeholder="Name" required><br><br>
		<label><b>Email:</b></label>
		<input type="text" name="email" class="input-box" placeholder="Email" required><br><br>
		<label><b>Rate us</b></label>
		<select name="rate" class="input-box">
			<option value="">--Select--</option>
			<option value="Excellent">EXCELLENT</option>
			<option value="Good">GOOD</option>

		</select><br><br>
		<label><b>Let us know your overall experience with us.</b></label>
			<select name="experince" class="input-box">
			<option value="">--Select--</option>
			<option value="Excellent">EXCELLENT</option>
			<option value="Good">GOOD</option>

		</select><br><br>
		<label><b>Please leave any additional questions or comments to help us improve</b></label>
		<textarea name=msg placeholder="Ask" class="input-box" required></textarea><br><br>
		<input type="submit" value="Submit" class="btn" name="insert">
		<?php
		include 'dbc.php';
		if(isset($_POST['insert'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$rate=$_POST['rate'];
		$experince=$_POST['experince'];
		$msg=$_POST['msg'];

		if($conn->connect_error)
		{
			die('Connection failed:'.$conn->connect_error);
		}
		else{
			$var=$conn->prepare("insert into feedback_table(name,email,rate,experince,msg) values(?,?,?,?,?)");
			$var->bind_param("sssss",$name,$email,$rate,$experince,$msg);
			$var->execute();

		
			
			$var->close();
			$conn->close();
		}
	}
		?>
	</form>
</div>
	<br><br><br>
	<br><br><br>
</div>
    <?php
    include 'footer.php';
 ?>
</body>
</html>