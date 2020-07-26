<?php

	session_start();

	if(isset($_SESSION['usuario'])){


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>inicio</title>
<?php require_once "menu.php"; ?>
</head>
<body>
</body>
</html>
<?php
	}else{
		header("location:../index.php");
	}
?>