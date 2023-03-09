<?php
    //Pour qu'un code puisse réaliser une redirection, il doit se trouver avant le premier mot de HTML (à priori, "<!DOCTYPE")
    //Si on a reçu, via formulaire POST, une valeur "logout" égale à ok, alors on logge out et on redirige
    if ( isset($_POST["logout"]) && $_POST["logout"]=="ok" ){

        //Effacer les variables cookies (pas obligatoire mais évite parfois des problèmes)
        unset($_COOKIE['username']); unset($_COOKIE['password']);

        //Pour effacer les fichiers texte de cookie, on les ré-écrit avec une "date de péremption" négative
        setcookie('username', null, -1, '/'); 
        setcookie('password', null, -1, '/');

        //Effectuer redirection
        header("Location:index.php");
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>login</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="login.css" >
</head>

<?php
	//Données reçues via formulaire?
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		$loginSuccessful = true;
	}
	//Données via le cookie?
	elseif ( isset( $_COOKIE["username"] ) && isset( $_COOKIE["password"] ) ) {
		$username = $_COOKIE["username"];
		$password = $_COOKIE["password"];
		$loginSuccessful = true;
	}
	else{
		$loginSuccessful = false;
	}
?>

<nav>
    <article> <a href="./index.php"><img src="./images/icone_house.jpg" width="15" height="15">Accueil</a></article>
    <article>Recherche</article>
    <article><a href="./login.php"> Se connecter</a> </article> 
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
            setcookie('username', $username, time()+3600*24, '/', '', false, true);
            setcookie('password', $password, time()+3600*24, '/', '', false, true);
        ?>
        
            <p>Vous êtes déjà connecté <?php echo $username; ?> ! </p>
            <hr>
            <div id="info">
                <p> Vous pouvez naviguer librement sur le site, poster des avis et des reviews de films, et bien plus encore !</p>
                <p> Ou bien vous déconnecter? </p>
                <form action="./login.php" method="post">	
                <input type="hidden" id="logout" name="logout" value="ok">
                <div class="formbutton">
                <button type="submit">Cliquez ici pour vous délogger</button>
                </div>
                <p> Sinon, retournez à l'accueil ! </p>
            </div>
	    </form>
        <?php
        } elseif (!$loginSuccessful) {
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