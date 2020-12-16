<?php

include 'connection.php';

$nome = $conn->real_escape_string('Alexandre');
$sobrenome = $conn->real_escape_string('Rodrigues');

$sql = "INSERT INTO tbl_usuario (nome, sobrenome) VALUES ('$nome', '$sobrenome')";
    
if($conn->query($sql) === TRUE) {
    echo "Inserido com Sucesso";
} else {
    echo "Error " . $sql . ' ' . $conn->error;
}
