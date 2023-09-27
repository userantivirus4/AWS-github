<?php
 //connexion a la base de donnée

 $con = mysqli_connect("localhost", "root", "", "testsimplon");

// Vérifier la connexion
if (!$con) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}





?>