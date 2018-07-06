<!DOCTYPE html>
<html lang="en">
<head>
	<title>show</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="Asset/js/show.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
 	<link rel="stylesheet" href="Asset/css/show.css">
</head>
<body >
		<?php
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

			$stmt=$db->prepare('select * from product');
			$stmt->execute();
			$ketqua=$stmt->fetchAll(PDO::FETCH_ASSOC);


		 ?>

        <nav class="navbar navbar-light bg-faded">

          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
      
          </button>
          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <a class="navbar-brand" href="#">smartphone</a>
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">logout</a>
              </li>
            </ul>
          </div>
        </nav>
			
        
        <hr>
		<h3 class="tieude" mb-3>List SmartPhone</h3>
		

		 <table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">product name</th>
		      <th scope="col">price</th>
		      <th scope="col">date create</th>

		      <th scope="col">action</th>
		    </tr>
		  </thead>
		  <tbody>

		  <?php 
			  foreach ($ketqua as $value) {

			  
			  	 echo '<tr>
					      <th scope="row">'.$value['id'].'</th>
					      <td>'.$value['productname'].'</td>
					      <td>'.$value['price'].'</td>
					      <td>'.$value['datecreate'].'</td>
					      <td>
					      	<span><a class="fa fa-pencil btn btn-outline-success nutsua" href="Controller/Edit.php?id='.$value['id'].'"></a></span>
					      	<span><a class="fa fa-times btn btn-outline-danger nutxoa" href="Controller/Delete.php?id='.$value['id'].'"></a></span>
					      </td>
					    </tr>';


			  }
		   ?>
		   
		   
		  </tbody>
		</table>

		<a class="btn btn-primary fa fa-plus nutthem mt-2 mb-2" href="Controller/Add.php" >
		 
		</a>

		
		




</body>
</html>