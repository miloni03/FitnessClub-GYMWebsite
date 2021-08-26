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
		p{
			
			align-content: center;
		}
		.contact h1,h2,h3,p{
			padding: 0px;
			text-align: center;
		}
		body
{
	margin: 0;
	padding: 0;
	font-family: sans-serif;

	background-size: cover;
	background-position: center;

}
    	.color{
	background: #E2DFDC;
}
		.cnt
{
	width: 700px;
	box-shadow: 0 0 3px 0 rgba(0,0,0,0.5);
	background: #F0F0F0;
	padding: 50px;
	margin: 2% auto 0;
	text-align: center;
}
		.input-box{
	background: #F0F0F0;		
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
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30169.684394588734!2d72.81214463079188!3d19.054478224398917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8e123f8d27b%3A0x437996b49a236a78!2sBandra%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1593443504079!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p><br>
	

	<div class="contact">
		<h1>We are always there for you!</h1>
		<br><h2>Contact Us</h2><br>
		<p><b>Phone:</b>011-46061468<br>
		<b>Email:</b>care@fitnessclub.co.in<br><br>Want to reach us old style ? Here is our postal address
		<br>Bandra near worli sealink,Mumbai,India.<br><b>Gym Hours:</b>24/7<br>
	
	</p>
	</div>
		<?php 
		if(isset($_POST['insert'])){
			if(mail($_POST['email'], 'Greetings from localhost','We will reach you shortly')){
				echo "send";
			}
			else{
				echo "not send";
			}
		}
	?>
	<div class="cnt">
		<h2>Ask us Anything</h2><br>
	<form action="" method="post">
		<input type="text" name="name" class="input-box" placeholder="Name" required><br><br>
		<input type="text" name="email" class="input-box" placeholder="Email" required><br><br>
		<textarea name=msg placeholder="Ask" class="input-box" required></textarea><br><br>
		<input type="submit" value="Submit" class="btn" name="insert">
		<?php
		include 'dbc.php';
		if(isset($_POST['insert'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		if($conn->connect_error)
		{
			die('Connection failed:'.$conn->connect_error);
		}
		else{
			$var=$conn->prepare("insert into contact_data(name,email,msg) values(?,?,?)");
			$var->bind_param("sss",$name,$email,$msg);
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