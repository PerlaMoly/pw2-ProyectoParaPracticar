<?php
session_start();
if(!isset($_SESSION["usuario"])){
    echo "usted ingresó sin pasar por el login";
    exit();
}
echo $_SESSION["usuario"];
<<<<<<< HEAD
include_once 'logout.php';

=======
include_once 'cerrarSesion.php';
>>>>>>> origin/master

?>
