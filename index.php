<!--==============================================================-->
<?php 
include_once("config/connect.php");
?>
<!--==============================================================-->

<!--==============================================================-->
<html lang="RU">
<head>
  <meta CHARSET="UTF-8">
  <title>Главная</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> <!--[Подключение BootStrap]-->
</head>
<body>
<!--==============================================================-->

<!--====================[HEADER]====================-->
<nav class='navbar navbar-light bg-light container mt-5'>
    <a class='navbar-brand' href='#'>MyPHP</a>
  </nav>
<!--===============================================-->

<!--====================[MAIN CONTENT]====================-->
<?php
  $page=$_GET['page'];
    if($page == '' || $page == 1)
      {
        $page1 = 0;
      } else {
        $page1=($page*5)-5;
      }


  $sql = "SELECT * FROM news limit $page1,5";
  $result=mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
  { 
    echo 
    "<div class='container mt-5'>".
      "<div class='card'>".
          "<div class='card-header'>".
            $row['name_post'].
          "</div>".
          "<div class='card-body'>".
            "<p class='text-muted'>Краткое описание: ".$row['des_post']."<br>".
            "<a href='view.php?id=".$row['id']."'>Просмотреть</a>".
          "</p></p></div></div></div>";
  } 
    $sql1 = "SELECT * FROM news";
    $result1=mysqli_query($connection,$sql1);
    $count=mysqli_num_rows($result1);
    $a = ceil($count/5);
    echo "<br><br>";
    for($b=1;$b<=$a;$b++)
  {
  ?>
  <nav>
    <ul class="pagination container">
    <a href="index.php?page=<?php echo $b; ?>" class="page-link"><?php echo $b." "; ?></a> <?php
  }
?>
    </ul>
  </nav>
<!--====================================================-->
</body>
</html>
<!--==============================================================-->