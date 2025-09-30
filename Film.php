<?php

Class Film{
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;

    public function __construct(int $name,string $nomFilm,int $nbEntrees){
        $this->name=$name;
        $this->nomFilm=$nomFilm;
        $this->nbEntrees=$nbEntrees;
    }

    public function getIdFilm(){
        return $this->name;
    }
    public function getnomFilm(){
        return $this->nomFilm;
    }
    public function getnbEntrees(){
        return $this->nbEntrees;
    }
    public function setIdFilm(int $idFilm){
        $this->idFilm=$idFilm;
    }
        public function setNomFilm(int $nomFilm){
        $this->nomFilm=$nomFilm;
    }
        public function setNbEntrees(int $nbEntrees){
        $this->nbEntrees=$nbEntrees;
    }
}