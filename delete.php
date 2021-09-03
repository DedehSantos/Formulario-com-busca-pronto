<?php include_once "config.php";?>


<?php 
  
  $id = $_GET['id'];
  $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
  mysqli_select_db($conn, 'dbname');
  $sql = "DELETE FROM tbcliente WHERE id='$id'";

  if(mysqli_query($conn, $sql)){
      header("location:index.php");
  } else {
      echo "não deletei";
  }




?>