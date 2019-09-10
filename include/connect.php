<?php
    
        session_start();
    
    $conn = mysqli_connect('localhost', 'root', '', 'db_avaliacao');

    if(!$conn) {
        echo 'Houve um erro ao conectar ao banco'.mysqli_error($conn);
    }

?>