<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ajouter des produits</title>
</head>

<body>
    <div class="container-fluid">

        <h1 class="text-center">Ajouter un produit à notre liste : </h1><br>

        <div class="text-center">
		<?php echo form_open(); ?>

                <fieldset>
                    <label for="reference">Référence : <input class="form-control" id="reference" type="text" name="pro_ref"></label><br>
                    <select name="pro_cat_id" class="col-4 custom-select form-control">
                    <?php foreach($categories as $row){ ?>
                        
                    <option class="form-control" value= "<?php echo $row->cat_id; ?>" ><?php echo $row->cat_nom; ?></option>
                    <?php } ?>              
                    </select><br>

                    <label for="libelle">Nom du produit : <input class="form-control" id="libelle" type="text" name="pro_libelle"></label><br>

                    <label for="descritiption">Description : <textarea class="form-control" id="description" type="text" name="pro_description"></textarea></label><br>

                    <label for="prix">Prix : <input class="form-control" id="prix" type="number" name="pro_prix"></label><br>

                    <label for="stock">Unité en stock : <input class="form-control" id="stock" type="number" name="pro_stock"></label><br>

                    <label for="couleur">Couleur : <input class="form-control" id="couleur" type="text" name="pro_couleur"></label><br>


                    <input class="col-1-form-control btn" type="file" value="Inserer une image" name="pro_photo"><br><br>

                    <input type="submit" value="Valider" class="btn btn-dark" id="bouton_envoi">
                    <input type="reset" value="Anuler" class="btn btn-dark" id="bouton_annuler"><br>

                </fieldset>
            </form><br>

        </div>


    </div>


</body>

</html>