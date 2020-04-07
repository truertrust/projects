<!--==============================================================-->
<html>
<head lang="RU">
	<meta CHARSET="UTF-8">
	<title>Добавление новости</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!--====================[HEADER]====================-->
	<nav class='navbar navbar-light bg-light container mt-5'>
		<a class='navbar-brand' href='#'>MyPHP</a>
	</nav>
<!--===============================================-->

<!--====================[MAIN CONTENT]====================-->
<div class='container mt-5'>
	<form class='' action='sending.php' method='POST'>
		<input class='form-control' type='text' id='' name='name_post' placeholder='Введите название новости' required><br>
		<textarea class='form-control' type='text' id='' name='des_post' placeholder='Введите краткое описание новости' required></textarea><br>
		<textarea class='form-control' type='text' id='' name='description' placeholder='Введите описание новости' required></textarea></br>
		<button class='btn btn-dark' type='submit' name='button-submit'>Продолжить</button>
</div>
<!--====================================================--> 
</body>
</html>
<!--==============================================================-->