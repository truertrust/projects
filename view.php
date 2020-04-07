<!--====================================================-->
<?php 

include_once("config/connect.php");

$id = $_GET['id'];
$result = mysqli_query($connection, "SELECT * FROM news WHERE id=$id");

	while($res = mysqli_fetch_array($result)) {
		echo "<title>".$res['name_post']."</title>";
		echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
		echo "<meta charset='utf-8'>";
		echo "<nav class='navbar navbar-light bg-light container mt-5'>
    			<a class='navbar-brand' href='#'>MyPHP</a>
			</nav>";

		echo "<div class='container mt-5'>";
			echo "<div class='card'>";
				echo "<div class='card-body'>";
					echo "<p>Название: ".$res['name_post']."</p>";
					echo "<p>Краткое описание: ".$res['des_post']."</p>";
					echo "<p>Полное описание: ".$res['description']."</p>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
?>
<!--====================================================-->