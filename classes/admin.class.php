<?php 
class Admin extends Utilisateur{
    protected $ban;
    
    public function __construct($n,$p){
        $this -> user_name = strtoupper($n);
        $this -> user_pass = $p;
    }
    // On tente d'afficher $user_name qui n'existe pas dans admin
    public function getNom2(){
        return $this->user_name;
    }


    /* on surcharge la methode getNom() de Utilisateur. Ici, on conserve
    le meme code dans la méthode mais c'est cette méthode qui sera utilisée
    pas $pierre
         public function getNom(){
        return strtoupper($this->user_name); //strtoupper transforme le résultat renvoyé en majuscules ( string to upper).
    }*/

    public function setBan($b){
        $this->ban[] .= $b;
    }
    public function getBan(){
        echo 'Utilisateur bannis par '.$this->user_name. ' : ';
        foreach($this-> ban as $valeur){
            echo $valeur . ',';
        }
    }


}