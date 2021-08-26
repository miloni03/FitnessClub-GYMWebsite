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
          .color{
  background: #E2DFDC;
}
		.work{
  padding:20px 15px;
  background-color:#E2DFDC;
}
.work h1{
	font-style: italic;
	font-family:'Open Sans', sans-serif;
	font-weight: normal;
	text-align: center;
	padding: 15px 15px 15px;
}
.work .content{ 
 
 display: flex;
}
.work .content .box{
  flex:15 15 15.33%;
  max-width: 15.33%;
  padding:15px;
}
.work .content .box .inner .img img{
  width: 70%;
}
.work .content .box .inner .text{
  padding:5px 15.33px;
  
  margin: 0;
}
	* {
  font-family:'Open Sans', sans-serif; 
}

.content-table {
  border-collapse: collapse;
  height: 50px;
  margin: 25px 300px;
  font-size: 0.9em;
  width: 800px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #5F5D58;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #5F5D58;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}


.content-table tbody tr.active-row {
  font-weight: bold;
  color: #5F5D58;
}
.contain{
	padding:20px 50px;
	text-align:center; 
}
.contain h1 h2{
	font-style: italic;
	font-family:'Open Sans', sans-serif;
	
	text-align: center;
	
}
</style>
</head>
<body>
<div class="color">
	<section class="work">
		<h1><b>WORKOUT ROUTINES</b></h1>
      <div class="container">
          <div class="content">
               <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/w1.png" alt="about" />
                       </div>
                       <div class="text">
                           <h4>  ABS  </h4>
                           
                       </div>
                   </div>
               </div>
                <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/w2.png" alt="about" />
                       </div>
                       <div class="text">
                           <h4>ARMS</h4>
                           
                       </div>
                   </div>
               </div>
               <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/w3.png" alt="about" />
                       </div>
                       <div class="text">
                           <h4>LEGS</h4>
                           
                       </div>
                   </div>
               </div>
               <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/w4.png" alt="about" />
                       </div>
                       <div class="text">
                           <h4>BACK</h4>
                           
                       </div>
                   </div>
               </div>
               <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/w5.png" alt="about" />
                       </div>
                       <div class="text">
                           <h4>SHOULDERS</h4>
                           
                       </div>
                   </div>
               </div>
               <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/w6.png" alt="about" />
                       </div>
                       <div class="text">
                           <h4>CHEST</h4>
                           
                       </div>
                   </div>
               </div>
               <div class="box">
                   <div class="inner">
                       <div class="img">
                          <img src="images/w7.png" alt="about" />
                       </div>
                       <div class="text">
                           <h4>FULL- BODY</h4>
                           
                       </div>
                   </div>
               </div>
          </div>
      </div>
  </section>
  <div class="contain">
  	<h1>A PERFECT 7 DAYS WORKOUT PLAN.</h1><br>
  	<h2>WE BELEIVE LITTLE THING MATTERS!</h2>
  </div>
  <table class="content-table">
  <thead>
    <tr>
      <th>DAY</th>
      <th>PLAN</th>
      <th>EXERCISE</th>
      <th>TIME IN SECONDS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>MONDAY</td>
      <td>ABS</td>
      <td>STRETCHING AND WARMUPS</td>
      <td>30</td>
    </tr>
    <tr class="active-row">
      <td>TUESDAY</td>
      <td>ARMS</td>
      <td>ARMS CIRCLES[FORWARD AND REVERSE]</td>
      <td>30</td>
    </tr>
    <tr>
      <td>WEDNESDAY</td>
      <td>LEGS</td>
      <td>SQUATS</td>
      <td>30</td>
    </tr>
    <tr>
      <td>THURSDAY</td>
      <td>BACK</td>
      <td>STRETCHING</td>
      <td>30</td>
    </tr>
    <tr class="active-row">
      <td>FRIDAY</td>
      <td>SHOULDERS</td>
      <td>SHOULDER TAPS</td>
      <td>30</td>
    </tr>
    <tr>
      <td>SATURDAY</td>
      <td>CHEST</td>
      <td>PUSH UPS</td>
      <td>30</td>
    </tr>
    <td> SUNDAY</td> <td>REST</td><td>TAKE  REST YOU DESERVE IT!!!!<td></td></td>
     </tr> 
  </tbody>
</table>
<br>
<br>
<br></div><br><br>
<?php
    include 'footer.php';
 ?>
</body>
</html>