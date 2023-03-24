<?php

require('config.php');

if(isset($_POST['btnsave'])){
    $studId = $_POST['studId'];
    $studName = $_POST['studName'];
    $yr_sec = $_POST['yr_sec'];
    $subject = $_POST['subject'];

    $query = mysqli_query($conn,"INSERT INTO student(idnumber,name,subject_id,yr_sec)
            VALUES('$studId','$studName','$yr_sec','$subject')" );

    if($query==TRUE){
        echo "<script>alert('Successfully inserted!')
                window.location.href='list.php'
        </script>";
    }else{
        echo "<script>alert('Something went wrong!')</script>";
    }
}

if(isset($_POST['update'])){
    $code_edit = $_POST['code_edit'];
    $desc_edit = $_POST['desc_edit'];
    $id = $_POST['id'];

    $qry = mysqli_query($conn, "UPDATE subject SET 
                        code='$code_edit', description='$desc_edit'
                        WHERE id = '$id'
                        ");
    
    if($qry == TRUE){
        echo "<script>
            alert('Data Updated');
            window.location.href='view_subject.php'
        </script>";
   
    }else{
        echo "<script>
        alert('Something went wrong!');
        window.location.href='update.php'
    </script>";
    }
}


?>