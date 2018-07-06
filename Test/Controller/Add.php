<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<title>show</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src=../Asset/js/angular.min.js></script>
	<script type="text/javascript" src="../vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="../Asset/js/show.js"></script>
	<link rel="stylesheet" href="../vendor/bootstrap.css">
	<link rel="stylesheet" href="../vendor/font-awesome.css">
 	<link rel="stylesheet" href="../Asset/css/show.css">
</head>

<body>
	<div class="container" ng-controller="mainCtrl">
		<h3 class="tieude text-xs-center mt-3">add product</h3>
		<div class="row">
			<div class="col-sm-10 push-sm-1">
				<form method="post" action="AddSucssess.php">

					<div class="thongbao" ng-if="productname.length==0">
						vui lòng nhập vào productname của sản phẩm!
					</div>

					<div class="thongbao" ng-if="description.length==0">
						vui lòng nhập vào mô tả ngắn về sản phẩm của bạn!
					</div>

					<div class="thongbao" ng-if="price.length==0 ">
						vui lòng nhập vào price của sản phẩm!
					</div>


					<div class="form-group row mt-2">
						<label for="inputEmail3" class="col-sm-2 form-control-label">ProductName: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="productname" ng-model="productname" id="inputEmail3" placeholder="ProductName">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail5" class="col-sm-2 form-control-label">Description: </label>
						<div class="col-sm-10">
							<textarea id="inputEmail5"  class="form-control" name="description" ng-model="description" placeholder="Description" >
								
							</textarea>
						</div>
						
					</div>
					<div class="form-group row">
						<label for="inputPassword4" class="col-sm-2 form-control-label">Price</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" ng-model="price" name="price" id="inputPassword4" placeholder="Price" >
						</div>
					</div>
		
					
					<div class="form-group row">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-secondary" name="nutadd">add</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
	
</body>
 </html>