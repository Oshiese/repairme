<?php
// Файлы phpmailer
require 'src/phpmailer/PHPMailer.php';
require 'src/phpmailer/SMTP.php';
require 'src/phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$userName = $_POST['username'];
$userPhone = $_POST['phone'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешно отправлена";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    
    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'Oshiese@yandex.ru'; // Логин на почте
    $mail->Password   = 'Adventure 402893'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom(' Oshiese@yandex.ru', 'Andrey'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('andreyall117@gmail.com');
    // -----------------------
    // Само письмо
    // -----------------------
    $mail->isHTML(true);
    
    $mail->Subject = 'Заголовок письма';
    $mail->Body    = "<b>Имя:</b> $userName <br>
    <b>Телефон:</b> $userPhone";
  
// Проверяем отравленность сообщения
if ($mail->send()) {
    header('Location: thanks.php');
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}

} catch (Exception $e) {
  echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}