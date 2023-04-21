<?php
    require("./helpers.php");
    if (isset($_POST["valider"]) && !empty($_POST["id"]) && !empty($_POST["titre"])
        && !empty($_POST["auteur"])) {
        $datas = array(
            "id"=>intval(htmlspecialchars($_POST["id"])),
            "titre"=>htmlspecialchars($_POST["titre"]),
            "auteur"=>htmlspecialchars($_POST["auteur"])
        );
        if (insertDatas($datas)) {
            header("location:../index.php");
        }
    }