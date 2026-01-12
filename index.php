<?php
echo('Hello, world!');

 
$chat_name = "@topicdaily";
$token = "8127692420:AAE9KspSYSY8WnJ5FBEMTY5hJcW14pku6d4";
$message = "Здравствуйте.\nЭто тестовое сообщение, отправленное ботом с помощью PHP-скрипта.\n\nВсем хорошего дня.";
 
$text = urlencode($message);
$url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_name}&text={$text}";
 
$ch = curl_init();
$optArray = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch);

?>
