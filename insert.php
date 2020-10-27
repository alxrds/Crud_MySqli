<?php

include 'connection.php';

$nome = mysqli_real_escape_string('Alexandre');
$sobrenome = mysqli_real_escape_string('Rodrigues');

$sql = "INSERT INTO tbl_usuario (nome, sobrenome) VALUES ('$nome', '$sobrenome')";
    
if($conn->query($sql) === TRUE) {
    echo "Inserido com Sucesso";
} else {
    echo "Error " . $sql . ' ' . $conn->error;
}

?>