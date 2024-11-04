<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "login2";

if ($con = mysqli_connect($server, $user, $pass, $bd)){
   echo "conectado";
} else {
    echo "erro!";
}