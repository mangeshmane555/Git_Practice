<?php
namespace App\Controllers;
use App\Models\BookModel;

class Book extends BaseController
{
// Home Section---------------------------------------
	public function index()
	{
		helper('form');
		helper('url');
		// echo"Hello ";
		// echo view('books/list');
		// return view('books/create');

		//if model is imported then create object and call the method to get data from model
		$model = new BookModel();
		$booksArray = $model->getRecords();  //Get array data from model function getRecords()
		$data['books'] = $booksArray;  // assign got array to the user defined array $data
		return view('books/list', $data); 

	}
//Create Section---------------------------------------
	public function create()
	{
		helper('form');																			
		helper('url');

		return view('books/create');
		// to create a session_commit()  
		// // $session = \Config\Services::session();  
		// helper('form');
		// $session->setFlashdata('success','Record added successfully !!');
		// return redirect()->to('/books'); //books is a table in databse ci4_crud
	}

//To insert selected record of book from book list--------------------------------------------
	public function insert()
	{
		helper('form');
		helper('url');
		
		$model = new BookModel();
		$data = [
		'title'=>$this->request->getPost('title'),
		'author'=>$this->request->getPost('author'),
		'isbn_no'=>$this->request->getPost('isbn_no')
		];

		$model->insert($data);
		return redirect()->to('/books');
	}

//To edit selected record of book from book list--------------------------------------------
	public function edit($id)
	{
		helper('form'); //Load helpers in function of controllers and cannot add it to autoload.php in CI 4		
		helper('url');
		
		$model = new BookModel();
		$book = $model->getRow($id); // getting single row passed from model
		// print_r($book);
		
		if (empty($book))
		{
			return redirect()->to('/books'); // If id have wrong hard input parameter to address bar
		}

		$data = [];
		$data['book'] = $book;  
		// print_r($data['book']);

		//Passing the data of array to the view edit.php view to prefill the values in textbox
		return view('books/edit', $data); 
	}

//To update selected record of book from book list---------------------------------------
	public function update()
	{
		helper('form'); //Load helpers in function of controllers and cannot add it to autoload.php in CI4		
		helper('url');
		
		$model = new BookModel();
		$id = $this->request->getVar('id'); //getting the id from url which is posted when clicked on edit button of related id 
		// print_r($id); 	

		// getting the Data in array which is to be update 
		$data = [];
		$data = [
				'title'=>$this->request->getPost('title'),
				'author'=>$this->request->getPost('author'),
				'isbn_no'=>$this->request->getPost('isbn_no')
			];
			// print_r($id);
			// print_r($data);
		$model->update($id, $data);   //update command using model
		return redirect()->to('/books');
	} 

//To View selected record of book from book list 
public function view($id)
{
	helper('form'); //Load helpers in function of controllers and cannot add it to autoload.php in CI 4		
	helper('url');
	
	$model = new BookModel();
	$book = $model->getRow($id); // getting single row passed from model
	// print_r($book);
	
	if (empty($book))
	{
		return redirect()->to('/books'); // If id have wrong hard input parameter to address bar
	}

	$data = [];
	$data['book'] = $book;  
	// print_r($data['book']);

	//Passing the data of array to the view edit.php view to prefill the values in textbox
	return view('books/view', $data); 
}


//To delete selected record of book from book list 
	public function delete($id)
	{
		// $session = \Config\Services::session();
		$model = new bookModel();
		$book =$model->getRow($id);

		// if(empty($book))
		// {
		// 	$session->setFlashdata('error', 'Record Not Found !!');
		// 	return redirect->to('/books');
		// }

		$model->delete($id);
		// $session->setFlashdata('success', 'Record Deleted Successfully  !!');
		return redirect()->to('/books');
	}

}

?>