<?php
include "Realisateur.php";
include "Film.php";
$film1 = new Film (1,"Bac Nord",563921);
$film1->setNbEntrees(789345);
$film2 = new Film (2,"Boîte Noire",432789);
$film3 = new Film (3,"The Batman",879214);
$listfilm = [
    0=>$film1,
    1=>$film2,
    2=>$film3
];
$nbFilm = count($listfilm);
for ($film=0;$film<$nbFilm;$film++){
    echo "Infos sur le film ==>\n".$listfilm[$film]->getIdFilm()." - ".$listfilm[$film]->getNomFilm()." - ".$listfilm[$film]->getNbEntrees();
}

