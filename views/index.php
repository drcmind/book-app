<?php
    require("../controllers/helpers.php");
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
    <div class="container"><br>
        <a href="../controllers/create.php"  class="btn btn-primary">NOUVEAU</a>
        <table class="table">
            <thead>
                <th>N°</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $index = 0;
                    foreach(getDatas() as $row){
                ?>
                <tr>
                    <td><?= $index+1 ?></td>
                    <td><?= $row->titre ?></td>
                    <td><?= $row->auteur ?></td>
                    <td>
                        <a class="btn btn-info" href="../controllers/edit.php?index=<?= $index ?>">EDITER</a>|
                        <a class="btn btn-danger" href="../controllers/delete.php?index=<?= $index ?>">SUPPRIMER</a>
                     </td>
                </tr>
                <?php
                    $index++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>