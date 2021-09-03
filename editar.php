<?php include_once"config.php";?>

<?php 
 $id = $_GET['id'];
 $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 mysqli_set_charset($conn, 'utf8');
 $sql = "SELECT * FROM tbcliente WHERE id='$id'";
 $result = mysqli_query($conn, $sql);

?>