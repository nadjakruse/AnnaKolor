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
 {     echo "сообщение успешно отправлено";
  header("Location: http://sabalin.su/index2.html"); путь что откроется после отправления
 // echo "<script>document.location.href='/indexsite.html';</script>"; или так ?
} else {
    echo "при отправке сообщения возникли ошибки";
}

//refresh:5;

?>
