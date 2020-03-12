<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Page du produit </title>
</head>

<body>

    <div class="container-fluid"><br><br>

  <div class="text-center">
      <?php foreach ($description as $row) { ?>

        <div class="row-xl-1 row-lg-1 row-md-1 row-sm-1 row-xs-2">
          <!-- Récupère la prochaine ligne et la retourne en tant qu'objet -->
          <img class="img-fluid" src="http://localhost/jarditouCi/assets/img/<?= $row->pro_photo ?>" alt="Photo du produit recherché">
        </div>


        <h5>Nom du produit : <?php echo $row->pro_libelle; ?></h5>
          <h5>Identifiant : <?php echo $row->pro_id; ?></h5>
          <h5>Référence produit : <?php echo $row->pro_ref; ?></h5>
          <h5>Description du produit : <?php echo $row->pro_description; ?></h5>
          <h5>Prix : <?php echo $row->pro_prix; ?>&nbsp;€</h5>
          <h5>Date d'ajout : <?php echo $row->pro_d_ajout; ?></h5>
          
        <?php
        break; // instruction de fin pour éviter de répéter la boucle 
      }
        ?>

        <br>
        
        <button class="btn btn-gray" name="btn_update">
          <a href="http://localhost/jarditouCi/index.php/jarditou/g/<?=$row->pro_id;?>">Modifier</a>
         </button>

         <button class="btn btn-gray" name="btn_update">
          <a href="http://localhost/jarditouCi/index.php/jarditou/supprimer/<?=$row->pro_id;?>">Supprimer</a>
        </button><br>
  </div>

    </div>
    </div>


  </div>

</body>

</html>