<?php

/**
* Plugin Name: CAPTCHA Generator
* Plugin URI: 
* Description: This WordPress plugin collects CAPTCHA images
* Version 1.0.0
* Author: Kiel Russell
*
*
*/
$root = realpath($_SERVER["DOCUMENT_ROOT]);
$simple_captcha_plugin_path = $root/CAPTCHA/wp-content/plugins/really-simple-captcha/really-simple-captcha.php";
include $simple_capture_plugin_path;
$pluggable = "$root/CAPTCHA/wp-includes/pluggable.php"; 
include $pluggable;
//generate 1000 captcha images x = num of images
for ($x = 0;  $x <= 1000; $x++)    {                      
$captcha_instance = new ReallySimpleCaptcha();
$word = $captcha_instance->generate_random_word();         
$captcha_instance->generate_image($word, $word);    
}
?>
