<?php  
if( isset($_POST['submit']) ) {
//getting user data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fromEmail = $_POST['email'];
$phone = $_POST['tel'];
$dateOfBirth = $_POST['date'];
$cityName = $_POST['city'];
$homeAddress = $_POST['address'];
$employmentStatus = $_POST['status'];
 
//Recipient email, Replace with your email Address
$mailTo = 'mr.rajnishmani@gmail.com';
 
//email subject
$subject = ' A New Message Received From ' .$firstName;
 
//email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Client Name: </b> '.$firstName . " " . $lastName . '</p>
<p> <b>Email: </b> '.$fromEmail .'</p>
<p> <b>Phone Number: </b> '.$phone .'</p>
<p> <b>Date of Birth: </b> '.$dateOfBirth .'</p>
<p> <b>City Name: </b> '.$cityName .'</p>
<p> <b>Home Address: </b> '.$homeAddress .'</p>
<p> <b>Employment Status: </b> '.$employmentStatus .'</p>';
 
//header for sender info
$headers = "From: " .$firstName . "<". $fromEmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
//PHP mailer function
 $result = mail($mailTo, $subject, $htmlContent, $headers);
 
   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
 
?>
