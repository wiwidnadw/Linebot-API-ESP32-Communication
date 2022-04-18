<?php
require_once __DIR__ . '/lineBot.php';
echo "WELCOME TO LINE SERVER";

$bot = new Linebot();
$text= $bot->getMessageText();
$bot->reply($text);

$userid= $bot->getUserId();

$filename= 'userid.txt';


  if (file_exists($filename)) {
  $myfile = fopen('userid.txt', "w+") or die("Unable to open file!");
  fwrite($myfile, $userid);
  fclose($myfile);
} else {
  $myfile = fopen('userid.txt', "x+") or die("Unable to open file!");
  fwrite($myfile, $userid);
  fclose($myfile);
}


 
?>
