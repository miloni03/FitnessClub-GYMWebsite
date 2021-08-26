<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
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
    		.cnt
    	
{
	width: 700px;
	box-shadow: 0 0 3px 0 rgba(0,0,0,0.9);
	background: #F5F5F5;
	padding: 50px;
	margin: 0% auto 0;
	text-align: center;
}
		.input-box{
	background: white;		
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
	<div class="cnt">
			<?php 
		if(isset($_POST['insert'])){
			if(mail($_POST['email'], 'Greetings from localhost','Thanks for making the payment.Your Subscription is done')){
				echo "Payment done you will receive an email";
			}
			else{
				echo "not send";
			}
		}
	?>
		<h2>Please proceed your payment</h2><br>
	<form action="" method="post">
		
		<input type="text" name="name" class="input-box" placeholder=" Card Holder Name" required><br><br>
		
		<input type="text" name="email" class="input-box" placeholder="Email" required><br><br>
		
		<input type="text" name="cno" class="input-box" placeholder="Card No" required><br><br>
		
		<input type="text" name="cvc" class="input-box" placeholder="Card CVC" required><br><br>
		
		<input type="text" name="cexp" class="input-box" placeholder="Card Expiry" required><br><br>
		
		<input type="text" name="amount" class="input-box" placeholder="Amount" required><br><br>
		<hr><br>
		<input type="submit" value="Make Payment" class="btn" name="insert">
		<?php
		include 'dbc.php';
		if(isset($_POST['insert'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$cno=$_POST['cno'];
		$cvc=$_POST['cvc'];
		$cexp=$_POST['cexp'];
		$amount=$_POST['amount'];
		if($conn->connect_error)
		{
			die('Connection failed:'.$conn->connect_error);
		}
		else{
			$var=$conn->prepare("insert into payment_table(name,email,cno,cvc,cexp,amount) values(?,?,?,?,?,?)");
			$var->bind_param("ssssss",$name,$email,$cno,$cvc,$cexp,$amount);
			$var->execute();

		
			
			$var->close();
			$conn->close();
		}
	}
		?>
	</form>
</div><br><br><br></div>
    <?php
    include 'footer.php';
 ?>
</body>
</html>