<?php
  $db_host = 'localhost';
  $db_user = 'GoatUse';
  $db_password = 'Shelby';
  $db_db = 'db_spaceOdy';

// Création de la connexion
  $conn = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
  );
	
// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
?>