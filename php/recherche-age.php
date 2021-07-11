<?php
$toDay = new DateTime();
$strToDay = $toDay->format('Y-m-d');

if (isset($_POST['dateOfBirth'])) {
    $dateOfBirth = $_POST['dateOfBirth'];
    $target = new DateTime($dateOfBirth);

    $interval = $toDay->diff($target);
    // var_dump($interval);
    $message = "Vous avez  $interval->y ans $interval->m mois $interval->d jours";
}
?> 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Recherche de l'age en fonction de la date de naissance</title>
    </head>
    <body>
        <form method="post">
            <label for="dateOfBirth">Entrer votre date de naissance : </label>
            <input type="date" max="<?php echo $strToDay; ?>" name="dateOfBirth" id="dateOfBirth">
            <input type="submit" value="Calculer votre age">
            <?php
            if (isset($_POST['dateOfBirth'])) {
               echo $message;
            }
            ?>
        </form>
    </body>
</html>
