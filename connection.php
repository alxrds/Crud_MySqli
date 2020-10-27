<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'database');
$conn = mysqli_connect(HOST, USER, PASS, BASE);

if($conn){
    echo '';
}else{
    echo 'Erro: Falha ao conectar' . mysqli_connect_errno() . PHP_EOL;
}

?>