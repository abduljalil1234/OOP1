<?php 
	namespace App\city;
	require 'inheritence.php';

	class BMW extends Vehicle{
		public function colors(){
			return 'red';
		}
	}
	$BMW = new BMW();
	echo $BMW->fuelAmount();
	echo "<br/>";
	echo $BMW->capacity();
	echo "<br/>";
	echo $BMW->colors();