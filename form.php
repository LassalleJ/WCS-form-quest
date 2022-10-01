<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <main>
<form  action="thanks.php"  method='post'>
    <div>
      <label  for="prénom">Prénom :</label>
      <input  type="text"  id="prénom"  name="user_firstname">
    </div>
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phoneNumber">Numéro de téléphone :</label>
        <input  type="phoneNumber"  id="phoneNumber"  name="user_phone">
    </div>
    <div>
      <label for="subject"> Sujet de votre mail :</label>
      <select id="subjects" name="subjects">
        <option value="Réclamation">Réclamation</option>
        <option value="Demande de rendez-vous">Demande de rendez-vous</option>
        <option value="Demande d'informations">Demande d'informations</option>
        <option value="Autre">Autre</option>
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  <?php 
   var_dump($_POST);
   echo($_POST);
   ?>
  <style>
    main {
      margin:auto;
      width:60%;
    }
    div {
      margin-bottom:25px;
      text-align:left;
    }
  </style>
  </main>

</body>
</html>