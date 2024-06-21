<?php 
if(isset($_POST['submit'])){
    $to = "@example.com"; // this is your Email address
    $from_email = $_POST['email']; // this is the sender's Email address
    $from_name = $_POST['first_name'];
    $subject =  $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " .  " wrote the following:" . "\n\n" . $_POST['subject'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from_email;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>