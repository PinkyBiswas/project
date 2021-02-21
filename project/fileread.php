<?php

$fileLocation = "data.txt";
$file = fopen($fileLocation, 'r');
$content = fread($file, filesize($fileLocation));
$items = explode("-", $content);
echo $items[0]."<br>";
echo $items[1]."<br>";

$nameItem = explode(":", $items[0]);
$nameLabel = $nameItem[0];
$name = $nameItem[1];

echo $name;
fclose($file);
?>