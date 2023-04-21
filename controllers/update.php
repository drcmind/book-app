<?php
    require("./helpers.php");
    if (isset($_POST["btn_modifier"]) && !empty($_POST["id"])
        && !empty($_POST["titre"]) && !empty($_POST["auteur"])) {
        $datas = array(
            "id" => intval(htmlspecialchars($_POST["id"])),
            "titre" => htmlspecialchars($_POST["titre"]),
            "auteur" => htmlspecialchars($_POST["auteur"])
        );
        $livre = getUnique($_POST["index"]);
        $livre = $datas;
        if (updatedata($_POST["index"],$livre)) {
            return header("location:../index.php");
        }
    }