<?php
//Class PARENT

abstract class Utile{

//Attributs
	protected $id;
	protected $nom;
	public static $planningSoigneurs = [];
	public static $listePlanning = [];

//Methode

function __construct($id = null, $nom = null){
	$this->id = $id;
	$this->nom = $nom;
}

public static function ajouterSoigneur(Soigneur $soigneur){
	array_push(self::$planningSoigneurs, $soigneur);
}

public static function ajouterConge(Planning $planning){
	array_push(self::$listePlanning, $planning);
}


//Getter
public function __get($property) {
	if(!isset($this->$property)){
		return "Propriété Invalide";
	}
	else {
		return $this->$property;
	}
}

//Setter

public function __set($property, $value){
	if(!isset($this->$property)){
		echo "Propriété '$property' Invalide <br>";
		}
	else {if ($property == "id") {
			echo "Propriété '$property' Non modifiable <br>";
		}
			else
			{
			return $this->$property = $value;
			}
		}
	}
}

?>