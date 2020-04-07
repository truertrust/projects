<!--==============================================================-->
<?php

include("../config/connect.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM news WHERE id = $id";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die("Запрос не выполнен.");
  }

  header('Location: index.php');
}

?>
<!--==============================================================-->