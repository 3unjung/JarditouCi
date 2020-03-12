<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Tableau des produits</title>

</head>
<body>

    <!--Tableau des articles-->
    <h3><strong>Tableau des articles</strong></h3>
    <table class="table table-bordered">
  <thead>
    <tr>
            <th scope="col">Clé:</th>
            <th scope="col">Catégorie du produit:</th>
            <th scope="col">Référence du produit:</th>
            <th  scope="col">Nom du produit:</th>
            <th  scope="col">Description du produit:</th>
            <th  scope="col">Prix:</th>
            <th scope="col">Nombre d'unité en stock:</th>
            <th scope="col">Couleur:</th>
            <th scope="col">Photo:</th>
            <th scope="col">Date d'ajout:</th>
            <th scope="col">Date de modificiton:</th>
            <th  scope="col">Bloquer le produit de la vente:</th> 
    </tr>
  </thead>
  <?php foreach($liste_produits as $row)  { ?>

  <tbody>
    <tr>
      <td  scrope="row"><?= $row->pro_id; ?></td>
      <td scrope="row"><?= $row->pro_cat_id; ?></td>
      <td scrope="row"><?= $row->pro_ref; ?></td>
      <td  scope="row"><a href="http://localhost/jarditouCi/index.php/jarditou/details?pro_id=<?= $row->pro_id; ?>"><?= $row->pro_libelle; ?></a></td>
      <td scrope="row"><?= $row->pro_description; ?></td>
      <td scope="row"><?= $row->pro_prix; ?></td>
      <td scrope="row"><?= $row->pro_stock; ?></td>
      <td scrope="row"><?= $row->pro_couleur; ?></td>
      <td scope="row"><img class="img-fluid" src="http://localhost/jarditouCi/assets/img/<?= $row->pro_photo ?>"> </td>
      <td scrope="row"><?= $row->pro_d_ajout; ?></td>
      <td scrope="row"><?= $row->pro_d_modif; ?></td>
      <td scrope="row"><?= $row->pro_bloque; ?></td>

    </tr>

    
  </tbody>
  <?php } ?>

</table>
</body>
</html>