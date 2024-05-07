<?php
    include "connection.php";

    if(isset($_GET['did'])){
        $id=$_GET['did'];
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