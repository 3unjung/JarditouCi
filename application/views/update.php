<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost/jarditouCi/assets/css/style.css">

	<title>Modifier des produits</title>
</head>
<body>
	<div class="container-fluid">
        <h3 class="text-center">Modifier un produit :</h3>
		<br>
						
		<div class="text-center">

		<?php echo form_open("jarditou/g/".$row->pro_id); ?>
			
				<fieldset>

						<select name="pro_cat_id" class="col-4 custom-select form-control">
                        <?php foreach($categories as $key){ ?>
                        
                        <option class="form-control" value= "<?php echo $key->cat_id; ?>" ><?php echo $key->cat_nom; ?></option>
                        <?php } ?>              
                        </select><br>

					<label for="reference">Référence : <input  class="form-control" id="reference" type="text" name="pro_ref" value="<?= $row->pro_ref; ?>"></label><br>
					<span id="reference_manquante"></span><br>


					<label for="libelle">Nom du produit : <input class="form-control" id="libelle" type="text" name="pro_libelle" value="<?= $row->pro_libelle ?>"></label><br>
							<span id="libelle_manquant"></span><br>
					
					<label for="descritiption">Description : <textarea class="form-control" id="description" name="pro_description"><?= $row->pro_description ?></textarea> </label><br>
					<span id="description_manquante"></span><br>
							
					<label for="prix">Prix : <input class="form-control" id="prix" type="number" name="pro_prix" value="<?= $row->pro_prix ?>"></label><br>
					<span id="prix_manquant"></span><br>

					<label for="stock">Unité en stock : <input class="form-control" id="stock" type="number" name="pro_stock" value="<?= $row->pro_stock ?>"></label><br>
					<span id="quantite_manquante"></span><br>

					<label for="couleur">Couleur : <input  class="form-control" id="couleur" type="text" name="pro_couleur" value="<?= $row->pro_couleur ?>"></label><br>
					<span id="couleur_manquante"></span><br>
						<input type="submit" value="Valider" class="btn btn-dark">
						<input type="reset" value="Anuler" class="btn btn-dark"id="bouton_annuler"><br>
				</fieldset>
			</form>
			<br>
        </div>
        
        

    </div>

	</div>
</body>

</html>