<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "cafebistro_phpoo_turmab";

//criação da conexão
$conn = new mysqli($servername, $username, $password, $databasename);

//verificação da conexão
if (!$conn){
    die("conexão falhou".mysqli_connect_error());
}else{
    echo "conectou";
};




?>