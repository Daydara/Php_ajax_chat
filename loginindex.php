<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Chat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="chat.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script type="text/javascript">

  $(function() {

    $("#form1").on("submit", function(e){

      e.preventDefault()
      datalog = {
        pseudo : $("#pseudologin").val(),
        password : $ ("#passwordlogin").val(),
      }

      $.ajax({
        method : "POST",
        url : "loginccchat.php",
        data : datalog,
        success : function(resultat){
          if(resultat==false){
          alert("Erreur pseudo ou mdp");
        }else{
          window.location.href="ccchat.php";
        }
      }
      })
    })


    $("#form2").on("submit", function(e){
      e.preventDefault()
      data = {
        nom : $("#nom").val(),
        prenom : $("#prenom").val(),
        pseudo : $("#pseudo").val(),
        password : $("#password").val(),
      }

      $.ajax({
        method : "POST",
        url: "formchat.php",
        data : data,
        success :  function(resultat){
          if (resultat=="compte enregistré") {
            alert(resultat)
            window.location.href="ccchat.php"
          }else {
            alert(resultat)
          }
        }
      })

    })

  })

  </script>
</head>
<body>
  <h1>log in</h1>
  <form action="" method="POST" id="form1">
    <input type="text" name="pseudo" id="pseudologin" placeholder="Pseudo"><br>
    <input type="password" name="password" id="passwordlogin" placeholder="Password"><br>
    <input type="submit" name="submit">
    <input type="reset">
  </form>

  <h1>inscription</h1>
  <form action="" method="POST" id="form2">
    <input type="text" name="nom" id="nom" placeholder="Nom">
    <input type="text" name="prenom" id="prenom" placeholder="Prénom">
    <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" name="submit">
    <input type="reset">
  </form>
</body>
</html>
