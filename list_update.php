<?php
    require('config.php');

    $id = $_POST['id'];
    $query = mysqli_query($conn, "SELECT * FROM 
            student WHERE id = '$id'
    ");
    $res = $query->fetch_assoc();

    echo json_encode($res);


?>