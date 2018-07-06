<?php 

header('Content-Type: text/html; charset=UTF-8');
		 if(isset($_POST['nutadd']))
		 	{

		 		$productname=$_POST['productname'];
		 		$description=$_POST['description'];
		 		$price=$_POST['price'];
		 		
		 	

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
				$stmt=$db->prepare('insert into product(productname,price,description) values(:productname,:price,:description');
				$data=array('productname'=>$productname,'price'=>$price,'description'=>$description);
				$stmt->execute($data);

				header("location:../show.php");
			
			 }


 ?>