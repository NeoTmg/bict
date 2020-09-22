<?php 

session_start();

$md5_hash = md5(rand(0,999));
$captcha = substr($md5_hash, 15,5);

$_SESSION['captcha'] = $captcha;

header("Content-Type: image/png");
$img = @imagecreate(150, 30);
$bg_color = imagecolorallocate($img, 15, 100, 100);
$colort = imagecolorallocate($img, 149, 69, 19); 

//imagestring($img, 20, 10, 5, $captcha, $colort);
imagestring($img, 20, 10, 10, $captcha, $colort);
imagepng($img);
imagedestroy($img);


?>