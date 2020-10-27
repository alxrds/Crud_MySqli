<?php

include 'connection.php';

$id = mysqli_real_escape_string(1);

$sql = "DELETE FROM tbl_usuario WHERE ids = $id";
    
if($conn->query($sql) === TRUE) {
    echo "Excluído com Sucesso";
} else {
    echo "Erro " . $sql . ' ' . $conn->error;
}

?>