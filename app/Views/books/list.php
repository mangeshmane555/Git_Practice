<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CRUD App</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mystyle.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/bootstrap.js'); ?>">
		
		<!-- Using Google CDN for Bootsrap-- It Workinf for the modals and scripts for online -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
									// array variable $book in foreach loop-- book work as a single row
									foreach($books as $book)  
									{ 
								?>

									<tr>
										<td class="book_id"><?php echo $book['id']; ?></td>
										<td><?php echo $book['title']; ?></td>
										<td><?php echo $book['author']; ?></td>
										<td><?php echo $book['isbn_no']; ?></td>
										
										<td>
											<!-- sending id to the specified page using base_url() -->
											<a href="<?php echo base_url('books/edit/'.$book['id']); ?>" class="btn btn-primary "> Edit </a>
											<a id="<?php echo $book['id']; ?>" class="btn btn-success text-white view_btn" role="button"> View </a>

											<!-- Sending id to the js function  -->
											<a href="#" onclick="deleteConfirm(<?php echo $book['id']; ?>);" class="btn btn-danger"> Delete </a>
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

<!-- Display_Modal Starts here -->
		<div id="displayRecordModal" class="modal fade" role="dialog">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		    	<!--Display_Modal Header -->
				    <div class="modal-header">
				        <h4 class="modal-title">Display Book Details</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				    </div>
		    	
		    	<!--Display_Modal Body -->
				    <div id="book_details" class="modal-body" >  		
					<form name="viewForm" id="viewForm">
					<!-- -------------------------------------View Modal starts here---------------------------------------------- -->
						<div class="row form-group">
							<label class="col-md-4 control-label"> <b> ID : </b> </label>
							<div class="col-md-8">
								<!-- <input type="number" name="id" class="form-control col-4" value="<?php echo set_value('id', $book['id']); ?>"> -->
								<p id="md_id"></p>
							</div>
						</div>
					
						<div class="row form-group">
							<label class="col-md-4 control-label"> <b>Book Title :</b> </label>
							<div class="col-md-8">
								<!-- <input type="text" name="title" class="form-control col-4" value="<?php echo set_value('title', $book['title']); ?>"> -->
								<p id="md_title"></p>

							</div>
						</div>

						<div class="row form-group">
							<label class="col-md-4 control-label"> <b> Author : </b> </label>
							<div class="col-md-8">
								<!-- <input type="text" name="author" class="form-control col-4" id="author" value="<?php echo set_value('author', $book['author']); ?>"> -->
								<p id="md_author"></p>
							</div>
						</div>
						
						<div class="row form-group">
							<label class="col-md-4 control-label"> <b> ISBN No : </b> </label>
							<div class="col-md-8">
								<!-- <input type="text" name="isbn_no" class="form-control col-4" value="<?php echo set_value('isbn_no', $book['isbn_no']); ?>"> -->
								<p id="md_isbn_no"></p>
								<br>
							</div> 
						</div>
					</form>			
					</div>	
					
			    <!--Display_Modal footer -->
			      	<div class="modal-footer">
					  <a href="<?php echo base_url('books'); ?>" class="btn btn-secondary text-white btn-sm" name="cancel_view" role="button" onclick='window.location.reload();' data-dismiss="modal">Close</a> &nbsp &nbsp
			      	</div>
				</div>
			</div>
		</div>
			<!-- The Display_Modal End here -->						

	<script type="text/javascript">

			function deleteConfirm(id) 
			{
				// alert('Id is '+ id);	

				if(confirm("Are you want to delete ?"))
				{
					window.location.href='<?php echo base_url('books/delete/') ?>/'+id;
				}
			}
			
//Ajax call to fetch data usinf book_id from list and show it on modal view wen clicked on view_btn
			$(document).ready(function()
			{
				$(document).on('click','.view_btn', function()
				{
					// var book_id = $(this).closest('tr').find('.book_id').text(); //Working
					var book_id = $(this).attr("id");  //Working statement to fetch id attribute of book
					// alert("Id fetched is ="+ book_id);
					
					$.ajax({
							method:"GET",
							url:"Book/viewRecord",    //To send book_id to the given url as to viewRecord method of Book Controller
							data:{ book_id:book_id }, 
							success:function(response) 
							{
								// console.log(response); //Print all data of jason received 
								$.each(response, function(key, bookview)
								{
									// console.log(bookview['title']);
									$('#md_id').text(bookview['id']);
									$('#md_title').text(bookview['title']);
									$('#md_author').text(bookview['author']);
									$('#md_isbn_no').text(bookview['isbn_no']);

								})
								$('#displayRecordModal').modal("show");
							}
						});
				});

			});

	// Function To Show record data on modal
			// $(document).ready(function()
			// {
			// 	// $('#dataTable').DataTable();
			// 	$('.view_data').click(function()
			// 	{
			// 		var book_id = $(this).attr("id"); //To access the id attribute of clicked button
			// 		console.log("*********************id Number on clicked " +" "+ book_id);
					
			// 		$.ajax({
			// 				url:"/books/list/"+book_id, //Here you will fetch records 	
							// url : "<?php echo base_url(); ?>list/view/"+book_id,
			// 				method:"get",
			// 				data:{book_id:book_id}, //send $book_id to list.php file
			// 				success:function(res) //get back the result from the product_show.php file
			// 				{
			// 					$('#md_id').html(res['book_id']);  //Show fetched data from database or server
			// 					// $('#md_title').html(res.title);
			// 					// $('#md_author').html(res.author);
			// 					// $('#md_isbn_no').html(res.isbn_no);

			// 					$('#displayRecordModal').modal("show");
			// 				}
			// 			});
			// 	});
			// });

			

	</script>
</body>
</html>