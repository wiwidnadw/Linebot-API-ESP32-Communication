<?php
require_once __DIR__ . '/lineBot.php';
echo "WELCOME TO LINE SERVER";

$bot = new Linebot();
$text= $bot->getMessageText();
$bot->reply($text);

//$userid= $bot->getUserId();

$filename= 'command.txt';


  if (file_exists($filename)) {
  $myfile = fopen('command.txt', "w+") or die("Unable to open file!");
  fwrite($myfile, $text);
  fclose($myfile);
} else {
  $myfile = fopen('command.txt', "x+") or die("Unable to open file!");
  fwrite($myfile, $text);
  fclose($myfile);
}


 
?>
