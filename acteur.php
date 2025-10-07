<?php
Class Acteur{
    private string $prenom;
    private string $nom;
    private bool $aUnCesar;

    public function __construct(string $prenom, string $nom, bool $aUnCesar){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->aUnCesar=$aUnCesar;
    }

    public function getPrenom():string{
        return $this ->prenom;
    }
    public function setPrenom($prenom):void{
        $this->prenom=$prenom;
    }
    public function getnom():string{
        return $this ->nom;
    }
    public function setnom($nom):void{
        $this->nom=$nom;
    }
    public function getaUnCesar():bool{
        return $this ->aUnCesar;
    }
    public function setaUnCesar($aUnCesar):void{
        $this->aUnCesar=$aUnCesar;
    }

}