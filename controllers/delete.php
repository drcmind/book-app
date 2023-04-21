<?php
    require("./helpers.php");
    $index = intval($_GET["index"]);
    if (deleteData($index)) {
        return header("location:../index.php");
    }