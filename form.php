<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <form action="thanks.php" method="post">
    <div>
      <label for="lname">Nom :</label>
      <input type="text" id="lname" name="user_lname" placeholder="Lastname">
    </div>
    <div>
      <label for="fname">Prénom :</label>
      <input type="text" id="name" name="user_fname" placeholder="Firstname">
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="email" placeholder="Email">
    </div>
    <div>
      <label for="phone">Téléphone :</label>
      <input type="tel" id="phone" name="phone" placeholder="Phone">
    </div>
    <div>
      <label for="gender">Sexe :</label>
      <select name="gender" id="gender" name="gender">
        <option value="man">Homme</option>
        <option value="woman">Femme</option>
        <option value="other">Autre</option>
      </select>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="message" placeholder="Message"></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>

</html>