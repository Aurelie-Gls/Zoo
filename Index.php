<?php

require "Class/Autoloader.php";
Autoloader::register();

$Nourriture = new Nourriture(001, "viande", 500, "congélateur de l'entrepôt 3");
$Nourriture->Alert();//vérifie
$Nourriture->qte=150;
$Nourriture->Alert();//affiche

echo "<br/>";
$soin = new Soin(002, "Doliprane", 80, "pharmacie principale");
$soin->Alert();
$soin->qte=30;
$soin->Alert();

echo "<br/>";
$soigneurJean = new Soigneur(003, "Dupond", "Jean", "carnivores");
$planning = new Planning($soigneurJean, "15/10/2019", "en congé");
$planning->Alert($planning->compteSoigneursDispo());
echo "<pre>";
var_dump(Utile::$planningSoigneurs);
echo "</pre>";

echo "<br/>";
$soigneurJean->Conges("15/10/2019");

echo "<br/>";
$tigre = new Animaux(001, "carnivore", 150);
$soigneurJean->Nourrir($Nourriture, $tigre);