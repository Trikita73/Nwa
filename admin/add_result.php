<!DOCTYPE html>
<html>
<head>
	<title>Добавить новый товар</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="container" id="holder">
	<?php include "box/header.php"; ?>
	<?php include "box/menu.php"; ?>
	
	<div class="container_c">
		<?php
		include "box/db.php";

		$result = mysql_query("INSERT INTO prod (title,article,price) VALUES ('$_POST[title]','$_POST[article]','$_POST[price]')");

		if($result == true)
		{
			echo "Данные добавлены!";
		}
		else 
		{
			echo "Ошибка!";
		}

		?>
	</div>
</div>
<footer>
	<div class="footer_cnt">
		<p class="fnt">Copyright</p>
	</div>
</footer>
</body>
</html>