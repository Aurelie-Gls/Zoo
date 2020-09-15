<?php

class Planning extends Utile implements Alert{
    protected $soigneur;
    protected $date;
    protected $statut;

    public function __construct($soigneur, $date, $statut){
        parent::ajouterConge($this);
        $this->soigneur = $soigneur;
        $this->date = $date;
        $this->statut = $statut;
    }

    public function Alert($soigneursRestants = 2){
        if(($soigneursRestants) <= 2){
            echo "Vous ne pouvez pas partir en vacances ! Comme c'est dommage ! <br/>";
            return false;
        }else{
            echo "Bonnes vacances ! ";
            return true;
        }
    }

    public function compteSoigneursDispo(){
        $nbSoigneur = count(parent::$planningSoigneurs);
        if(count(parent::$listePlanning) > 0){
            foreach(parent::$listePlanning as $liste){
                if($this->date == $liste->date){ // si a cette date là il y a un congé
                    echo "il y a " . $nbSoigneur . " soigneur.<br/>";
                    $nbSoigneur--;
                }
            }
        }
        return $nbSoigneur;
    }
}

?>
