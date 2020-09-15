<?php

class Nourriture extends Utile implements Alert{
    protected $qte;
    protected $lieux;

    public function __construct($id, $nom, $qte, $lieux){
        parent::__construct($id, $nom);
        $this->qte = $qte;
        $this->lieux = $lieux;
    }

    public function Alert(){
        if(($this->qte) < 200){
            echo "Passer commande de : $this->nom .<br/>";
        }
    }
}
