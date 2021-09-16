<?php
namespace App\Models;
use CodeIgniter\Model;

class BookModel extends Model
{
	protected $table = 'books';
	protected $primaryKey = 'id';
	protected $allowedFields = ['title','author','isbn_no'];

	public function getRecords()   //user Defined Function to fetch records
	{
		return $this->findAll();   //built in method to fetch all records
	}

	public function getRow($id)   //user Defined Function to fetch one row of table
	{
		// SELECT * FROM books WHERE id = $id;
		// return $this->where('id', '$id')->find();   //return a single row using query builder method
		return $this->find($id);  //return a single row of selected id using model to controller
		
	}


}
	
?>