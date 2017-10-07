<?php
class Person {

	public $age;
	public $name;

    public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	public function run(){
		echo 'Estoy corriendo';
	}

}

$person = new Person('Jonathan', 24);

echo $person->name;

$person->run();