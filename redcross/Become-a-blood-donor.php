<?php
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$disc= $_POST['disc'];
$taulk= $_POST['taulk'];
$blood= $_POST['blood'];
$taulk= $_POST['taulk'];

$sub= "Redcross Kottayam-Become-a-blood-donor ";
$to = "redcrosskottayam@gmail.com";  

$txt ="Name : ". $name . "\r\n dob : " . $dob . "\r\n  phone :" . $phone . "\r\n email : " . $email .  "\r\n disc : " . $disc .  "\r\n taluk : " . $taulk .  "\r\n blood : " . $blood .  "\r\n taulk : . $taulk";
$subject= "subject" .$subject;
$headers = "From:" . $email;
 
if(mail($to,$sub,$txt,$headers)) {
 
echo "<h1>Sent Successfully! Thank you ".$name.", We will contact you shortly!</h1>";
} else {
    echo "The email message was not sent.";
}
require_once "Become-a-blood-donor.html";
?>