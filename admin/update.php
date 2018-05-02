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
		<form action="update_form.php?type="<?php echo $_GET['type'] ?>" method="post">
			<span>ID</span></br>
			<input type="text" name="id" size="10"></br></br>
			<input type="submit" name="submit" value="Далее" name="submit">
		</form>
	</div>
</div>
	<?php include "box/footer.php"; ?>
</body>
</html>