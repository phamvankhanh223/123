<?php 

	$id=$_GET['id'];

	$dsn="mysql::host=localhost:81;dbname=dienthoai";
	$option=array(
		PDO::MYSQL_ATTR_INIT_COMMAND=>'Set names utf8',
		PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION

		);

	try {

		$db=new PDO($dsn, 'root', '',$option);

		
	} catch (PDOException $e) {
		echo $e->getMessage();
		exit();
		
	}
	$stmt=$db->prepare('delete from product where id=:id');
	$stmt->execute(array(
		':id'=>$id
		));

	header("location:../show.php");

 ?>