<?php

// definit les variables et cree la nouvelle bdd
$dsn = 'mysql:dbname=camagru;host=localhost;port=8080';
$username = 'root';
$password = '123456';

try {
  $db = new PDO($dsn, $username, $password); // cree une nouvelle instance PDO
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // on gere les erreurs en mode exception
} catch(PDOException $e) {
  echo "Échec lors de la connexion : " . $e->getMessage();
}

// requete pour creer la table des utilisateurs
$createTableUser = "CREATE TABLE IF NOT EXISTS 'tb_user'
(
  'userID' int(11) NOT NULL AUTO_INCREMENT,
  'userName' varchar(100) NOT NULL,
  'userEmail' varchar(100) NOT NULL,
  'userPass' varchar(100) NOT NULL,
  'userStatus' enum('Y', 'N') NOT NULL DEFAULT 'N',
  'tokenCode' varchar(100) NOT NULL,
  PRIMARY KEY ('userID')
)";

$tableUser = $db->query($createTableUser);
