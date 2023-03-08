<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>reponse de formulaire</title>
    <link rel="stylesheet" href="index.css">
<body>
    <h1>Bienvenu</h1>
<?php
    if (isset($_POST["name"]) && isset($_POST["password"]){
        $name = $_POST["name"];
        $password = md5($_POST["password"]);
        $loginAttempted = true;
    }


    echo "<h2> Bonjour $name, vous êtes bien connecté </h2>";
    echo "<p> Votre mot de passe est $password </p>";
?>
<hr>
<div class=gifgeant>
    <img src="https://art.pixilart.com/4b680819d6447f3.gif" alt="gifgeant">
</div>
<footer>
    <p> Merci de votre visite </p>
    <p> 
</footer>

</body>
