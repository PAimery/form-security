<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (!isset($_POST['user_lname']) || trim($_POST['user_lname']) === '')
    $errors[] = "Le nom est obligatoire";
  if (!isset($_POST['user_fname']) || trim($_POST['user_fname']) === '')
    $errors[] = "Le prénom est obligatoire";
  if (!isset($_POST['email']) || trim($_POST['email']) === '')
    $errors[] = "L'email est obligatoire";

  if (!isset($_POST['phone']) || trim($_POST['phone']) === '')
    $errors[] = "Le numéro de téléphone est obligatoire";
  if (!isset($_POST['gender']) || trim($_POST['gender']) === '')
    $errors[] = "Le nom est obligatoire";
  if (!isset($_POST['message']) || trim($_POST['message']) === '')
    $errors[] = "Le champ message est obligatoire";

  if (empty($errors)) {
    header('Location: thanks.php');
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main class="container">
    <h1>Inscriptions</h1>
    <?php if (count($errors) > 0) : ?>
      <ul>
        <?php foreach ($errors as $error) : ?>
          <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <form action="thanks.php" method="post">
      <div>
        <label for="lname">Nom :</label>
        <input type="text" id="lname" name="user_lname" placeholder="Lastname" required>
      </div>
      <div>
        <label for="fname">Prénom :</label>
        <input type="text" id="fname" name="user_fname" placeholder="Firstname" required>
      </div>
      <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="email" placeholder="Email" required>
      </div>
      <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="phone" placeholder="Phone" required>
      </div>
      <div>
        <label for="gender">Sexe :</label>
        <select name="gender" id="gender" name="gender" required>
          <option value="man">Homme</option>
          <option value="woman">Femme</option>
          <option value="other">Autre</option>
        </select>
      </div>
      <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" placeholder="Message" required></textarea>
      </div>
      <div class="button">
        <button type="submit">Envoyer votre message</button>
      </div>
    </form>
  </main>
</body>

</html>