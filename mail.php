<?php
//get data from form  
$name = $_POST['name'];
$visitor_email= $_POST['email'];
$message= $_POST['text'];

$email_from='vishalpratapsingh4071@gmail.com';
$to = "vishalsingh194071@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $visitor_email . "\r\n Message =" . $message;
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n;
mail($to,$subject,$txt,$headers);

//redirect
header("Location:index.html");
?>
