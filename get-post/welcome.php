<?php
session_start();
require_once "./db/db.php";
if (
    isset($_SESSION['user']) &&
    !empty($_SESSION['user'])
){
    echo "WELCOME: {$_SESSION['user']['name']}";
} 
?>

<form action="cerrar_sesion.php" method="post">
    <input type="submit" value="Cerrar sesión">
</form>
<form action="bloquear.php" method="post">
    <input type="submit" value="Bloquear sesión">
</form>
<form action="crear_post.php" method="post">
    <button type="submit">Crear post</button>
</form>


<?php 



