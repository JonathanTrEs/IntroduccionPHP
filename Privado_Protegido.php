<?php

class BaseProfile{

	protected $connection_data = 'Conexion a BBDD';
	
	public function __construct(){
		$this->connect2DB();
	}

	protected function connect2DB(){
		echo $this->connection_data;
	}
}

class MyProfile extends BaseProfile{

	public $name;
	public $last_name;

	public function __construct(){
		$this->connect2DB();
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		//Reglas para la asignacion del correo
		$this->email = $email;
	}
}

$instBase = new BaseProfile();