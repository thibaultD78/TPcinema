<?php

include "Film.php";
$film1 = new Film (1,"Bac Nord",563921);
$film1->setNbEntrees(789345);
echo "Infos sur le film ==>\n".$film1->getIdFilm()." - ".$film1->getNomFilm()." - ".$film1->getNbEntrees();