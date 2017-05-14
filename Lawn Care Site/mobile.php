<!DOCTYPE html>
<html>

	<head>
		   <!--
			 [REDACTED] 
			  Author: Doug Goldberg
			  Date:   4/2/2017

			  Mobile Page
				
			  Filename: mobile.php
			   -->
			  
			  <meta charset="UTF-8" name="viewport" content="user-scalable=no"content="user-scalable=no" />
			  
			  <title>[REDACTED]</title> 
				
			  <link href="mobile.css" rel="stylesheet" />
				
			  <link type="image/ico" rel="icon" href="favicon.ico"/>	

		          <!-- Header -->
		          
		          <p class="header1">[REDACTED]</p>
			  <p class="header2">[REDACTED]</p>						
			
	</head>

	<body>
		
		<!-- Automatic picture slideshow markup -->

		<div class="slideWrap">
  				<div class="mySlides fade">
    				<div class="numbertext"></div>
    				<img src="photos/ListPicD.JPG" class="listPic">
    				<div class="text"></div>
  			</div>
  	  	
	
  			<div class="mySlides fade">
    				<div class="numbertext"></div>
    				<img src="photos/ListPicE.JPG" class="listPic">
    				<div class="text"></div>
  			</div>
  	
	
  			<div class="mySlides fade">
    				<div class="numbertext"></div>
    				<img src="photos/ListPicF.JPG" class="listPic">
    				<div class="text"></div>
  			</div>


  			<div class="mySlides fade">
    				<div class="numbertext"></div>
   				<img src="photos/ListPicB.JPG" class="listPic">
    				<div class="text"></div>
  			</div>
  	
  			<div class="mySlides fade">
    				<div class="numbertext"></div>
   				<img src="photos/ListPicG.JPG" class="listPic">
    				<div class="text"></div>
      			</div>
      	
      			<div class="slideshow-container">
  				<div class="mySlides fade">
    				<div class="numbertext"></div>
    				<img src="photos/listPic9.JPG" class="listPic">
    				<div class="text"></div>
  			</div>
  	
  	
  	
  			<div class="mySlides fade">
    				<div class="numbertext"></div>
   				<img src="photos/listPic5.JPG" class="listPic">
    				<div class="text"></div>
  			</div>
  	

	
  			<div class="mySlides fade">
  				<div class="numbertext"></div>
   				<img src="photos/ListPicC.JPG" class="listPic">
    				<div class="text"></div>
  			</div>
  	
  		</div>

		<!-- Slideshow Dots -->

		<div style="text-align:center">
  			<span class="dot"></span> 
 			<span class="dot"></span> 
 			<span class="dot"></span> 
  			<span class="dot"></span> 
  			<span class="dot"></span> 
 			<span class="dot"></span> 
  			<span class="dot"></span> 
  			<span class="dot"></span> 
  		</div>

			
		<!-- Slideshow javascript - forces automatic photo change -->

		<script>

				<!-- Initialize Variable, call funtion to change slide -->
				var slideIndex = 0;
				showSlides();

				function showSlides() {
   					 var i;
    					 
    					 <!-- Gets slides and dots from HTML -->
    					 var slides = document.getElementsByClassName("mySlides");
       					 var dots = document.getElementsByClassName("dot");
   
   					 <!-- change display for slides to none -->
   					 for (i = 0; i < slides.length; i++) {
      						 slides[i].style.display = "none";  
   					 }
    					 
    					 slideIndex++;
    
    					 if (slideIndex> slides.length) {slideIndex = 1}    
   					
   					 for (i = 0; i < dots.length; i++) {
       
       							dots[i].className = dots[i].className.replace(" active", "");
    					 }
   
   					 slides[slideIndex-1].style.display = "block";  
   					 dots[slideIndex-1].className += " active";
    					 
    					 <!-- Change photo every 7 seconds -->
    					 
    					 setTimeout(showSlides, 7000);
				}
	
		</script>	

 			<aside>	
			
			<!-- About Us Section -->
		
			<div class="aboutHead1">About Us</div>
			
			<div class="aboutHead2">Get it all done, bring it all home!</div>
			
			<div class="aboutText1">
			<p class="about1"><font class="sizer1" color="0,191,255"><img src="favicon.png" class="icon"><b>Guaranteed</b></font><br><br> to beat what you pay for lawn service in order to earn your business while also providing the most <div class="colorLight"><b>comprehensive lawn care</b></div> and service at the <div class="colorLight"><b>most affordable pricing</b></div></p>
			</div>
			
			<div class="aboutText2">
			<img src="photos/listPic4.JPG" class="aboutPic">
				<p class="about2">
				<font class="sizer1" color="0,191,255"><br><img src="favicon.png" class="icon"><b>Increase</b></font><br><br> the effect of aesthetics on your <div class="colorDark"><b>beautiful home</b></div> with a <div class="colorDark"><b>beautiful lawn</b></div> to surround it.<br><br>
				Do you need your lawn treated and maintained? Need a tree trimmed or weeds removed and exterminated?
				Need your grass cut or your bushes clipped and shaped? <br><br>Score an all in one lawn service otherwise known as a <div class="colorDark"><b>Grand Slam</b></div> in Lawn Care.</p>
				</div>
				<div class="aboutText1">
				
				<img src="photos/listPic2.JPG" class="aboutPic">
				
				<p class="about3">
				<font class="sizer2"color="0,191,255"><br><img src="favicon.png" class="icon"><b>Grand Slam</b><br><br></font> does it all, at an affordable rate  <div class="colorLight"><b>GUARANTEED</b></div> to beat other lawn care services including what you may be paying your current service provider.<br><br>
				Cut costs and expenses while still getting the best and most comprehensive lawn service by switching to<br>  <div class="colorLight"><b>[REDACTED]</b></div> and calling us for your immediate lawn servicing needs.</br></br></p>
				
				</div>
				
				<div class="aboutText2">
				<img src="photos/listPic7.JPG" class="aboutPic">
								
				<p class="about4">
				<font class="sizer1" color="0,191,255"><br><img src="favicon.png" class="icon"><b>Remember</b><br><br></font> Spring is around the corner and this is the season to keep your lawn looking the best. Score the most for your buck with <div class="colorDark"><b>[REDACTED]</b></div>  WE WILL beat the price that you currently pay for Lawn Service.<br><br>
				
				
				Please call <strong>[REDACTED]</strong> to discuss services and other inquiries.
				</p>				
				 <img src="photos/ListPicA.JPG" class="aboutPic">
				</div>
			
			</aside>
			
			
	
			<!-- Contact Form -->
			
			<form method="post">
			<p class="head1"><br>Contact Us</b></p>
			<p class="head2"><br>Fill out the form below</b></p><br>
				<input class="fields" type="text" name="first_name" placeholder="First Name *" required><br>
				<input class="fields" type="text" name="last_name" placeholder="Last Name *" required><br>
				<input class="fields" type="email" name="email" placeholder="Email *" required><br>
				<input class="fields" type="tel" name="phone" placeholder="Phone # *" required><br>
				<input class="fieldsAddress" type="text" name="address" placeholder="Enter Your Address"><br>
				<input class="fieldsSmall" type="text" name="city" placeholder="City">
				
				<select class="fieldsState" name="state" placeholder="State">
					<option>State</option>
					<option value="AL">AL</option>
					<option value="AK">AK</option>
					<option value="AZ">AZ</option>
					<option value="AR">AR</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DE">DE</option>
					<option value="DC">DC</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="IA">IA</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="ME">ME</option>
					<option value="MD">MD</option>
					<option value="MA">MA</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MS">MS</option>
					<option value="MO">MO</option>
					<option value="MT">MT</option>
					<option value="NE">NE</option>
					<option value="NV">NV</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NY">NY</option>
					<option value="NC">NC</option>
					<option value="ND">ND</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA">PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VT">VT</option>
					<option value="VA">VA</option>
					<option value="WA">WA</option>
					<option value="WV">WV</option>
					<option value="WI">WI</option>
					<option value="WY">WY</option>
				</select><br>

				<input class="fieldsSmall" type="text" name="zip" placeholder="Zip"><br>
				<br><textarea class="message" rows="10" name="message" cols="30" placeholder="Send Us A Message: *" required></textarea><br>
				<div class="reCaptcha"><div class="g-recaptcha" data-sitekey="6Lc-uxoUAAAAAOyxCKegllcssnXrLfwcsVQNeM0Y"></div></div>
				<input class="submitButton" type="submit" name="submit" value="Submit" >
				<div class="req"> All fields marked with * are required</div>
			</form>
	</body>
	
		<?php
			
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		
			// Initialize variables to corresponding user input

			$userFirst= $_POST['first_name'];
			$userLast= $_POST['last_name'];
			$userEmail= $_POST['email'];
			$userAddress= $_POST['address'];
			$userCity= $_POST['city'];
			$userState= $_POST['state'];
			$userZip= $_POST['zip'];
			$userPhone= $_POST['phone'];
			$userMessage= $_POST['message'];
			
			  if (empty($userFirst)) {
   				
   				 die();
 				 } 
 				 	
			  if (empty($userLast)) {
   				
   				 die();
 				 } 
 				 	
			  if (empty($userEmail)) {
   				
   				 die();
 				 } 
 				 	
			  if (empty($userMessage)) {
   				
   				 die();
 				 } 
  						

else{
		
			// Create Connection
			$con = mysqli_connect("localhost", "[REDACTED]", "[REDACTED]", "[REDACTED]");


			// Test Connection
			if (!$con) {
  			  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  			  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
   			 echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
   			 exit;
			}



			//Enter User Input into Database Table

			$query = "INSERT INTO contact(first_name, last_name, email, address, city, state, zip, message, phone) 
					VALUES('$userFirst', '$userLast', '$userEmail', 
					'$userAddress', '$userCity', '$userState', '$userZip', '$userMessage', '$userPhone');";


			if(mysqli_query($con, $query)){
	
			//Send Email
			$to = "[REDACTED]";

			$subject = "Edwins Grand Slam Lawn Care: A Customer Has Contacted Us";
			$txt = "A Customer Has Contacted Us
			View the Customer Database at [REDACTED]/dbSearch.php 
			
			Email: $userEmail
			Name: $userFirst $userLast
			Phone: $userPhone
			
			Address: $userAddress $userCity, $userState $userZip
			
			Message:'$userMessage'";
			$headers = "From: Grand Slam Support" . "\r\n";

			mail($to,$subject,$txt,$headers);

			echo " Contact Email Sent!";
 			    
			die();
			}

			else {
    				 /*Comment to hide SQL errors to prevent security breach*/
    				 /*echo "Error: " . $query . "<br>" . mysqli_error($con);*/
   				 echo " Email Not Sent Page.";

    
			}

		// Close Connection
		mysqli_close($con);



			
			}
			}
	?>
	
	
	
</html>