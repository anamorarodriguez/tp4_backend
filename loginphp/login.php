<?php
$usuario = $_POST ["usuario"];
$contrasena = $_POST ["contrasena"];

$ckusuario = "admin";
$ckcontrasena = 1234;

if ($usuario==$ckusuario & $contrasena==$ckcontrasena) {
    header ("location:https://codepen.io/ace-subido/pen/nLgWyj");   
} else {
    echo "Incorrecto";
    header ("location:https://assets-blog.hostgator.mx/wp-content/uploads/2018/10/paginas-de-error-hostgator.webp");
}

?>