<?php
class CategoriesAnimaux extends Utile{
    private $id;
    private $nom;
    private $nourrituresId;

    function __construct($id, $nom, $nourrituresId){
        $this->id = $id;
        $this->inom = $nom;
        $this->$nourrituresId = $nourrituresId;
    }
}