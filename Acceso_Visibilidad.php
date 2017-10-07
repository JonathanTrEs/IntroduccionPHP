<?php

class MyProfile{

	private $email = 'b@correo.com';
	public $name;
	public $last_name;

	public function __construct(){

	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		//Reglas para la asignacion del correo
		$this->email = $email;
	}

	private function getDetails(){
		//No accesible desde fuera
	}
}

$instMyProfile = new MyProfile();

//$instMyProfile->email = 'jonathantruest@gmail.com';

echo $instMyProfile->getEmail();