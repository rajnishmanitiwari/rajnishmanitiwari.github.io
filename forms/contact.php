<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];

    $email_from = 'Rajnish Mani Tiwari';
    $email_subject = 'New Message From Rajnish Contact'
    $email_body =  "Name: $name.\n".
                   "Email: $email.\n".
                   "Message: $message.\n";
                   
     $to ="mr.rajnishmani@gmail.com";
     $headers = "From: $email_from \r\n";
     $headers .= "Reply-To: $email \r\n";
    
     mail($to,$email_subject,$email_body,$headers);
    header ("location: index.html");
?>
