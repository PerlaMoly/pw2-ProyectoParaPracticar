<?php
if(!isset($_COOKIE["PruebadeCookie"])){
    setcookie("PruebadeCookie","Hola",time()+3600);
}else{
    echo $_COOKIE["PruebadeCookie"];
    setcookie("PruebadeCookie","Hola",time()-3600);
}
?>
