<?php

Class Film {
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;
    private Realisateur $real;
    private $listActeur = array();

    public function __construct(int $idFilm,string $nomFilm,int $nbEntrees,Realisateur $real/*, array $listActeur*/){
        $this->idFilm=$idFilm;
        $this->nomFilm=$nomFilm;
        $this->nbEntrees=$nbEntrees;
        $this->real=$real ;
        /*$this->listActeur = $listActeur*/;
    }

    public function getlistActeur():array{
        return $this->listActeur;
    }
    public function getReal():Realisateur{
        return $this->real;
    }
    public function setReal(Realisateur $real):void{
        $this->real=$real;
    }
    public function getIdFilm():int{
        return $this->idFilm;
    }
    public function getnomFilm():string{
        return $this->nomFilm;
    }
    public function getnbEntrees():int{
        return $this->nbEntrees;
    }
    public function setIdFilm(int $idFilm):void{
        $this->idFilm=$idFilm;
    }
    public function setNomFilm(int $nomFilm):void{
        $this->nomFilm=$nomFilm;
    }
    public function setNbEntrees(int $nbEntrees):void{
        $this->nbEntrees=$nbEntrees;
    }
    public function addActeur(Acteur $acteur):void{
        $this->listActeur[]=$acteur;
    }
}