<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];
$form = $_POST['form']; 

if ($form == 'subscribe') {
  $title = "Новое подписка на сайте Best Tour Plan";
  $body = "
  <h2>Новая подписка</h2>
  <b>e-mail:</b><br>$email
  ";
} else {
  // Формирование самого письма
  $title = "Новое обращение Best Tour Plan";
  $body = "
  <h2>Новое обращение</h2>
  <b>Имя:</b> $name<br>
  <b>Телефон:</b> $phone<br><br>
  <b>Сообщение:</b><br>$message
  ";
};


// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    include('settings.php');

    // Получатель письма
    $mail->addAddress('shantonio@mail.ru');  

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

    // Проверяем отравленность сообщения
    if ($mail->send()) {$result = "success";} 
    else {$result = "error";}

    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }

    // Отображение результата
    echo json_encode(["result" => $result, "status" => $status]);