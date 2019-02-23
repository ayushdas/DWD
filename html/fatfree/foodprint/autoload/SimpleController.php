<?php
// Class that provides methods for working with the form data.
// There should be NOTHING in this file except this class definition.

class SimpleController {
	private $mapper;
	
	public function __construct() {
		global $f3;						// needed for $f3->get() 
		$this->mapper = new DB\SQL\Mapper($f3->get('DB'),"feedbackTable");	// create DB query mapper object
																			// for the "simpleModel" table
		// $this->mapper = new DB\SQL\Mapper($f3->get('DB'),"feedbackTable");
	}
	
	public function putIntoDatabase($data) {	
		$this->mapper->name = $data["name"];
		$this->mapper->surname = $data["surname"];					// set value for "name" field
		$this->mapper->email = $data["email"];
		$this->mapper->tel = $data["tel"];
		$this->mapper->message = $data["message"];
		// $this->mapper->colour = $data["colour"];
		// $this->mapper->address = $data["address"];				// set value for "colour" field
		$this->mapper->save();
		// $this->mapper->name = $data["name"];					// set value for "name" field
		// $this->mapper->surname = $data["surname"];
		// $this->mapper->email = $data["email"];
		// $this->mapper->tel = $data["tel"];
		// $this->mapper->message = $data["message"];																// set value for "colour" field
		// $this->mapper->save();														// save new record with these fields
	}
	
	public function getData() {
		$list = $this->mapper->find();
		return $list;
	}
	
	public function deleteFromDatabase($idToDelete) {
		$this->mapper->load(['id=?', $idToDelete]);				// load DB record matching the given ID
		$this->mapper->erase();									// delete the DB record
	}
	
}

?>
