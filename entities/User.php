<?php

class User {
  private $id;
  private $name;
  private $username;
  private $email;
  private $password;
  private $privilege;
  private $date_record;

  public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPrivilege(){
		return $this->privilege;
	}

	public function setPrivilege($privilege){
		$this->privilege = $privilege;
	}

	public function getDate_record(){
		return $this->date_record;
	}

	public function setDate_record($date_record){
		$this->date_record = $date_record;
	}

}

?>
