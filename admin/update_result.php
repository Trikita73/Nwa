<!DOCTYPE html>
<html>
<head>
	<title>Изменить товар</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="container" id="holder">
	<?php include "box/header.php"; ?>
	<?php include "box/menu.php"; ?>
	
	<div class="container_c">
		<?php include "box/db.php"; 

			$result = mysql_query("UPDATE products SET title='$_POST[title]',article='$_POST[article]',price='$_POST[price]' WHERE id='$_GET[id]'");

			if($result == true)
			{
				echo "Информация изменена успешно!";
			}
			else 
			{
				echo "Информация не изменена!";
			}

		?>
	</div>
</div>
	<?php include "box/footer.php"; ?>
</body>
</html>