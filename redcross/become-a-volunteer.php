<?php
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone= $_POST['phone'];
$dis= $_POST['dis'];
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$sub="Redcross Kottayam-Become A Volunteer";
$to = "redcrosskottayam@gmail.com";  

$txt ="Name : ". $name . "\r\n dob : " . $dob . "\r\n  phone :" . $phone . "\r\n dis : . $dis . \r\n  qualification: . $qualification .";

$headers = "From:" . $email;
 
if(mail($to,$sub,$txt,$headers)) {
 
echo "<h1>Sent Successfully! Thank you ".$name.", We will contact you shortly!</h1>";
} else {
    echo "The email message was not sent.";
}
require_once "become-a-volunteer.html";
?>