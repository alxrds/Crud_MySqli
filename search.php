<?php

include 'connection.php';

if($_GET){

    $search = mysqli_real_escape_string($conn, $_GET['q']);

    $sql = "SELECT * FROM tbl_usuario WHERE nome LIKE '%$search%' OR sobrenome LIKE '%$search%'";
    $stmt = $conn->query($sql);

    if(mysqli_num_rows($stmt) > 0){
        while($row = $stmt->fetch_assoc()){
            echo $row['nome'].' '.$row['sobrenome'].'<br>';
        }
    }else{
        echo 'Nenhum dado encontrado';
    }
}else{
    echo 'Campo de busca vazio';
}

?>