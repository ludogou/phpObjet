<?php 
class Admin extends Utilisateur{
    protected $ban;
    public const ABONNEMENT = 5;
    
    public function __construct($n,$p,$r){
        $this -> user_name = strtoupper($n);
        $this -> user_pass = $p;
        $this -> user_region = $r;
    }
    // On tente d'afficher $user_name qui n'existe pas dans admin
    public function getNom(){
        parent :: getNom();
        echo ' (depuis la classe étendue)';
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
        echo '<p> Utilisateur bannis par '.$this->user_name. ' : ';
        foreach($this-> ban as $valeur){
            echo $valeur . ',';
           
        }
        echo '</p>';
    }
    public function setPrixAbo(){
        if($this->user_region ==='Sud'){
            return $this->prix_abo = self ::ABONNEMENT;
        } else {
            return $this->prix_abo = parent::ABONNEMENT/2;
        }
    }


}