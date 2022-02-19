<?php 
	
	namespace App\city;
	
	class Vehicle{
		public $capacity = 25;
		public $fuelAmount = 35;

		public function fuelAmount(){
			return $this->fuelAmount;
		}
		public function capacity(){
			return $this->capacity;
		}
	}

	class Car extends Vehicle {
		public function getSpeed(){
			return '60 km per hour';
		}
	}

	class Bus extends Car {
		public function color(){
			return 'blue';
		}
	}
	// $bus = new Bus();
	// echo $bus->fuelAmount();
	// echo "<br/>";
	// echo $bus->capacity();
	// echo "<br/>";
	// echo $bus->getSpeed();
	// echo "<br/>";
	// echo $bus->color();