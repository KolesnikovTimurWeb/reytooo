<?php
$name = $_POST['name'];
$email = $_POST['name'];
$adress = $_POST['adress'];
$set = $_POST['set'];

$to = "mistikol654@gmail.com";
$from = $email;
$date = date("d.m.Y");
$time = date("h:i");
$token = "5844013341:AAEGuGLo5rdJuL4MH-m4MV7euXHrGZDoBAc";
$chat_id = "-959003581";
$arr = array(
  'С фиата на крипту ',
  'Имя пользователя: ' => $name,
  'email: ' => $email,
  'adress' => $adress,
  'set' => $set
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


$subject = "Заявка c сайта";

$msg = "
  'Имя пользователя: $name /n
  adress: $adress /n
  email: $email /n
  set: $set";

 if(mail($to, $subject, $msg, "From: $from ")) {
		header('location: ../form');
	} else {
        echo "Error";
      }
	

?>
