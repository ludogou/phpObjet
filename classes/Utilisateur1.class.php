<?php
class Utilisateur{
    protected $user_name;
    protected $user_region;
    protected $prix_abo;
    protected $user_pass;
    public const ABONNEMENT = 15;

    public function __construct($n,$p,$r){
        $this -> user_name = $n;
        $this -> user_pass = $p;
        $this -> user_region = $r;
    }
    public function __destruct()
    {
        
    }
    public function getNom(){
      echo $this->user_name;   
    }

    public function setPrixAbo(){
        /* on imagine qu'on calcule un prix d'abo différent selon les profils utilisateur*/
        if($this->user_region === 'Sud'){
            return $this->prix_abo = self::ABONNEMENT/2;
        } else{
            return $this->prix_abo = self::ABONNEMENT;
        }
    }
    public function getPrixAbo(){
      echo  $this->prix_abo;
    }
}