<?php 
require_once "./db/db.php";

if (isset($_POST["blo_pass"]) && !empty($_POST["blo_pass"]))
{
    foreach ($users as $user){
        $use_blo = $_COOKIE['user_bloqueado'];
        if ($user['user'] ==  $use_blo &&
        $user['password'] == $_POST["blo_pass"]
            ) {
                session_start();
                $_SESSION["user"] = $user;
                setcookie('user_bloqueado',$user_bloqueado, time() - 3600,'/');
                header("location: welcome.php");
        }
        else {
            echo "CONTRASEÑA INCORRECTA";
            break;
        }
    }
}
else{
    echo "CAMPO VACIO";
}

?>
<form action="contraseña_desblo.php">
    <button type="submit">Atras</button>
</form>