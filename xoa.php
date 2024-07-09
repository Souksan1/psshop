<?php
    $conn = mysqli_connect("localhost", "root", "", "pssshop");

    // Check connection
    $conn->set_charset("utf8");


    
        $id_sp= $_GET['id_sp'];
        $sql15 = "DELETE FROM product WHERE id='$id_sp'";
        mysqli_query($conn, $sql15);
        echo '<script type="text/javascript">alert("Xóa thành công!");window.location ="admin/product"; </script>';


    
?>