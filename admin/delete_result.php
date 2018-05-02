<!DOCTYPE html>
<html>
<head>
	<title>Удалить товар</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="container" id="holder">
	<?php include "box/header.php"; ?>
	<?php include "box/menu.php"; ?>
	
	<div class="container_c">
		<?php include "box/db.php";
		$result= mysql_query("DELETE FROM prod WHERE id='$_POST[id]'");

		if($result == true)
		{
			echo "Информация товара была успешно удалена!";
		}
		else 
		{
			echo "Товар не был удален!";
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