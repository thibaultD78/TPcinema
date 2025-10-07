<?php
include "Film.php";
include "Realisateur.php";
include "acteur.php";
$real1=new Realisateur("Jimenez","Cédric");
$real2=new Realisateur("Gozian","Yann");
$real3=new Realisateur("Reeves","Matt");
$acteur1= new Acteur("Gilles","Lellouche",false);
$acteur2= new Acteur("Karim","Leklou",false);
$acteur3= new Acteur("Pierre","Niney",true);
$acteur4= new Acteur("Lou","De Laâge",false);
$acteur5= new Acteur("André","Dussolier",true);
$acteur6= new Acteur("Robert","Pattinson",true);
$acteur7= new Acteur("Zoë","Kravitz",false);
$acteur8= new Acteur("Paul","Dano",false);

$listActeur1=[
    0=>$acteur1,
    1=>$acteur2
];
$listActeur2=[
    0=>$acteur3,
    1=>$acteur4,
    2=>$acteur5
];
$listActeur3=[
    0=>$acteur6,
    1=>$acteur7,
    2=>$acteur8
];

$film1 = new Film (1,"Bac Nord",563921,$real1,$listActeur1);
$film1->setNbEntrees(789345);
$film2 = new Film (2,"Boîte Noire",432789,$real2,$listActeur2);
$film3 = new Film (3,"The Batman",879214,$real3,$listActeur3);

$listfilm = [
    0=>$film1,
    1=>$film2,
    2=>$film3
];
$nbFilm = count($listfilm);
for ($film=0;$film<$nbFilm;$film++){
    echo "Infos sur le film ==>\n".$listfilm[$film]->getIdFilm()." - ".$listfilm[$film]->getNomFilm()." - ".$listfilm[$film]->getNbEntrees()." - ".$listfilm[$film]->getReal()->getnomReal()." - ".$listfilm[$film]->getReal()->getprenomReal()."\n";
    $nbActeur = count($listfilm[$film]->getlistActeur());
    for($acteur=0;$acteur<$nbActeur;$acteur++){
        echo $listfilm[$film]->getlistActeur()[$acteur]->getPrenom()." - ".$listfilm[$film]->getlistActeur()[$acteur]->getnom()." - ".$listfilm[$film]->getlistActeur()[$acteur]->getaUnCesar()." \n ";
    }
}

