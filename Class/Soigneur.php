<?php

class Soigneur extends Utile {
    protected $prenom;
    protected $specialite;

    public function __construct($id, $nom, $prenom, $specialite){
        parent::__construct($id, $nom);
        parent::ajouterSoigneur($this); //AJoute le soigneur en cours d'instance = $this -> tout l'objet, tout attributs compris
        $this->prenom = $prenom;
        $this->specialite = $specialite;       
    }

    public function Nourrir(Nourriture $nourriture, Animaux $animal) {
        $nourriture->qte -= $animal->besoinQte;
        $nourriture->Alert();
    }

    public function Soigner(Soin $soin, Animaux $animal) {
        $soin->qte -= $animal->besoinQte;
        $soin->Alert();
    }

    public function Conges($date){
        foreach(parent::$listePlanning as $dateConge){
            if(($dateConge->date == $date) && ($dateConge->soigneur == $this)){
                echo "Congé annulé, fallait pas demander 2 fois la même date !! Apprends à utiliser le logiciel !<br/>";
            } 
        }
        $newPlanning = new Planning($this, $date, "absent");
            if($newPlanning->Alert($newPlanning->compteSoigneursDispo()) == false){
                unset(parent::$listePlanning[array_search($newPlanning, parent::$listePlanning)]);
            }
    }
}