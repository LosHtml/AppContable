<?php

session_start();

if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['usuario_t'] != 2){
        Header('Location_ ../');
    }
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            Soy administrador ehhhhhhhhhhhhhhhhhhhhhhhh 
        </h1>

        <ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="  ">""</a></li>
						<li><a href="">""</a></li>
						<li><a href="">"</a></li>
						<li><a href="../../config/desconexion.php">>Salir</a></li>
					</ul>


    </body>
</html>