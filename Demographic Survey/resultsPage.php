<?php
			
			
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
			

			$q1= $_POST['q1'];
			$q2= $_POST['q2'];
			$q3= $_POST['q3'];
			$q4= $_POST['q4'];
			$q5= $_POST['q5'];
			$q6= $_POST['q6'];
			$q7= $_POST['q7'];
			$q8= $_POST['q8'];
			$q9= $_POST['q9'];
			$q10= $_POST['q10'];
			

			
			//Enter User Input into Database Table

			$query = "INSERT INTO ORLsurvey(q1, q2, q3, q4, q5,  q6, q7,  q8,  q9,  q10) 
					VALUES('$q1', '$q2', '$q3', '$q4', 
					'$q5', '$q6', '$q7', '$q8', '$q9', '$q10');";


			if(mysqli_query($con, $query)){
	
			//Send Email
			$to = "[REDACTED]";

			$subject = "A Survey Has Been Completed: Orlando";
			$txt = "A Survey Has Been Completed: Orlando";
			
			
			$headers = "From: Support" . "\r\n";

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
		
		

			
			
?>