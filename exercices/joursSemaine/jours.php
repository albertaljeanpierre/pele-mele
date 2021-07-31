<?php
$jours = [1 => 'Lundi',2 => 'Mardi',3 => 'Mercredi',4 => 'Jeudi',5 => 'Vendredi',6 => 'Samedi',7 => 'Dimanche', ];

$msg = array();
 
$jour = isset($_GET['jour']) ? $_GET['jour'] : NULL;  

if(isset($jour)){
    if (!is_numeric($jour) ||  !array_key_exists($jour , $jours)) {
        $erreur = TRUE;
    } else {
        $erreur = FALSE;
        $msg['jour'] = $jours[$jour];
    }
}else {
    $erreur = TRUE;
}


if ($erreur) {
    $msg['jour'] =  "$jour n'est pas un numéro de jour valide!"; 
}


echo json_encode($msg); 
