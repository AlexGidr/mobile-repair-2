<?php
$tel = $_POST['tel'];
$tel = htmlspecialchars($tel);
$tel = urldecode($tel);
$tel = trim($tel);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("alexpestyshev@mail.ru", "Заявка с сайта", "Телефон:".$tel ,"From: info@remont-telephonov.tech \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
