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
		
		$result = mysql_query("SELECT * FROM products $_GET[type] WHERE id='$_POST[id]'");
		$myrow = mysql_fetch_array($result);

		?>
		<form action="update_result.php?type=<?php echo $_GET['type'] ?>" method="post">
			<span>Название</span></br>
			<input type="text" name="title" value="<?php echo $myrow['title']?>" size="50"></br></br>
			<span>Описание</span></br>
			<input type="text" name="article" value="<?php echo $myrow['article']?>" size="200"></br></br>
			<span>Цена</span></br>
			<input type="text" name="price" value="<?php echo $myrow['price']?>" size="10"></br></br>
			<input type="submit" name="submit" value="Добавить"/>
		</form>
	</div>
</div>
	<?php include "box/footer.php"; ?>
</body>
</html>