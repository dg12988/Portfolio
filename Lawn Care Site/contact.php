<!DOCTYPE html>
<html>
	<head>
		   <!--
			  [REDACTED]
			  Author: Doug Goldberg
			  Date:  3/30/2017

			  Contact Us homepage
				
			  Filename: contact.php
			   -->

			  <meta charset="UTF-8" />
			
			  <title>[REDACTED]</title> 
				
			  <link href="contact.css" rel="stylesheet" type="text/css"/>
			  <link type="image/ico" rel="icon" href="favicon.ico"/>	
			  <script src='https://www.google.com/recaptcha/api.js'></script>
				
					
			<!-- Redirect to Mobile Site iPhone/iPod -->
		            
		            <script language="javascript">
				<!--
				if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
  					
  					 location.replace("mobile.php");
				}
				-->
			    </script>

  			   <!-- Redirect to Mobile Site -->
			
			   <script type="text/javascript">
				<!--
				if (screen.width <= 699) {
					if (document.referrer.indexOf(‘mobile.php’) == -1){
						
						document.location = “mobile.php”;
				}}	
				}
				//-->
			   </script>
			
						
			   <!-- Page begins at top on reload -->			
			   
			   <script>
				window.onbeforeunload = function () {
  			
  					window.scrollTo(0, 0);
				}
			   </script>
				
				
			   <!-- Navigation Bar -->				
				
				<nav>
					<ul>
					  <li><a href="index.html">Home</a></li>
					  <li><a href="about.html">About</a></li>
					  <li><a href="gallery.html">Photos</a></li>
					  <li><a href="contact.php">Contact</a></li>
					</ul>					
				</nav>
					
					
				
				
    	</head>
	
	<body>
	
		<!-- Facebook Plugin -->
			
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
  				var js, fjs = d.getElementsByTagName(s)[0];
 				
 				if (d.getElementById(id)) return;
 					 js = d.createElement(s); js.id = id;
  				 	 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
 					 fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			
			<!-- Main Image -->
			<img src="photos/ListPicA.JPG" class="flyer" alt="" />
		

		<aside> 
			
			<!--Contact Form -->
			
			<form method="post">
			<p class="head1"><br>Contact Us: Fill out the form below or call [REDACTED].</b></p><hr>
				<input class="fields" type="text" name="first_name" placeholder="First Name *" required>
				<input class="fields" type="text" name="last_name" placeholder="Last Name *" required><br><br>
				<input class="fields" type="email" name="email" placeholder="Email *" required>
				<input class="fields" type="tel" name="phone" placeholder="Phone # *" required><br><br>
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
				</select>

				
				
				<input class="fieldsSmall" type="text" name="zip" placeholder="Zip">
				<br><textarea class="message" rows="10" name="message" cols="30" placeholder="Send Us A Message: *" required></textarea><br>
				<div class="reCaptcha"><div class="g-recaptcha" data-sitekey="6Lc-uxoUAAAAAOyxCKegllcssnXrLfwcsVQNeM0Y"></div></div>
				<input class="submitButton" type="submit" name="submit" value="Submit" >
				<div class="req">All fields marked with * are required</div>
			</form>
				
	     
									
		</aside>
		
	
	</body>
	
		<?php
			
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			
		
			// Create Connection
			$con = mysqli_connect("localhost", "[REDACTED]", "[REDACTED]", "[REDACTED]");


			// Test Connection
			if (!$con) {
  			  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  			  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
   			  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
   			 
   			  exit;
			}


			// Initialize variables to corresponding user input

			$userFirst= $_POST['first_name'];
			$userLast= $_POST['last_name'];
			$userEmail= $_POST['email'];
			$userPhone= $_POST['phone'];
			$userAddress= $_POST['address'];
			$userCity= $_POST['city'];
			$userState= $_POST['state'];
			$userZip= $_POST['zip'];
			$userMessage= $_POST['message'];

			//Enter User Input into Database Table

			$query = "INSERT INTO contact(first_name, last_name, email, address, city, state, zip, message, phone) 
					VALUES('$userFirst', '$userLast', '$userEmail', '$userAddress', 
					'$userCity', '$userState', '$userZip', '$userMessage', '$userPhone');";


			if(mysqli_query($con, $query)){
	
			//Send Email
			$to = "[REDACTED]";

			$subject = "[REDACTED]: A Customer Has Contacted Us";
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
    				 echo "Error: " . $query . "<br>" . mysqli_error($con);
   				 echo " Email Not Sent Page.";

    
			}

		// Close Connection
		mysqli_close($con);



			
			}
	?>
	
</html>