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
				<div class="col-md-10"><h3>Edit Records</h3></div>
				<div class="col-md-2" ><a href="<?php echo base_url('books'); ?>" class="btn btn-primary text-right"> Home</a>
				</div>
			</div>
			
			<div class="card-body">
				<div class="container">

<!-- //In form action value is to send form data to the update method of Book Controller -->
					<form name="editForm" id="editForm" action="<?php echo site_url('Book/update');?>" method="post">
						
						<div class="form-group">
							<!-- <label>ID</label> -->
							<input type="hidden" name="id" class="form-control col-4" value="<?php echo set_value('id', $book['id']); ?>">
							
						</div>

						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control col-4" placeholder="Please enter title" value="<?php echo set_value('title', $book['title']); ?>">
							
						</div>
						
						<div class="form-group">
							<label>Author</label>
							<input type="text" name="author" class="form-control col-4" id="author" placeholder="Please enter author" value="<?php echo set_value('author', $book['author']); ?>">
							
						</div>

						<div class="form-group">
							<label>ISBN No</label>
							<input type="text" name="isbn_no" class="form-control col-4" placeholder="Please enter isbn" value="<?php echo set_value('isbn_no', $book['isbn_no']); ?>">
							
						</div>
						
						<div class="form-group">
							<a href="<?php echo base_url('books'); ?>" class="btn btn-secondary text-right"> Cancel</a>
							<button type="submit" id="send_form" class="btn btn-success">Update</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</body>
</html>