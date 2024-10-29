<?php

$server = "localhost";
$user = "root";
$pass = "";
$banco = "bibliotecaa";

if($con = mysqli_connect($server, $user, $pass, $banco)){
//echo "Conectado com sucesso!"; 
} else {
  echo "Erro na conexão!";
}