<?php
    include "connection.php";

    if(isset($_GET['did'])){
        $id=$_GET['did'];
        $sql="SELECT simg FROM STUDENT WHERE sid=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $dimg=$row['simg'];

        if ($dimg != "img/null.png"){
            unlink($dimg);

        }

        $sql="DELETE FROM STUDENT WHERE sid=$id";
        $result=mysqli_query($conn,$sql);

        if($result){
            header("Location:home.php");
        }
        else{
            echo "eeror in data delation";
        }
    }
?>