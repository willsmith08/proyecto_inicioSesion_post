<?php 
require_once "./db-biblio/db.php";
if (isset($_POST["libro"]) and !empty($_POST["libro"])) 
{
    foreach ($libros as $libro){
        if ($libro['nombre_libro'] == $_POST['libro']){
            echo "Nombre libro: {$libro['nombre_libro']} <br>";
            echo "AUTOR: {$libro['autor']} <br>";
            break;
        }
        else{
            echo "LIBRO NO ENCONTRADO";
        }
    }
}
else{
    echo "CAMPO VACIO";
}


?>
<form action="index.php">
    <button type="submit">ATRAS</button>
</form>