<?php

include './debug/ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);	

// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		$data = $this->model->model3D_info();
		$this->load->view('viewHome', $data);
	}

	function apiCreateTable()
	{
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		ChromePhp::log('phpDebug.php: Hello World');	
		$this->load->view('view3DAppData', $data);
	}  


	// =====================================================

	function apiGetSingleValue()
	{
		$data = $this->model->dbGetSingleValue();
		$this->load->view('viewMessage', $data);
	}

	function apiGetSingleField()
	{
		$data = $this->model->dbGetSingleField('x3dModelTitle');
		ChromePhp::log($data);	
		$this->load->view('viewSingleField', $data);
	}

	function apiGetFieldProperty()
	{
		$data = $this->model->dbGetFieldProperty();
		$this->load->view('viewMessage', $data);

	}

	function apiInsertField()
	{
		/* echo "<form>";
		echo "New field name: ";
		echo "<input name='newField' type='text' />";
		echo "<br /><input type='submit' value='Submit'>";
		echo "</form>";
		ChromePhp::log("Here");	
		$field = $_POST['newField'];
		ChromePhp::log($field);	 */
		$data = $this->model->dbInsertField('KCal');
		$this->load->view('viewMessage', $data);
	}

	function apiUpdateField()
	{
		$data = $this->model->dbUpdateField('x3dModelTitle', 'X3D Fanta Model', 3);
		$this->load->view('viewMessage', $data);
	}

    // API call to read JSON data from a JSON file
	function apiGetJson()
	{
		$this->load->view('viewJson');
	}

	function apiLoadImage()
	{
	   // Get the brand data from the (this) Model using the dbGetBrand() meyhod in this Model class	
	   ChromePhp::warn('controller.php: [apiLoadImage] Get the Brand data');	
	   $data = $this->model->dbGetBrand();
	   // Note, the viewDrinks.php view being loaded here calls a new model
	   // called modelDrinkDetails.php, which is not part of the Model class
	   // It is a separate model illustrating that you can have many models
	   ChromePhp::log($data);  
	   $this->load->view('viewDrinks', $data);
	}
    
}
?>    