<?php

$api = $_GET['api'];
$idadmin = $_GET['admin'];
$adminID = $idadmin;
$userbot = $_GET['userbot'];

$content = file_get_contents("php://input");
$update = json_decode($content, true);

foreach($plugins as $plugin => $active)
{
if($active) include($plugin);
}


$file = "input.json";
$f2 = fopen($file, 'w');
fwrite($f2, $content);
fclose($f2);



if($msg == "/start")
{
sm($chatID, "Il Bot funziona!
Tastiera normale: /tastiera
Tastiera inline: /itastiera
Iscritti: /iscritti
Feedback: /feedback
Foto: /foto");
}

?>
