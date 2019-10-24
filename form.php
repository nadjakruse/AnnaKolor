<?php
$fio = $_POST['customer_name'];
$email = $_POST['email_address'];
$text = $_POST['comments'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);
$fio = urldecode($fio);
$email = urldecode($email);
$text = urldecode($text);
$fio = trim($fio);
$email = trim($email);
$text = trim($text);


//echo $fio;
//echo "<br>";
//echo $email;


if (mail("nadya_osatyuk@hotmail.com", "Заявка с сайта", "ФИО: ".$fio."\r\nE-mail: ".$email. "\r\nСообщение: " .$text,"From: sun@soholan.net \r\n"))
 { echo "<script> alert(\"Сообщение успешно отправлено\");</script>";
header("refresh:0; url=http://shabalin.su");
} else {
    echo "при отправке сообщения возникли ошибки";
    
}



?>
