<!DOCTYPE html>
<?php
	//Données via le cookie?
	if ( isset( $_COOKIE["username"] ) && isset( $_COOKIE["password"] ) ) {
		$username = $_COOKIE["username"];
		$password = $_COOKIE["password"];
		$loginSuccessful = true;
	}
	else {
		$loginSuccessful = false;
	}

?>


<!-- Page d'acceuil du site, blog de fan de cinéma proposant des affiches de films-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Cinéfou</title>
        <link rel="stylesheet" href="index.css">
    </head>
<nav>
    <article> <a href="./index.php"><img src="./images/icone_house.jpg" width="15" height="15">Accueil</a></article>
    <article>Recherche</article>
    <article> <a href="./login.php"> Se connecter</a> </article> 
    <?php if(!$loginSuccessful) { ?> <article id="status">  Vous n'êtes pas connecté <?php } else { ?> Bienvenu <?php  echo $username.'
                <form action="./login.php" method="post">	
                <input type="hidden" id="logout" name="logout" value="ok">
                <button type="submit">Se déconnecter</button>'; } ?> </article>
</nav>
<hr>
<div id="main">
    <div class="film"><a class="hoverfilm" href="./film.html">
        <div class="imgfilm"><img src="./images/iceage5.jpg" alt="drunk" width="150" height="200"> </div>
        <div class="aside">
            <h3>L'age de glace 5</h3>
            <ul>
                <li>Année de sortie: 2020</li>
                <li>Genre: Comédie noire</li>
                <li>Producteur : Thomas Vinterberg</li>
            </ul>
            <p class="descri">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Scelerisque viverra mauris in aliquam sem fringilla ut morbi. At quis risus sed vulputate odio. </p></a>
        </div>
    </div>
    <hr>
    <div class="film"> 
        <div class="imgfilm"><img src="./images/drunk.jpg" alt="drunk" width="150" height="200"> </div>
        <div class="aside">
            <h3>Drunk</h3>
            <ul>
                <li>Année de sortie: 2020</li>
                <li>Genre: Comédie noire</li>
                <li>Producteur : Thomas Vinterberg</li>
            </ul>
            <p class="descri">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Scelerisque viverra mauris in aliquam sem fringilla ut morbi. At quis risus sed vulputate odio. </p>
        </div>
    </div>
    <hr>
    <div class="film"> 
        <div class="imgfilm"><img src="./images/drunk.jpg" alt="drunk" width="150" height="200"> </div>
        <div class="aside">
            <h3>Drunk</h3>
            <ul>
                <li>Année de sortie: 2020</li>
                <li>Genre: Comédie noire</li>
                <li>Producteur : Thomas Vinterberg</li>
            </ul>
            <p class="descri">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Scelerisque viverra mauris in aliquam sem fringilla ut morbi. At quis risus sed vulputate odio. </p>
        </div>
</div>



<hr>
<footer>
    <p>© 2023 BARTHELME Alexandre - Site projet WE4A</p>
</footer>
<hr>
</body>
</html> 
