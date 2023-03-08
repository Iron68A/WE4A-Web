<!DOCTYPE html>
<html>
<head>
    <title class="Titre">Page test PHP</title>
    <meta charset="utf-8" />
    <link href="index.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>Page test PHP perso</h1>
    <p>
        <?php
            echo 'Hello World!';
        ?>
    </p>
    <hr>
    <p>
    <?php
        // Affichage de la date
        date_default_timezone_set('Europe/Paris');
        echo 'Nous sommes le ' . date('d/m/Y') . ' et il est ' . date('H:i:s');
    ?>
    </p>
    <hr>
    <div class="form">
        <form action="./recu.php" method="post">    
        <div class="formbutton">Oula</div>
        <div>
            <label for="name">Login :</label>
            <input autofocus type="text" id="name" name="name">
        </div>
        <div>
            <label for="mail">Password :</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="formbutton">
            <hr>
            <button type="submit">Envoyer le formulaire</button>
        </div>
        </form>
    </div>
<hr>


</body>

</html>

