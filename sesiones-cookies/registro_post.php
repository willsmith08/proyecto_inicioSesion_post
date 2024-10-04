<?php 
session_start();
require_once "./db/db.php";

$usu_id = $_SESSION["user"]["id"];

if (isset($_POST['titulo']) && !empty($_POST['titulo']) &&
    isset($_POST['cuerpo']) && !empty($_POST['cuerpo'])) {

    if (isset($_COOKIE['posts'])) {
        $posts = json_decode($_COOKIE['posts'], true);
    } else {
        $posts = [];
    }

    $new_post = [
        'id_usu' => $usu_id,
        'titulo' => $_POST['titulo'],
        'descripcion' => $_POST['cuerpo']
    ];

    $posts[] = $new_post;

    $post_json = json_encode($posts);
    setcookie('posts', $post_json, time() + 3600 * 2, '/');

    header('Location: welcome.php');
} else {
    echo 'Campo/s vacio/s';
}




