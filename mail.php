<?php
//get data from form  
$name = $_POST['username'];
$email= $_POST['email'];
$message= $_POST['text'];
$to = "vishalsingh194071@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: contact_request@portfoliosite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>