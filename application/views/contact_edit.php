<!DOCTYPE html>
<html lang="en"><head>
	<title> Example </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href=".<?= base_url() ?>vendor/bootstrap.min.css">
</head>
<body >
<div class="container">
 			<div class="row text-xs-center">
 				<div class="col-md-8 push-md-2">
 					<h4>
 						Sua Contact
 					</h4>
 				</div> 
 			</div>
 		</div>
 		<div class="container">
 			<div class="row">
 				<div class="row">	
 				</div>
 				<div class="col-md-8 push-md-2">
 					<div class="card card-block">
	 					<form class="text-xs-center" action="<?= base_url() ?>contact/contact_do_edit"  method="post" enctype="multipart/form-data">
		 						 <?php foreach ($dl as $key => $value):  ?>
		 					
		 					<div class="form-group row">
		 						<label for="id" class="col-sm-2 form-control-label"></label>
		 						<div class="col-sm-10">
		 							<input type="hidden" class="form-control" id="id" name="id" placeholder="Ho va ten" value="<?= $value["id"] ?>">
		 						</div>
		 					</div>
		 					<div class="form-group row">
		 						<label for="ten" class="col-sm-2 form-control-label">Ho Ten</label>
		 						<div class="col-sm-10">
		 							<input type="text" class="form-control" id="ten" name="name" placeholder="Ho va ten" value="<?= $value["name"] ?>">
		 						</div>
		 					</div>
		 					<div class="form-group row">
		 						<label for="phone1" class="col-sm-2 form-control-label">phone1</label>
		 						<div class="col-sm-10">
		 							<input type="text" class="form-control" id="phone1" name="phone1" placeholder="phone1" value="<?= $value["phone1"] ?>" >
		 						</div>
		 					</div>
		 					<div class="form-group row">
		 						<label for="phone2" class="col-sm-2 form-control-label">phone2</label>
		 						<div class="col-sm-10">
		 							<input type="text" class="form-control" id="phone1" name="phone2" placeholder="phone2" value="<?= $value["phone2"] ?>" >
		 						</div>
		 					</div>

		 					<div class="form-group row">
		 						<label for="Email" class="col-sm-2 form-control-label">Email</label>
		 						<div class="col-sm-10">
		 							<input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?= $value["email"] ?>" >
		 						</div>
		 					</div>
							<div class="form-group row">
		 						<label for="fb" class="col-sm-2 form-control-label">facebook</label>
		 						<div class="col-sm-10">
		 							<input type="text" class="form-control" id="fb" name="fb" placeholder="facebook" value="<?= $value["fb"] ?>" >
		 						</div>
		 					</div>
		 					<div class="form-group row">
		 						<label for="company" class="col-sm-2 form-control-label">company</label>
		 						<div class="col-sm-10">
		 							<input type="text" class="form-control" id="company" name="company" placeholder="company" value="<?= $value["company"] ?>" >
		 						</div>
		 					</div>
		 					
		 						


		 					<div class="form-group row">
		 						<div class="push-sm-1 col-sm-10">
		 							<button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-danger">Reset</button>
		 						</div>
		 					</div>
		 				<?php endforeach ?>
	 				</form>
	 			</div>
 				</div>
 				
 			</div>
 		</div>
 	</body>
 	</html>