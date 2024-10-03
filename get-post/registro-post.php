<?php
session_start();

$usu_id = $_SESSION["user"]["id"];
if (
    isset($_POST['titulo']) && !empty($_POST['titulo']) &&
    isset($_POST['cuerpo']) && !empty($_POST['cuerpo'])
){
    $nuevo_post = [
        'id_usu' => $usu_id,
        'titulo' => $_POST['titulo'],
        'cuerpo' => $_POST['cuerpo']
    ];
    array_push($post, $nuevo_post);
    echo "Post creado con exito";
}
else{
    echo 'Campos vacios';
}
?>

<form action="welcome.php">
    <button type="submit">Volver al inicio</button>
</form>
<form action="CREAR-POST.php" method="post">
    <input type="submit" value="Crear post">
</form>