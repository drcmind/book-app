<?php
    // Fonction pour la récupération des toutes les données
    function getDatas():array{
        $datas = file_get_contents("../datasource/livres.json");
        $datas = json_decode($datas);
        return $datas;
    }
    // Fonction pour l'ajout des données
    function insertDatas(array $datas):bool{
        $filedatas = file_get_contents("../datasource/livres.json");
        $filedatas = json_decode($filedatas,true);
        $filedatas[] = $datas;
        $filedatas = json_encode($filedatas,JSON_PRETTY_PRINT);
        if (file_put_contents("../datasource/livres.json",$filedatas)) {
            return true;
        }
    }
    //Fonction de récupération d'un seul livre
    function getUnique($id):array{
        $filedatas = file_get_contents("../datasource/livres.json");
        $data = json_decode($filedatas,true);
        return $data[$id];
    }
    //Fonction pour mettre à jour un livre
    function updateData(int $index, array $livre):bool{
        $filedatas = json_decode(file_get_contents("../datasource/livres.json"));
        $filedatas[$index] = $livre;
        $filedatas = json_encode($filedatas,JSON_PRETTY_PRINT);
        if (file_put_contents("../datasource/livres.json",$filedatas)) {
            return true;
        }
    }
    //Fontion pour supprimer un livre
    function deleteData(int $index):bool{
        $filedatas = json_decode(file_get_contents("../datasource/livres.json"));
        unset($filedatas[$index]);
        $filedatas = array_values($filedatas);
        $filedatas = json_encode($filedatas,JSON_PRETTY_PRINT);
        if (file_put_contents("../datasource/livres.json",$filedatas)) {
            return true;
        }
    }
