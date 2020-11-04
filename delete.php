<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'vk');
	$zapros_delete = mysqli_query($connect, "DELETE FROM friends WHERE id =". $_GET['id']);
	header("Location: index.php");
?>