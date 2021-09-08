<?php include_once"config.php";?>
<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, "utf8");
$sql = "UPDATE tbcliente SET nome='$nome', endereco='$endereco', 
estado='$estado', telefone='telefone', celular='$celular', email= 
'$email'  WHERE id='$id'";

if(mysqli_query($conn, $sql)){
    echo "<script> alert('$nome Salvo Com Sucesso'); window.location = 
    'editar.php?id=$id';</script>";
} else {
  echo "Não Atualizei";
}

?>