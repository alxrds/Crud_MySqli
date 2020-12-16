<?php

include 'connection.php';

$sql = "SELECT * FROM tbl_usuario";
$stmt = mysqli_query($conn,$sql);

if(mysqli_num_rows($stmt) > 0){
    while($row = $stmt->fetch_assoc()){
        echo $row['nome'].' '.$row['sobrenome'].'<br>';
    }
}else{
    echo 'Nenhum dado encontrado';
}
