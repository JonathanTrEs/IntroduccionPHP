<?php
//Nos muestra todo tipo de errores (Warnings incluidos)
error_reporting(-1);
class DBStatic{

	protected static $db_user = 'bpineda';
	protected static $db_password = '12345678';
	protected static $db_database_name = 'PHP_00_DB';

	protected static function connect(){
		echo 'Conectando con : ' . self::$db_user . ':' . self::$db_password . ':' . self::$db_database_name;
	}
}

class BaseProfile extends DBStatic{

	//protected $connection_data = 'Conexion a BBDD';
	
	public function __construct(){
		//$this->connect2DB();
		self::connect();
	}

	protected function connect2DB(){
		echo $this->connection_data;
	}
}

class MyProfile extends BaseProfile{

	private $email = 'b@correo.com';
	public $name;
	public $last_name;

	/*public function __construct(){
		//$this->connect2DB();
	}*/

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		//Reglas para la asignacion del correo
		$this->email = $email;
	}

	private function message(){
		echo 'mensaje';
	}
}

/*echo DBStatic::$db_user;

echo DBStatic::$db_password;

echo DBStatic::$db_database_name;

DBStatic::connect();*/

$instMyProfile = new MyProfile();

//Esto no lo deberiamos hacer
//MyProfile::message();