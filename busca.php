<?php include_once"config.php";?>


<script>
  function deleta_cliente(){
      if(confirm("Deletar esse Cliente ?"))
      document.forms[0].submit();
   else 
    return false; }
     
</script>
<?php
$busca = $_GET['busca'];
$conn =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, 'utf8');
$sql = "SELECT * FROM tbcliente WHERE nome LIKE '%$busca%'";
$result = mysqli_query($conn, $sql);
$conta = mysqli_num_rows($result);
while( $linha = mysqli_fetch_array($result)){
echo 'ID: <a href="delete.php?id='.$linha['id'].'" title="Delete" 
 onclick="return deleta_cliente();">'.$linha['id']. '</a>';
 echo '<br>';
echo 'Nome: <a href="editar.php?id='.$linha['id'].'" ">'.$linha['nome']. '</a>';
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
 echo '<br>';
 echo '<br>';
 echo '<br>';
}

echo 'Quantidade:' . $conta;

?>