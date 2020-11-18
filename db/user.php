<?php

include_once("dbManager.php");

class User extends DBManager {
	public function __construct(){
		parent::__construct("users");
	}
	// YOU CAN CHANGE THIS FUNCTION TO GET USERS BY EMAIL OR ANY OTHER FIELD
	// THIS FUNCTION WILL RETURN ONLY ONE RESULT (DBManager::getByCol returns only one result)
	// IF YOU WANT MORE THAN ONE RESULT, YOU SHOULD COPY THAT FUNCTION AND CHANGE 'fetch' BY 'fetchAll'
	public function getByName($name,$select="*"){
		// DEPENDING ON YOUR DATABASE YOU SHOULD CHANGE 'username' TO 'user'
		return $this->getByCol("username",$name,$select);
	}
}

?>
