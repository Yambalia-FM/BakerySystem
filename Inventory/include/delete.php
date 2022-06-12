<?php
	include "../database.php";
	$id=$_GET['id'];
	$sqlstatement="UPDATE product SET prod_qty=0 WHERE id=".$id;
	$result=mysqli_query($connect, $sqlstatement);
    header('location:../menu.php');
?>