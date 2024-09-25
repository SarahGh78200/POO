<?php  
//La déclaration de type stricte n'est autorisée que depuis  PHP 7.0
declare(strict_types=1);

class Voiture 
{
//Propriétés de la voiture  

 public float $vitesse;    

 public string $marque;

 public float $temps;

 public function calculerDistance ()
 {
    //Calcule la distance  en multipliant la vitesse par le temps et ajoute l'unite 
    return $this->vitesse * $this ->temps;
    //Pour pouvoir appeler une méthode static a l'intérieur de sa classe 
    //on utilise le mot self::
 }
 static function getInfos ()
 {
    return "Cette classe permet de calculer la distance parcouru par une voiture en fonction de sa vitesse et du temps";
 }
 static function getUnite() : string
 {
    return "km";
 }
}
//Accedr a une methode static 
echo Voiture::getInfos();
echo Voiture::getUnite();

//Creation d'une instance de la classe Voiture 
$voiture = new Voiture();

$Voiture->vitesse = 55;
$voiture->marque ='Citroen';
$Voiture->temps =2;
//Affichage du contenu de l'objet $Voiture (pour débogage)
echo"<pre>";
var_dump($voiture);
echo"</pre>";
//Affichage du contenu de l'objet $Voiture (pour débogage)


