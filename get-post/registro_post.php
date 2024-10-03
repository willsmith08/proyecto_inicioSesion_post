<?php 
session_start();
require_once "./db/db.php";

$usu_id = $_SESSION["user"]["id"];

if (
    isset($_COOKIE['post'])
){
    $post = json_decode($_COOKIE['post'],true);
}

if (
    isset($_POST['titulo']) && !empty($_POST['titulo']) &&
    isset($_POST['cuerpo']) && !empty($_POST['cuerpo'])
    ){
        $new_post = [];
        $new_post[] = [
            'id_usu'=> $usu_id,
            'titulo'=> $_POST['titulo'],
            'descripcion'=> $_POST['cuerpo']
        ];
        $all_posts = array_merge($new_post, $post);
        
        $all_posts = json_encode($all_posts);
        setcookie('posts', $all_posts, time() + 3600 * 2,'/');
        header('location: welcome.php');
}
else{
    echo 'Campo/s vacio/s';
}

