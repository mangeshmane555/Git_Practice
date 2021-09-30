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
				<div class="col-md-10"><h3>View Records</h3></div>
				<div class="col-md-2" ><a href="<?php echo base_url('books'); ?>" class="btn btn-primary text-right"> Home</a>
				</div>
			</div>
			
			<div class="card-body">
				<div class="container">
				<h2> View Book Record </h2> 
				<hr>

					<form name="viewForm" id="viewForm">
					<!-- -------------------------------------View Modal starts here---------------------------------------------- -->
						<div class="row form-group">
							<label class="col-md-4 control-label"> Book ID:</label>
							<div class="col-md-8">
								<!-- <input type="number" name="id" class="form-control col-4" value="<?php echo set_value('id', $book['id']); ?>"> -->
								<p><b><?php echo $book['id'] ?></b></p>
							</div>
						</div>
					
						<div class="row form-group">
							<label class="col-md-4 control-label"> Book Title:</label>
							<div class="col-md-8">
								<!-- <input type="text" name="title" class="form-control col-4" value="<?php echo set_value('title', $book['title']); ?>"> -->
								<p><b><?php echo $book['title'] ?></b></p>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-md-4 control-label"> Book Author:</label>
							<div class="col-md-8">
								<!-- <input type="text" name="author" class="form-control col-4" id="author" value="<?php echo set_value('author', $book['author']); ?>"> -->
								<p><b><?php echo $book['author'] ?></b></p>
							</div>
						</div>
						
						<div class="row form-group">
							<label class="col-md-4 control-label"> ISBN No:</label>
							<div class="col-md-8">
								<!-- <input type="text" name="isbn_no" class="form-control col-4" value="<?php echo set_value('isbn_no', $book['isbn_no']); ?>"> -->
								<p><b><?php echo $book['isbn_no'] ?></b></p>
								<br>
								<a href="<?php echo base_url('books'); ?>" class="btn btn-secondary text-white btn-sm" name="cancel_view" role="button" onclick='window.location.reload();' data-dismiss="modal">Close</a> &nbsp &nbsp
							</div> 
						</div>
					</form>
				</div>      	
				
			</div>
		</div>			
    	<!-- ------------------------------------------View Modal ends here----------------------------------------- -->
	</body>
</html>