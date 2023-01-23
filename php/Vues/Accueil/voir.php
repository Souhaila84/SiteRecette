<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
    <title>Caramelange</title>
    <link href="../images/caramel.png" rel="icon">
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a id="logo"><h2>Caramelange</h2><img src="../images/logo.png"></a></li>
        <li><a><input type="search" placeholder="Rechercher...."><button class="go" type="submit">go</button></a>  </li>
        <li><a id="accueil" href="http://localhost:63342/projetphp/php/Controleurs/ControleurAccueil.php?action=home">ACCUEIL</a></li>
        <li><a id="connex" href="index.php?action=login">CONNEXION </a></li>
        <li>|</li>
        <li><a id="inscr" href="index.php?action=register">INSCRIPTION</a></li>
    </ul>
</nav>
<div id="banniere">
    <img src="../images/cheescake.jpg">
    <div class="p">«Tout le monde peut pâtisser»</div>
</div>
<div id="Recettes">
    <ul>
        <li><a id="recette1">tarte</a></li>
        <li><a id="recette2">eclair</a></li>
        <li><a id="recette3">choux</a></li>
    </ul>
</div>
<h4>Recettes par Catégorie</h4>
<div id="categories">
    <button><img src="../images/cheap.png">Bon marché</button>
    <button><img src="../images/rapide.png">Rapide</button>
    <button><img src="../images/chocolate.png">Au chocolat</button>
    <button><img src="../images/vegan.png">Vegan</button>
    <button><img src="../images/niveau.png">Facile</button>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer">
    <li><a>Copyright © 2022 Caramelange Inc. Tous droits réservés</a></li>
</div>
</body>
</html>