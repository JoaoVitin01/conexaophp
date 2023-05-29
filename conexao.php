<?php
$hostname ="localhost";
$bancodedados ="login";
$usuario ="root";
$senha ="";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_errno){
echo" falha ao conectar banco:(" . $mysqli-> connect_errno .")"  .$mysqli->connect_errno;

   }
    else
echo"conexao com sucesso";

 ?>