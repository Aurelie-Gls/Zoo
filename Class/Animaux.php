<?php

class Animaux extends Utile{
    protected $race;
    protected $besoinQte;

    public function __construct($id, $race, $besoinQte){
        parent::__construct($id);
        $this->race = $race;
        $this->besoinQte = $besoinQte;
    }
}

