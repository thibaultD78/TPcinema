<?php

Class Realisateur{
    private string $premonReal;
    private string $nomReal;
    
    public function getnomReal():string{
        return $this->nomReal;
    }
    public function getprenomReal():string{
        return $this->prenomReal;
    }
    public function __construct(string $nomReal,string $prenomReal){
        $this->prenomReal=$prenomReal;
        $this->nomReal=$nomReal;
    }
}