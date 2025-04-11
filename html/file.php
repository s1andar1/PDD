<?php
$filename = "JPG.jpg"
$degrees = 180;

$source = imagecreatefromjpeg($filename);
$rotate = imagerotate($source, $degrees, 0);

header('Content-Type:image/jpeg');
imagejpeg($rotate);
imagedestroy($source);
imagedestroy($rotate);
?>
