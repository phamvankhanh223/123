<?php 

header('Content-Type: text/html; charset=UTF-8');
		 if(isset($_POST['nutupdate']))
		 	{

		 		$productname=$_POST['productname'];
		 		$description=$_POST['description'];
		 		$price=$_POST['price'];
		 		$id=$_POST['id'];
		 	

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
				$stmt=$db->prepare('update product set productname=:productname, price=:price, description=:description where id=:id');

				$stmt->execute(array(
					':productname'=>$productname,
					':price'=>$price,
					':description'=>$description,
					':id'=>$id

					));

				header("location:../show.php");
			
				

				// if(count($ketqua)>=1)
				// {
				// 	session_start();
				// 	$_SESSION['username'] = $username;
				// 	echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công.
				// 	 <a href='../show.php'>Về trang chủ</a>";
   	// 				 die();

				// }

				// else
				// {
				// 	echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     				exit;
				// }
			
			
			 }


 ?>