<!DOCTYPE html>
<html>
<head>
	<title>Membership</title>
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
    	    	.color{
	background: #E2DFDC;
}
 

    			p{
			
			align-content: center;
		}
		.contact h1,h2,h3{
			
			color: black;
			text-align: center;
		}
    	body
{
	margin: 0;
	padding: 0;
	font-family: 'Open Sans', sans-serif;

	background-size: cover;
	background-position: center;

}
		.cnt
{
	background:#F5F5F5;	
	width: 900px;
	box-shadow: 0 0 3px 0 rgba(0,0,0,0.8);
	
	padding: 50px;
	margin: 2% auto 0;
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

	<div class="contact">
		
		<br><h2>If you’re looking to join a supportive, welcoming gym community,<br>with people of all fitness levels who want to see you succeed,<br> you’ve come to the right place.</h2><br>
		<h2>Fill the membership form and become our Member</h2>
	</div>
	<div class="cnt">
		<?php 
		if(isset($_POST['insert'])){
			if(mail($_POST['email'], 'Greetings from localhost','You have know registered with Fitness Club')){
				echo "You have know became a member with us .You will receive a confirmation mail";
			}
			else{
				echo "not send";
			}
		}
	?>	
		<h1>Personal Details</h1><br>
	<form action="" method="post">
		<label><b>Name:</b></label>
		<input type="text" name="name" class="input-box" placeholder="Name" required><br><br>
		<label><b>Email:</b></label>
		<input type="text" name="email" class="input-box" placeholder="Email" required><br><br>
		<label><b>Phone:</b></label>
		<input type="number" name="phone" class="input-box" placeholder="Phone No" required><br><br>
		<label><b>Address</b></label>
		<input type="text" name="address" class="input-box" placeholder="Address" required><br><br>
		<label><b>City</b></label>
		<input type="text" name="city" class="input-box" placeholder="City" required><br><br>
		<label><b>Weight</b></label>
		<input type="number" name="weight" class="input-box" placeholder="Weight" required><br><br>
		<hr><br>
		<h1>Other Details</h1><br><hr><br>
		<label><b>WHERE DID YOU HEAR ABOUT US?</b></label>
		<select name="op1" class="input-box">
			<option value="">--Select--</option>
			<option value="A friend or colleague">A FRIEND OR COLLEAUGE</option>
			<option value="Google">GOOGLE</option>
			<option value="Blog post">BLOG POST</option>
		</select><br><br>
		<label><b>DO YOU REQUIRE A PERSONAL TRAINER?</b></label>
			<select name="op2" class="input-box">
			<option value="">--Select--</option>
			<option value="Yes">YES</option>
			<option value="No">NO</option>

		</select><br><br>

		<label><b>WHAT KIND OF MEMBERSHIP TYPE YOU ARE INTERETED IN?</b></label>
			<select name="op3" class="input-box">
			<option value="">--Select--</option>
			<option value="Beginner">BEGINNER</option>
			<option value="Regular">REGULAR</option>
			<option value="Vip">VIP</option>
		</select><br><br>
		<hr><h1>Membership Rules</h1><hr><br>
		<p>1. Membership is available to anyone 18 years of age or older.

			<br>2. You promise NOT to use to conduct any fraudulent or business activity or have more than one Member Account at any time.</p><br>
			<p><span><input type="checkbox" required></span> I have Read,Accepted and Understood the rules of Membership.</p><br>
		<hr><h4>Once you submit your application, we will contact you shortly to complete your membership application. 

		Thank you!</h4><hr><br>	
		<input type="submit" value="Submit" class="btn" name="insert">
		<?php
		include 'dbc.php';
		if(isset($_POST['insert'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$weight=$_POST['weight'];
		$op1=$_POST['op1'];
		$op2=$_POST['op2'];
		$op3=$_POST['op3'];
		if($conn->connect_error)
		{
			die('Connection failed:'.$conn->connect_error);
		}
		else{
			$var=$conn->prepare("insert into member_data(name,email,phone,address,city,weight,op1,op2,op3) values(?,?,?,?,?,?,?,?,?)");
			$var->bind_param("ssissssss",$name,$email,$phone,$address,$city,$weight,$op1,$op2,$op3);
			$var->execute();

		
			
			$var->close();
			$conn->close();
		}
	}
		?>
	</form>
</div>
	<br><br><br>
	<br><br><br></div>
    <?php
    include 'footer.php';
 ?>
</body>
</html>