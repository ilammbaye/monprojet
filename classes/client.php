<?php class client {

    private $prenom;
    private $nom;
    private $numero;
      
     public function __construct($prenom,$nom,$numero){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->numero=$numero;

     }

  

     public function getPrenom(){return $this->prenom;}
      public function getNom(){return $this->nom;}
      public function getNumero(){return $this ->numero;}

}