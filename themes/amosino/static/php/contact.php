<?php
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$comments = trim($_POST['message']);



$emailTo = 'amosino@ugto.mx';
$subject = $subject;
$body = $comments;
$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

$mailed = mail($emailTo, $subject, $body, $headers);

if($mailed==true){
   echo json_encode(array('status' => 'ok'));
}else{
   echo json_encode(array('status' => 'error')); 
}


?>
