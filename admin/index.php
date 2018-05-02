<?php
	$id = $_GET['id'];
	$type =$_GET['type'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="container" id="holder">
	<?php include "box/header.php"; ?>
	<?php include "box/menu.php"; ?>
	
	<div class="container_c">
		<?php include "box/db.php";

		$result = mysql_query("SELECT * FROM products");
		while($myrow = mysql_fetch_array($result))
		{
			echo <<<TABLE
			<table class="product">
				<tr class="products">
					<th class="cont_product">ID:</th>
					<td>$myrow[id]</td>
				</tr>

				<tr class="products">
					<th class="cont_product">Название товара:</th>
					<td>$myrow[title]</td>
				</tr>

				<tr class="products">
					<th class="article_cnt">Описание:</th>
					<td>$myrow[article]</td>
				</tr>

				<tr class="products">
					<th class="cont_product">Цена:</th>
					<td>$myrow[price]$</td>
				</tr>
			</table>
TABLE;
		}
		?>
	</div>
</div>
	<?php include "box/footer.php"; ?>
</body>
</html>



			
