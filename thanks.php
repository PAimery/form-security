<?php
var_dump($_POST);

echo 'Merci '. $_POST['user_fname'] . ' ' .  $_POST['user_lname'] . ' de nous avoir contacté à propos de ' . $_POST['gender']; PHP_EOL;

echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['email'] . ' ou par téléphone au ' . $_POST['phone'] . ' dans les plus brefs délais pour traiter votre demande :'; PHP_EOL; 

echo $_POST['message'];
?>