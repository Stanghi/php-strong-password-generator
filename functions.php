<?php
$char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=';
$pswLength = $_GET['pswLength'];
$psw = '';

for ($i = 0; $i < $pswLength; $i++) {
    $psw = $psw . $char[rand(0, 83)];
}
