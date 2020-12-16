<?php

include 'connection.php';

$id = $conn->real_escape_string(1);

$sql = "DELETE FROM tbl_usuario WHERE id = $id";
    
if($conn->query($sql) === TRUE) {
    echo "Excluído com Sucesso";
} else {
    echo "Erro " . $sql . ' ' . $conn->error;
}
