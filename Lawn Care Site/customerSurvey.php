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

$userFirst= $_POST['first_name'];
$userLast= $_POST['last_name'];
$userEmail= $_POST['email'];
$userRating= $_POST['rating-input-1'];
$userMessage= $_POST['message'];

//Enter User Input into Database Table

$query = "INSERT INTO surveys(first_name, last_name, email, rating, message) 
		VALUES('$userFirst', '$userLast', '$userEmail', '$userRating', '$userMessage');";


if(mysqli_query($con, $query)){
	
//Send Email
$to = "[REDACTED]";

$subject = "[REDACTED]: A Customer Has Completed a Survey";
$txt = "A Survey Has Been Completed, View the Survey Database at [REDACTED]/dbSearch.php";
$headers = "From: Grand Slam Support" . "\r\n";

mail($to,$subject,$txt,$headers);


 	header("Location: [REDACTED]/endSurvey.html");
	die();
}

else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    echo " Page will Refresh in 5 Seconds.";

    header("Refresh: 5; url= [REDACTED]/customerSurvey.html");
    
}

// Close Connection
mysqli_close($con);

?>

