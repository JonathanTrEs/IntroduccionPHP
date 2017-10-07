<?php

class Pet{
	public $name = 'Firulais';
}

class Person{
	public $age;
	public $name;
	private $money_in_wallet;
	private $todos;
	private $married;

	public function __construct($name){
		$this->name = $name;
	}

	public function run(){
		echo 'Estoy corriendo';
	}

	public function walk(){
		echo 'Estoy caminando';
	}

	public function greet(Person $other_person){
		echo 'Hola, ' . $other_person->name;
	}

	public function adopt(Pet $instance_pet){
		echo 'Hey, adopte a ' . $instance_pet->name;
	}
}

$person1 = new Person('Bernardo');
$person2 = new Person('Francisco');
$pet = new Pet();

$person1->greet($person2);
$person1->adopt($pet);