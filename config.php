<?php

$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
$dbname = "formulario1";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 
if ($conn){
   // echo "Coxexão OK";
} else{
    echo "Conexão com o banco Falhou";
}
?>
