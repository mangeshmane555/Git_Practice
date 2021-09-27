<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CRUD App</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mystyle.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/bootstrap.js'); ?>">
		
		<!-- <script type="text/css" href="<?php echo base_url('assets/js/MyScript.js'); ?>"> </script> -->

	</head>
	<body>

		<!--below is to show the version of php xampp -->
		<!-- <?php
			echo phpinfo();
		?> -->

	<div class="card mt-4">
		<div class="card-header row">
			<div class=" col-md-10"><h3>View Records</h3></div>

			<!-- Header Button to add record -->
			<div class="col-md-2" ><a href="<?php echo base_url('books/create'); ?>" class="btn btn-primary text-right"> Add Record</a></div>
		</div>
			
			<div class="card-body">
				<div class="container-fluid">
					<div class="row">
						<table class="table table">
							<tr>
								<th>Id</th>
								<th>Title</th>
								<th>Author</th>
								<th>ISBN No</th>
								<th>Action</th>
							</tr>

								<?php if(!empty($books)) 
								{ 
									// array variable $book in foreach loop
									foreach($books as $book)  
									{ 
								?>

									<tr>
										<td><?php echo $book['id']; ?></td>
										<td><?php echo $book['title']; ?></td>
										<td><?php echo $book['author']; ?></td>
										<td><?php echo $book['isbn_no']; ?></td>
										
										<td>
											<!-- sending id to the specified page using base_url() -->
											<a href="<?php echo base_url('books/edit/'.$book['id']); ?>" class="btn btn-primary">Edit</a>
											<a href="<?php echo base_url('books/view/'.$book['id']); ?>" class="btn btn-success">View</a>

											<!-- Sending id to the js function  -->
											<a href="#" onclick="deleteConfirm(<?php echo $book['id']; ?>);" class="btn btn-danger">Delete</a>
										</td>
									</tr>

								<?php } ?>

						<?php 	} else 
									{ ?>
										<tr>
											<td colspan="5" class="text-center"><h3>Records not found !!</h3></td>
										</tr>
									<?php } ?>

						</table>
					</div>
				</div>
			</div>
	</div>

	<script type="text/javascript">

			function deleteConfirm(id) 
			{
				// alert('Id is '+ id);	

				if(confirm("Are you want to delete ?"))
				{
					window.location.href='<?php echo base_url('books/delete/') ?>/'+id;

				}
			}

	</script>
</body>
</html>