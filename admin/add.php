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
		<form action="add_result.php?type=<?php echo $_GET['type'] ?>" method="post">
			<span>Название</span></br>
			<input type="text" name="title" size="50"></br></br>
			<span>Описание</span></br>
			<input type="text" name="article" size="100" style="height:100px;"></br></br>
			<span>Цена</span></br>
			<input type="text" name="price" size="10"></br></br>
			<input type="submit" name="submit" value="Добавить"/>
		</form>
	</div>
</div>
	<?php include "box/footer.php"; ?>
</body>
</html>