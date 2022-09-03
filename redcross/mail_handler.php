<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];

$msg= $_POST['msg'];
$subject="Red Cross Kottyam";
$to="ehasalpha@gmail.com";
// $to = "freiberggermanacademy@gmail.com";
$txt ="Name : ". $name . "\r\n phone : " . $phone . "\r\n  Msg :" . $msg;
$sub= " $sub";
$headers = "From:" . $email;
 
if(mail($to,$sub,$txt,$headers)) {


  "Successfully Submitted";

} else {
  
 
 "Somethin wentwrong";
  
}

require_once "contact.html";
?>
