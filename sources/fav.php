<?php
$text=file_get_contents('php://input');
if ($text!="") {
  file_put_contents('fav.json', $text);
  echo($text);
}
?>