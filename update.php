<?php

include 'connection.php';

$id = $conn->real_escape_string(1);
$nome = $conn->real_escape_string('Athos');
$sobrenome = $conn->real_escape_string('Rodrigues');

$sql = "UPDATE tbl_usuario SET nome = '$nome', sobrenome = '$sobrenome' WHERE id = $id";
    
if($conn->query($sql) === TRUE) {
    echo "Alterado com Sucesso";
} else {
    echo "Erro " . $sql . ' ' . $conn->error;
}
