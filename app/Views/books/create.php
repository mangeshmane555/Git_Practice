<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CRUD App</title>
		<!-- The below link files added to this document need to start the php inbuilt server by using the php spark serve command -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mystyle.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/bootstrap.js'); ?>">
	</head>
	<body>
		
		<div class="card mt-4">
			<div class="card-header row">
				<div class="col-md-10">Add Records</div>
				<div class="col-md-2" ><a href="<?php echo base_url('books'); ?>" class="btn btn-primary text-right"> Home</a></div>
			</div>


			<div class="card-body">
				<div class="container">
					<form name="createForm" id="createForm" action="<?php echo site_url('Book/insert');?>" method="post">
						
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control col-4" id="title" placeholder="Please enter title" value="">
							
						</div>
						
						<div class="form-group">
							<label>Author</label>
							<input type="text" name="author" class="form-control col-4" id="author" placeholder="Please enter author" value="">
							
						</div>

						<div class="form-group">
							<label>ISBN No</label>
							<input type="text" name="isbn_no" class="form-control col-4" id="isbn_no" placeholder="Please enter isbn" value="">
							
						</div>
						
						<div class="form-group">
							<a href="<?php echo base_url('books'); ?>" class="btn btn-secondary text-right"> Cancel</a>
							<button type="submit" id="send_form" class="btn btn-success">Submit</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>