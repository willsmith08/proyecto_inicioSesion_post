<?php
session_start();
require_once "./db/db.php";


if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    echo "WELCOME: {$_SESSION['user']['name']}";

} else {
    echo "No has iniciado sesión.";
    exit;
}
?>

<form action="cerrar_sesion.php" method="post">
    <input type="submit" value="Cerrar sesión">
</form>
<form action="bloqueo_sesion.php" method="post">
    <input type="submit" value="Bloquear sesión">
</form>
<form action="crear_post.php" method="post">
    <button type="submit">Crear post</button>
</form>

<?php
if (isset($posts)) {
    foreach ($posts as $post) {
        if (
            isset($post['titulo']) && isset($post['descripcion']) && 
            isset($post['id_usu']) && $post['id_usu'] == $_SESSION['user']['id']) {
            echo "Titulo: {$post['titulo']}<br>";
            echo "Descripción: {$post['descripcion']}<br>";
            echo "<hr>";
        }
    }
}




