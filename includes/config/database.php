<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', '1234', 'bienes_raices');

    if (!$db) {
        echo "No se conecto a la base de datos";
        exit;
    } 

    return $db;
}