<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="chat.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function(){
      //Affiche les msg toutes les 5sec
      setInterval(function(){
        $.ajax({
          url : "affichermsg.php",
          success : function(actualiser){
            $("#chatmsg").html(actualiser);
          }
        })
      },5000)

      //actualise la page toute les 5 secondes
      $.ajax({
        url : "affichermsg.php",
        success : function(actualiser){
          $("#chatmsg").html(actualiser);
        }
      })

      //logout.php
      $("#logout").on("click", function(e){
        $.ajax({
          url: "logout.php",
          success : function(log){
            alert(log);
            window.location.href="loginindex.php"
          }
        })
      })

      $.ajax({
     url : "verification.php",
     success : function(verif){
       if(verif==false){
         window.location.href="loginindex.php";
       }
       else{
         alert(verif);
       }
     }
   })

   $("#envoyermsg").on("submit", function(e){

     e.preventDefault()
     datamsg = {
       message : $ ("#message").val(),
     }

     $.ajax({
       method : "POST",
       url : "envoyermsg.php",
       data : datamsg,
       success : function(resultat){
         if(resultat=="Envoyé"){
           alert("Message envoyé");
           $("#message").focus().val("")
         }else{
           alert("erreur");
        }
     }
     })
   })

    })
    </script>
  </head>
  <body>
    <div id="chatmsg"> </div>
    <form action="" method="POST" id="envoyermsg">
    <input type="text" name="message" id="message" placeholder="Votre Message"/>
    <input type="submit" name="submit" value="Envoyer"/>
    </form>
    <button class="btn btn-danger" id="logout" >Logout</button>
</body>
</html>﻿
