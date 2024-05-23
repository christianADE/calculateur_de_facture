<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur de facture</title>
</head>
<body>
    <header style="background-color: black; color: white; padding: 10px; text-align: center" >
        <h1>Calculateur de facture</h1>
        <p>Remplissez le formulaire pour calculer le montant total de la facture</p>
    </header>
    <form action="game.php" class="form-group" method="get">
        <div class="container">
            <h1>Remplissez le formulaire</h1>

            <div id="articles">
                <div class="article">
                    <label class="form-floating" for="quantite">Quantité
                        <input class="form-control" type="number" name="quantite" value="">
                    </label>
                    <label class="form-floating" for="prix">Prix
                        <input class="form-control" type="number" name="prix" value="">
                    </label>
                    <label class="form-floating" for="tva">TVA
                        <input class="form-control" type="number" name="tva" value="">
                    </label>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Calculer</button>
            <button class="btn btn-danger" type="reset" >Supprimer</button>
        </div>

        

        <?php
            $total = "";
            if (isset($_GET['quantite']) && isset($_GET['prix']) && isset($_GET['tva'])) {
                
                $quantite = $_GET['quantite'];
                $prix = $_GET['prix'];
                $tva = $_GET['tva'];

                $total = $quantite * $prix * (1 + $tva / 100);
            } else{
        
                '<div class="alert alert-danger">
                    <p>Veuillez tout remplire avant de calculer</p>
                </div>';
            }
            ?>
            

        <h1 style="text-align: center;">Le total est : <?= $total ?> </h1>
    </form>

   
</body>
</html>
