<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>" >


</head>
<body>
  
<header>
        <!-- ne touche surtout pas  ce commentaire  -->
      <div class="container-fluid">
      <div class="row">

        <img class="col-xs=2 col-sm=2 col-md-2" id="logo_jarditou" src="<?= base_url("assets/img/jarditou_logo.jpg"); ?>" alt="logo de index">

        <nav class="col-12 navbar navbar-expand-lg navbar-light bg">
          <button id="bouton_burger" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0-">
              <li class="nav-item active">
                <a id="index_menu" class="nav-link" href="<?php echo site_url("jarditou/accueil"); ?>">Acceuil<span class="sr-only">(current)</span></a>
              </li> 
              <li class="nav-item">
                <a id="table_menu" class="nav-link" href="<?php echo site_url("jarditou/produits"); ?>">Nos produits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#">Connexion</a></li>

              <li class="nav-item">
                <a id="table_menu" class="nav-link" href="#">Deconnexion</a>
              </li>

              <li class="nav-item">
                <a id="table_menu" class="nav-link" href="<?php echo site_url("jarditou/ajout"); ?>">Ajouter un produit </a>
              </li>


            </ul>
          </div>
        </nav>
        <img class="image-fluid" src="http://localhost/jarditouCi/assets/img/promotion.jpg" id="promotion_jarditou" alt="promotion_du_site">

      </div>
      </div>

      

</header> 