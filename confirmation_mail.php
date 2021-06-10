<?php
//get data from form  


$to = $_POST['Email Address'];
$subject = "Confirmation Email";
$txt ="Thankyou for Registering, you will be updated soon" \r\n "Take care";
$headers = "From: siddhesh.kanawade@iitgn.ac.in" . "\r\n" .
"CC: siddheshkanawade609@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>