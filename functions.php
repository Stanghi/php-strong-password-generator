<?php
$char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=';
$pswLength = $_GET['pswLength'];
$psw = '';

for ($i = 0; $i < $pswLength; $i++) {
    $psw = $psw . $char[rand(0, strlen($char) - 1)];
}

if (isset($pswLength)) {
    session_start();
    $_SESSION['psw'] = $psw;
    header('Location: ./landingpage.php');
}
