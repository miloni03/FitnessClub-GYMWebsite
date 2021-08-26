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
 		.subscribe{
  padding:30px 3px;
  background-color:#ffffff;
}

.subscribe .content{ 
 
 display: flex;
}
.subscribe .content .box{
  flex:0 0 33.33%;
  max-width: 33.33%;
  padding:5px;
}
.subscribe .content .box .inner{
  background-color:white;
  padding: 30px;
}
.subscribe .content .box:nth-child(2) .inner{
  background-color:white;
}

.subscribe .content .box .inner .img img{
  width: 100%;
}
.subscribe .content .box .inner .text{
  padding:30px;
}

.subscribe .content .box .inner .text h2{
  font-size: 20px;
  margin:0;
  
  font-weight: 500;
  color:black;
 text-transform: capitalize;
  text-align: center;
}
.subscribe .content .box .inner .text h3{
	text-align: center;
}
.subscribe .content .box .inner .text p{
  font-size: 15px;
  line-height:20px;
  color:#ffffff;
  text-align: center;
  margin:0;
  font-family: 'Open Sans', sans-serif;
}
.subscribe .content .box .inner .text strike {
    text-decoration: line-through;
}
.subscribe .content .box .inner .text .btn {
    padding: 15px 100px;
    color: #fff;
    background: #27d671;
    letter-spacing: 2px;
    margin-top: 30px;
    border-radius: 8px;
    font-weight: 300;
    font-size: .700em;
    text-align: center;
}
    	.policy{
    		background: white;
    		font-size: 20px;
			font-weight: normal;
			width: 70%;
						margin: 1px auto 0;
			padding: 15px 
    	}
    	   	.cont h1{
    		
			font-size: 40px;
			font-weight: normal;
			text-align: center;
			padding: 15px 15px;
    	}
    </style>


</head>
<body>
	<section class="subscribe">
      <div class="container">
          <div class="content">
<div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/sub.png" alt="about" />
                       </div>
                       <div class="text">
                            <h2><b>Beginners ₹750</b></h2><strike class="st"><h3>₹999</strike></h3><br>
                           <a href="payment.php" class="btn">Subscribe Now</a>
                           <p></p>
                       </div>
                   </div>
               </div>
 
               <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/sub.png" alt="about" />
                       </div>
                       <div class="text">
                            <h2><b>Regular ₹2500</b></h2><strike class="st"><h3>₹3000</strike></h3><br>
                           <a href="payment.php" class="btn">Subscribe Now</a>
                           <p></p>
                       </div>
                   </div>
               </div>
               <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/sub.png" alt="about" />
                       </div>
                       <div class="text">
                            <h2><b>VIP ₹5000</b></h2><strike class="st"><h3>₹5500</strike></h3><br>
                           <a href="payment.php" class="btn">Subscribe Now</a>
                           <p></p>
                       </div>
                   </div>
               </div>
          </div>
      </div>
  </section>
  	<div class="cont">
		<h1>Subscription Terms & Conditions</h1>
	</div>
  <div class="policy">
		 FITNESS CLUB membership across largest fitness network! Choose your fit! Get Set Sweat.<br> <br><b>Who is eligible for the  subscription ?</b><br><br>All the mebers who have membership with us is eligible for the subscription...<br> <br><b>How can I activate the FITNESS CLUB subscription?</b><br> <br>Go to subscription Choose your offer select subscribe now and enter all the details .Click on Submit By Clicking on Submit You will receive an Email and hence your subscription is done.

<br><br>
		</div>
		<br><br><br><br>
		    <?php
    include 'footer.php';
 ?>
</body>
</html>
