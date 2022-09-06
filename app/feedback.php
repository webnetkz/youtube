<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!empty($_POST['name']) && isset($_POST['name']) && !empty($_POST['phone']) && isset($_POST['phone'])) {
  // несколько получателей
  $to  = 'info@lpride.kz' . ', '; // обратите внимание на запятую
  $to .= 'dbqqbq@gmail.com';

  // тема письма
  $subject = 'Заявка с Lpride.kz';

  // текст письма
  $message = '
Заявка с сайта Lpride.kz
Имя : '.$_POST['name'].'
Телефон: '.$_POST['phone'].'
Страница с которой были отправлены данные: '.$_GET['path'].'
';

  // Для отправки HTML-письма должен быть установлен заголовок Content-type
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-Type: text/plain; charset="UTF-8"' . "\r\n";

  // Дополнительные заголовки
  $headers .= 'To: Lpride <info@lpride.kz>' . "\r\n";
  $headers .= 'From: From <info@lpride.kz>' . "\r\n";
  $headers .= 'Cc: info@lpride.kz' . "\r\n";
  $headers .= 'Bcc: info@lpride.kz' . "\r\n";

  // Отправляем
  mail($to, $subject, $message, $headers);
  

  echo '<script>
    location.href = "../index.php?mes=yes";
  </script>';
} else {
  header("Location: ../index.php?mes=0");
}

?>
