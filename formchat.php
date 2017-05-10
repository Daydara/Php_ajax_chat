<?php

define("MYSQL_HOST", "localhost");

define("MYSQL_USER", "root");

define("MYSQL_PASSWD", "");

define("MYSQL_DB", "chat");


try {
  $PDO= new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DB,MYSQL_USER,MYSQL_PASSWD);

  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

} catch (PDOException $e) {

  $e->getMessage();

}



  if($_POST["nom"]!="" && $_POST["prenom"]!="" && $_POST["pseudo"]!="" && $_POST["password"]!=""){

    $req = $PDO->prepare("INSERT INTO users (nom, prenom, pseudo, password) VALUES (:nom, :prenom, :pseudo, :password)");

    $req->bindValue(":nom", $_POST["nom"]);

    $req->bindValue(":prenom", $_POST["prenom"]);

    $req->bindValue(":pseudo", $_POST["pseudo"]);

      $req->bindValue(":password", sha1($_POST["password"]));

    if($req->execute()){
      $login=$PDO->prepare("SELECT * FROM users WHERE pseudo=:pseudo AND password=:password");
      $login->bindValue(":pseudo", $_POST["pseudo"]);
      $login->bindValue(":password", sha1($_POST["password"]));
      $login->execute();
      $compte=$login->fetch();
      session_start();
      $_SESSION['id'] = $compte->id;
      $_SESSION['pseudo'] = $compte->pseudo;
      echo "compte enregistré";
    } else {
      echo "erreur";
    }
}

 ?>
