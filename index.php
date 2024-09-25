<?php 
$date = new DateTime();

//Voir dans mon objet 
var_dump($date);

//Voir le timezone de mon objet 
var_dump($date->getTimezone());

//Modifier ma date et ajouter un jour
$date->modify('+1day');
//revoir dans mon objet 
var_dump($date);

//Modifier la date et le format 
$formaDate = $date->modify('+1day')->format('d/m/Y');
echo '<pre>';
var_dump($formaDate);
echo '<pre>';

