<?php
	class Persona {
	    public $nombre;
		public $apellido;
		public function hablar(){	
	      echo "soy  " .$this->nombre. "  y estoy hablando";
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
	echo "hola ".$p1->nombre."<br>";
	
	$p->hablar();
	echo "<br>";
	$p1->hablar();
	
?>