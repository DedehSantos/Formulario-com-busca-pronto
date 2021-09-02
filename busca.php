<?php include_once"config.php";?>
<?php
$busca = $_GET['busca'];
$conn =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, 'utf8');
$sql = "SELECT * FROM tbcliente WHERE nome LIKE '%$busca%'";
$result = mysqli_query($conn, $sql);
$conta = mysqli_num_rows($result);
while( $linha = mysqli_fetch_array($result)){

echo 'Nome: ' . $nome = $linha['nome'];
echo '<br>';
echo 'Endereço: ' .  $endereco = $linha['endereco'];
echo '<br>';
 echo 'Estado: ' .  $estado = $linha['estado'];
 echo '<br>';
echo  'Telefone: ' .  $telefone = $linha['telefone'];
echo '<br>';
echo 'Celular: ' .  $celular = $linha['celular'];
echo '<br>';
 echo 'Email: ' .  $email = $linha['email'];
}


?>