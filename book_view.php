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
<!-- This is comment to know the git practice -->
<!-- Display_Modal Starts here -->
		<div class="modal fade" id="displayRecordModal">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		    
		    	<!--Display_Modal Header -->
				    <div class="modal-header">
				        <h4 class="modal-title">Display Book Details</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				    </div>
		    	
		    	<!--Display_Modal Body -->
				    <div class="modal-body" id="book_details">  						
					</div>	
					
			    <!--Display_Modal footer -->
			      	<div class="modal-footer">
			      		<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
			      	</div>
				</div>
			</div>
		</div>
			<!-- The Display_Modal End here -->

	</body>
</html>



