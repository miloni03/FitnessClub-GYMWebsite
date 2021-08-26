<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	background: #f0f0f0;
}
	    	.cont h1{
    		
			font-size: 40px;
			font-weight: normal;
			text-align: center;
			padding: 15px 15px;
    	}

		.faq .content .accordian-container{
  width: 90%;
  margin: 20px auto 0;

}
.faq .content .accordian-container .head{
  background-color:#333;
  position: relative;
  padding:12px 5px;
  cursor: pointer;
}
.faq .content .accordian-container .head .fa{
  position: absolute;
  right: 50px;
  top:13px;
  color:rgb(250, 209, 72);
  height:30px;
  width: 50px;
  text-align: center;
  line-height: 30px;
  color:#ffffff;
  border-radius: 50%;
}
.faq .content .accordian-container .head h4{
  font-size: 20px;
  margin:0;
  padding:0;
  font-weight: 500;
  color: #ffffff;
  text-transform: capitalize;
}
.faq .content .accordian-container.active .head{
  background-color: #222222;  
}
.faq .content .accordian-container .body{
  display: none;
  padding:15px;
  background-color: #222222;
  border-top:1px solid #333333;
}

.faq .content .accordian-container:nth-child(1) .body{
  display: block;
}
.faq .content .accordian-container .body p{
    font-size: 15px;
  line-height:20px;
  color:#ffffff;
  margin:0;
  padding:0;
  font-family: 'Open Sans', sans-serif; 
}
	</style>
</head>
<body>
	<div class="color">
	<div class="cont">
	<h1>FAQs</h1><br></div>
	 <section class="faq" id="faq">
	 	   <div class="content">
	<div class="accordian box wow slideInRight">
              <div class="accordian-container active">
                <div class="head">
                  <h4>What is FITNESS CLUB?</h4>
                  <span class="fa fa-angle-down"></span>
                </div>
                <div class="body">
                  <p>FITNESS CLUB is a fitness centers, expert nutritionists, and A.I based training plans and much more. With the membership, you can workout anytime, anywhere at fitness centers and gyms in  Mumbai.
 				</p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>How long is the FITNESS CLUB membership cycle?</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>FITNESS membership cycle depends on the tenure for which you have opted .You can use it for a period of 1 Month / 3 Months / 6 Months from the date of purchase. For instance, you've purchased a membership on March 15th, 2018, and then it will be valid till April 14th, 2018.</p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>When does my FITNESS CLUB start?</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>FITNESS CLUB membership starts from the date and time of purchase of the membership.</p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>Can I attend any class/workout?</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>Yes, you may choose to attend any class or workout. With FITNESS CLUB, you have thousands of options – Gym workout, Zumba dance classes, Crossfit sessions, Pilates, Circuit Training, Kickboxing classes, Mixed Martial Arts training, Spinning, and Yoga classes among many. However, we urge you to reserve early as spots in popular workouts fill up quickly.</p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>How many workouts can I attend?</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>You may choose to attend any number of workouts at the same gym</p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>Can I only attend 5 workouts in the complete membership cycle?</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>You can attend unlimited workouts at all our partner locations. We have a few unique agreements
					where you can only workout up to 5 times in a month.</p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>How do I reserve my workout??</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>Register to our website

				Tap on ‘Get Membership’
				Choose your plan
				Make the payment
				Get. Set. Sweat.</p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>Can I pay through the digital mode?</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>We also offer digital modes of payment for our subscription. Digital payment is hassle-free and updates your membership instantly. We are digi-friendly!</p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>Can I get personal online sessions?</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>We are working on one-on-one Live classes and plan to launch the services soon. Till then, enjoy the currently available Live workout classes every day to stay fit and healthy while staying home.</p>
                </div>
              </div>
        </div>
    </div>
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
        $(".accordian-container").children(".body").slideUp();
        $(".accordian-container").removeClass("active")
        $(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
        $(this).children(".body").slideDown();
        $(this).addClass("active")
        $(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      }) 
      })

</script>

<br><br><br></div><br><br>
	<?php
    include 'footer.php';
 ?>
</body>
</html>