<?php 

$hostname = "l127.0.0.1";
$banco = "biblioteca";
$usuario = "user";
$senha = "password";

$mysqli = new mysqli($hostname, $usuario, $senha, $banco);

if($mysqli->connect_error){
  die("Falha ao conecta no banco de dados" . $mysqli->connect_error);
}else{
    echo "Connected";
}

?>