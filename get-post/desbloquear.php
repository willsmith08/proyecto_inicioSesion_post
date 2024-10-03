<?php
session_start();
require_once "./db/db.php";
if (
    isset($_POST['blo_pass'])  && !empty($_POST['blo_pass'])
    ){
        if ($_POST['blo_pass'] == $_SESSION['user']['password']){
            header('location: welcome.php');
        }
        else{
            echo'Contraseña incorrecta';
        }
}
else{
    echo 'Campo vacio';
}