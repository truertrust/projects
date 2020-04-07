<!--==============================================================-->
<?php

include_once("../config/connect.php");

if (isset($_POST['button-submit'])) {
  $name_post = $_POST['name_post'];
  $des_post = $_POST['des_post'];
  $description = $_POST['description'];
  $query = "INSERT INTO news(name_post, des_post, description) VALUES ('$name_post', '$des_post', '$description')";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die("Запрос не выполнен.");
  }
  header('Location: index.php');

}

?>
<!--==============================================================-->