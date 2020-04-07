<!--==============================================================-->
<?php
include("../config/connect.php");
$name_post = '';
$des_post= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM news WHERE id=$id";
  $result = mysqli_query($connection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name_post = $row['name_post'];
    $des_post = $row['des_post'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name_post= $_POST['name_post'];
  $des_post = $_POST['des_post'];

  $query = "UPDATE news set name_post = '$name_post', des_post = '$des_post' WHERE id=$id";
  mysqli_query($connection, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<!--==============================================================-->

<!--==============================================================-->
<html>
<head lang="RU">
  <meta CHARSET="UTF-8">
  <title>Редактирование</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!--====================[HEADER]====================-->
<nav class="navbar navbar-light bg-light container mt-5">
  <a class="navbar-brand" href="#">MyPHP</a>
</nav>
<!--===============================================-->

<!--====================[MAIN CONTENT]====================-->
<div class="container mt-5">
<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
  <div class="form-group">
          <input name="name_post" type="text" class="form-control" value="<?php echo $name_post; ?>">
  </div>
  <div class="form-group">
        <textarea name="des_post" class="form-control" cols="30" rows="10"><?php echo $des_post;?></textarea><br>

    <button class="btn btn-dark" name="update">Редактировать</button>
  </div>
</form>
</div>
<!--====================================================--> 
</body>
</html>
<!--==============================================================-->