<!DOCTYPE html>
<html lang="fr">
<head>
<title>login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="login.css" >
</head>
<?php
    $loginSuccessful = 0;
    if (isset($_POST['username']) && isset($_POST['password']) || isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        $loginSuccessful = 1;
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        setcookie('username', $username, time()+3600*24, '/', '', false, true);
        setcookie('password', $password, time()+3600*24, '/', '', false, true);
    }
    if ( isset($_POST["logout"]) && $_POST["logout"]=="ok" ) {
        $loginSuccessful = 0;
        unset($_COOKIE['name']); 
        unset($_COOKIE['password']);

    }
?>

<nav>
    <article> <a href="./index.html"><img src="./images/icone_house.jpg" width="15" height="15">Accueil</a></article>
    <article>Recherche</article>
    <article><a href="./login.html"> Se connecter</a> </article> 
    <?php if(!$loginSuccessful) { ?>
    <article id="status">  Vous n'êtes pas connecté
    <?php } else { ?> Bienvenu <?php  echo $username; } ?> </article>
</nav>
<body>
    <div id="main">
        <div id="login">
            <h1>Connexion</h1>
        <?php
        if ($loginSuccessful) {
        ?>
            <p>Vous êtes déjà connecté <?php echo $username; ?> ! </p>
            <hr>
            <div id="info">
                <p> Vous pouvez naviguer librement sur le site, poster des avis et des reviews de films, et bien plus encore !</p>
                <p> Ou bien vous déconnecter? </p>
                <form action="./login.php" method="post">
                    <input type="submit" value="Se déconnecter " id="logout" value="ok">
                </form>
            </div>
        <?php
        } else {
        ?>
                <form action="./login.php" method="post">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" placeholder="Nom d'utilisateur">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe">
                <input type="submit" value="Se connecter">
            </form>
        </div>

    </div>
</body>

<h2>Vous n'avez pas de compte? Créer un compte !</h2>
<div id="main">
    <div id="login">
        <h1>Inscription</h1>
        <form action="./login.php" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Nom d'utilisateur">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="submit" value="S'inscrire">
        </form>
    </div>
</div>
<div id="info">
    <p> Utiliser vos identifiants pour vous connectez et vous permettre de rédiger des avis, d'y répondre ou alors plus tarde de poster vous même 
        un avis sur un film que vous avez vu !
    </p>
</div>
<?php
        }
?>





</html> 