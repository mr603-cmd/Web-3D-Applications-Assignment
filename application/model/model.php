<?php

class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		$user = 'user';
		$pass = 'password';
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
			PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
		];
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, $user, $pass, $options);
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Max. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}

	public function dbGetBrand()
	{
		// Return the Brand Names
		return array("-", "Coke", "Coke Light","Coke Zero","Sprite", "Dr Pepper", "Fanta");
	}

	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'X3D Coke Model', 'Blender', 'Coke Can','Original Coca Cola','fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'X3D Sprite Model', 'Blender', 'Sprite Can','Original Sprite','Leading lemon and lime flavoured soft drink'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'X3D Fanta Model', 'Blender', 'Fanta Can','Original Fanta','Leading orange flavoured soft drink'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (4, 'X3D Pepper Model', 'Blender', 'Dr Pepper Can','Original Dr Pepper','sparkling blend of 23 fruit flavours has been around for well over a century'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				ChromePhp::log($data);	

				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}

	public function dbGetSingleField($field)
	{
		try{
			$sql = 'SELECT * FROM Model_3D';
			print($sql);
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// output data of each row
			while($data = $stmt->fetch()) {
				ChromePhp::log($data);	
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				ChromePhp::log($result);	
				//increment the row index
				$i++;
			}
		}
		
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;

		return $result;
	}

	public function dbInsertField($field)
	{
		try{
			$this->dbhandle->exec(
			"ALTER TABLE Model_3D
			ADD $field varchar(255);");
			return "'".$field."' field inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbUpdateField($field, $value, $id)
	{
		try {
			$this->dbhandle->exec(
			"UPDATE Model_3D
			SET $field = $value
			WHERE Id = $id;");
			return "'".$field."' field updated successfully 
			to '".$value."' where Id is '".$id."' inside test1.db";	
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	/* 
	public function dbGetSingleValue($value)
	{
		try{
			$this->dbhandle->exec(
			
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		//$this->dbhandle = NULL;
	} */

	/* $stmt = $conn->query("SELECT firstnme, lastname FROM employee");
	while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
		print "Name: <p>{$row[0] $row[1]}</p>";
	} */


	/* public function dbGetFieldProperty()
	{
		try{
			$this->dbhandle->exec(
			
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		//$this->dbhandle = NULL;
	}*/

	

	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke Can 3D Image 1',
			'image3D_1' => 'coke_1',

			'model_2' => 'Coke Can 3D Image 2',
			'image3D_2' => 'coke_2',

			'model_3' => 'Sprite Bottle 3D Image 1',
			'image3D_3' => 'sprite_1',

			'model_4' => 'Sprite Bottle 3D Image 2',
			'image3D_4' => 'sprite_2',

			'model_5' => 'Dr Pepper Cup 3D Image 1',
			'image3D_5' => 'pepper_1',

			'model_6' => 'Dr Pepper Cup 3D Image 2',
			'image3D_6' => 'pepper_2'
		);
	}
}
?>