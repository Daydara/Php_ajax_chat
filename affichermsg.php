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


$chat=$PDO->prepare("SELECT * FROM tchat");
$chat->execute();
$afficher=$chat->fetchAll();
foreach($afficher as $value){
  echo "<div class='chatmsg'><p>-$value->pseudo:</p><p>".$value->message."</p></div>";
}

?>
