<?php
	class Persona {
	    public $nombre;
		public $apellido;
		public function hablar(){	
	      echo "soy  " .$this->nombre. "  y estoy hablando";
		}
		public function acariciar($perrito){
		   $perrito->moverCola();
		}
	}
	
	class perro{
	    public $nombre;
		public function moverCola(){
			echo "muevo la Cola";		
		}
	}
	
	
	$p = new Persona();
	$p->nombre = "micaela";
	$p1= new Persona();
	$p1-> nombre = "juan";
	$p1-> apellido = "perez";
	echo $p->nombre;
	echo "<br>";
	echo "<br>";
	echo "hola ".$p->nombre."<br>";
	echo "<br>";
	echo "<br>";
	echo "hola ".$p1->nombre."<br>";
	
	$p->hablar();
	echo "<br>";
	$p1->hablar();
	
	$perro = new perro();
	echo "<br>";
	echo "<br>";
	$perro-> moverCola();
	echo "<br>";
	echo "<br>";
	$p->acariciar($perro);
	
	
?>