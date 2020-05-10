<?php
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
if($usuario == "pepe" && $clave == "1234"){
    session_start();
    $_SESSION["usuario"]=$usuario;
    header("Location: interno.php");
    exit();
}
header("Location: login.php");
exit();
?>