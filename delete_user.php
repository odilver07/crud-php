<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from usuario where id = $id";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Query failed");
        }

        header("Location:index.php");
    }
?>