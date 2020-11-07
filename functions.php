<?php

function inserirPost($titulo, $desc) {
    require __DIR__ . "/config.php";

    $sql = "INSERT INTO post(titulo, descricao) VALUES(:t, :d)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":t", $titulo);
    $sql->bindValue(":d",$desc);
    $sql->execute();
    header("Location: ./");  
}

function findAll($search = null) {
    require __DIR__ . "/config.php";
    $array = array();


    if($search) {

        $sql = "SELECT * FROM post WHERE titulo LIKE '"."$search"."%'";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

    } else {
        $sql = "SELECT * FROM post";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
    }

    return $array;
}

function find($id) {
    require __DIR__ . "/config.php";
    $array = array();

    $sql = "SELECT * FROM post WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();
    
    if($sql->rowCount() > 0) {
        $array = $sql->fetch();
    }

    return $array;
}