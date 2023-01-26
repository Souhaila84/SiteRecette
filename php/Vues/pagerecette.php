<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../php/css/navbar.css" rel="stylesheet">
  <link href="../php/css/style.css" rel="stylesheet">
  <link href="../php/css/footer.css" rel="stylesheet">
  <title>Caramelange</title>
  <link href="../php/Vues/images/caramel.ico" rel="icon">
</head>

<body>
  <nav class="navbar">
    <ul>
      <li><a id="logo"><h2>Caramelange</h2><img src="../php/Vues/images/logo.png"></a></li>
      <li><a><input type="search" placeholder="Rechercher...."><button class="go" type="submit">go</button></a>  </li>
      <li><a id="accueil" href="../index.html">ACCUEIL</a></li>
      <li><a id="connex" href="../pages/connexion.html">CONNEXION </a></li>
      <li>|</li>
      <li><a id="inscr" href="../pages/inscription.html">INSCRIPTION</a></li> 
    </ul>
  </nav>
 
  <div class="container">
  <h4>Tarte aux pommes</h4>

  <div class="corps">
    <div class="avis">
      <div class="rating">
        <!----><a href="#5" title="Donner 5 étoiles">☆</a>
        <!----><a href="#4" title="Donner 4 étoiles">☆</a>
        <!----><a href="#3" title="Donner 3 étoiles">☆</a>
        <!----><a href="#2" title="Donner 2 étoiles">☆</a>
        <!----><a href="#1" title="Donner 1 étoile">☆</a>
      </div>
      <div class="cmb_personnes">
        6 personnes
      </div>
    </div>
    <div class="box_image">
      <img src="../php/Vues/images/scones.jpg" id="image">
    </div>
    <div class="temps_total_preparation">
      <p>temps cuisson : <br>10min</p>
      <p>temps repos : <br>0min</p>
      <p>temps preparation : <br>15min</p>
      <p>temps total : <br>25min</p>
    </div>
  </div>
  <div class="corps_étape">
    <h1>Liste ingrédients :</h1>
  </div>
 <!---divison commentaire--->
  <div id="Commentaires">
    Commentaires (145 avis)
    <div id="ligneComm">
    </div>
  </div>
  <!--espace Commentaires-->
  <div id="CommentairesBox">
    <textarea type="textarea" id="commentInput" name="commentField" placeholder="Ajouter un avis..."></textarea>
    <button id="submitComment">Ajouter</button>
</div>
<ul id="comments">
  <li class='commentArea'>
    <div class='profile'>
        <img class='profilePicture' src='../php/Vues/images/avatar.png'>
        <p class='profileName'>$userPseudo</p>
    </div>
    <p class = 'commentsTexts'> $commentText </p>
</li>
</ul>
</div>
<div id="footer">
  <li><a>Copyright © 2022 Caramelange Inc. Tous droits réservés</a></li>
</div>
</body>
</html>