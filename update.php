<?php 

	$con = mysqli_connect('127.0.0.1', 'root', 'root', 'inst'); 

	mysqli_query($con, "UPDATE insta SET text='".$_GET['text']."' , img ='".$_GET['img']."' WHERE id=2 ");
	header('Location: http://25urok/index.php');
?> 