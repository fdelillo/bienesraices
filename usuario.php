<?php
// Importar la base
require 'includes/config/database.php';
$db = conectarDB();

// Crear un email y password
$email = "fede@gmail.com";
$pass = "1234";
$passhash = password_hash($pass,PASSWORD_DEFAULT);

// Query para crear el usuario
$qry = "INSERT INTO usuarios (email,pass) VALUES ('${email}','${passhash}');";

//var_dump($qry);
//exit;
// Agregar a la base de datos
mysqli_query($db,$qry);
