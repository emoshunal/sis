<?php

    require('config.php');

    $qry = mysqli_query($conn, "SELECT * FROM student");

    while($row=mysqli_fetch_assoc($qry)){
        $arr[] = $row;
    }
    $data = array(
        'data' => $arr
    );

    echo json_encode($data); 

?>