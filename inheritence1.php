<?php 
	
	class Factory{
		public $polithine;
		public $sendel;


		public function setPolithine($polithine){
			 $this->polithine = $polithine;
		}
		public function setSendel($sendel){
			 $this->sendel = $sendel;
		}
		public function getPolithine(){
			return $this->polithine;
		}
		public function getSendel(){
			return $this->sendel;
		}
	}

	class Garments extends Factory{
		public $sari;

		public function setSari($sari){
			$this->sari = $sari;
		}
		public function getSari(){
			return $this->sari;
		}
	}

	$garments = new Garments();
	$garments->setPolithine('the polithine is a simple');
	$garments->setSendel('this sendel is normal');
	$garments->setSari('The roggin sari is a great important');
	
	echo $garments->getPolithine();
	echo "<br/>";
	echo $garments->getSendel();
	echo "<br/>";
	echo $garments->getSari();
	