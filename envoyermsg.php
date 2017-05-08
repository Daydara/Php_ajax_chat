<?php

define("MYSQL_HOST", "localhost");

define("MYSQL_USER", "root");

define("MYSQL_PASSWD", "wech24$$");

define("MYSQL_DB", "chat");


try {
  $PDO = new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DB,MYSQL_USER,MYSQL_PASSWD);
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
} catch (PDOException $e) {
  $e->getMessage();
}

session_start();

if (isset($_SESSION['pseudo']) && !empty($_POST['message']))
{
$insertmsg = $PDO->prepare('INSERT INTO tchat (pseudo, message) VALUES (:pseudo, :message)');
$insertmsg->bindValue(":pseudo", $_SESSION['pseudo']);
$insertmsg->bindValue(":message", htmlspecialchars($_POST["message"]));

if ($insertmsg->execute()) {
  echo "Envoyé";
}else {
  echo "Non Envoyé";
}
}


?>
