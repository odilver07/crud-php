<script src="js/guardado.js"></script>
<?php
include("db.php");
    if(isset($_POST['save_user'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = (int) $_POST['edad'];

        $query = "insert into usuario(nombre,apellido,edad) values ('$nombre','$apellido','$edad')";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("query fail");
        }
        header("Location: index.php");
}
?>

