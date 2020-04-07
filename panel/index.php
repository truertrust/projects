<!--==============================================================-->
<?php include("../config/connect.php"); ?>
<!--==============================================================-->

<!--==============================================================-->
<html>
<head lang="RU">
	<meta CHARSET="UTF-8">
	<title>Панель управления</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!--====================[HEADER]====================-->
<nav class="navbar navbar-light bg-light container mt-5">
  <a class="navbar-brand" href="#">MyPHP</a>
  <a href="add-news.php" class="btn">Создать новость</a>
</nav>
<!--===============================================-->

<!--====================[MAIN CONTENT]====================-->
  <?php
    $query = "SELECT * FROM news";
    $result_tasks = mysqli_query($connection, $query);    

    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
      <div class="container mt-5">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Название новости</th>
                <th scope="col">Краткое описание новости</th>
                <th scope="col">Полное описание новости</th>
                <th scope="col">Действие</th>
            </tr>
         </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['name_post']; ?></td>
        <td><?php echo $row['des_post']; ?></td>
        <td><?php echo $row['description'] ?></td>
        <td>              
        <a href="../view.php?id=<?php echo $row['id']?>" class="btn"><p>Просмотреть</p></a>
        <a href="edit.php?id=<?php echo $row['id']?>" class="btn"><p>Редактировать</p></a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="btn"><p>Удалить</p></a>
      </td>
    </tr>
 

      </div>
          <hr>
          <?php } ?>
<!--====================================================--> 
</body>
</html>
<!--==============================================================-->