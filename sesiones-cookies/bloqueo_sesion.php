<?php
session_start();
$user_bloqueado = $_SESSION['user']['user'];
setcookie('user_bloqueado',$user_bloqueado, time() + 3600,'/');
session_destroy();
header('location: contraseña_desblo.php');



