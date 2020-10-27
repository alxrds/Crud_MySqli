<?php

include 'connection.php';

$id = 1;
$nome = mysqli_real_escape_string('Athos');
$sobrenome = mysqli_real_escape_string('Rodrigues');

$sql = "UPDATE tbl_usuario SET nome = '$nome', sobrenome = '$sobrenome' WHERE id = $id";
    
if($conn->query($sql) === TRUE) {
    echo "Alterado com Sucesso";
} else {
    echo "Erro " . $sql . ' ' . $conn->error;
}

?>