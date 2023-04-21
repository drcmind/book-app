<?php
    require("../controllers/helpers.php");
    $id = $_GET["id"];
    $livre = getUnique($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Book App</title>
</head>
<body>
    <div class="container-md col-md-6 col-md-affset-3"><br>
        <center>
            <h3>FORMULAIRE DE MODIFICATION D'UN LIVRE</h3>
        </center>
        <form action="../controllers/update.php" method="post" class="form">
            <label for="id">N°</label><br>
            <input type="number" name="id" value="<?= $livre['id'] ?>" readonly class="form-control" required>
            <input type="hidden" name="index" value="<?= $id ?>" readonly class="form-control" required>
            <label for="titre">Titre</label><br>
            <input type="text" name="titre" value="<?= $livre['titre'] ?>" class="form-control" required>
            <label for="auteur">Auteur</label><br>
            <input type="text" name="auteur" value="<?= $livre['auteur'] ?>" class="form-control" required><br>
            <input type="submit" value="VALIDER" name="btn_modifier" class="btn btn-primary">
            <a href="../index.php"  class="btn btn-light">ANNULER</a>
        </form>
    </div>
</body>
</html>