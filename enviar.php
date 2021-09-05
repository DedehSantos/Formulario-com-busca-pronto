<?php include_once"config.php";
 
?>

<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 mysqli_set_charset($conn,"utf8");
 $sql = "INSERT INTO tbcliente
 (nome, endereco, estado,telefone, celular, email) VALUES ('$nome', 
 '$endereco', '$estado', '$telefone', '$celular', '$email' )";

 if(mysqli_query($conn, $sql)){
     header("location: index.php");
 } else {

   echo "Deu Error: " .  $sql  . "<br>"  . mysqli_errno($conn);
 }
 
 mysqli_close($conn);

?>