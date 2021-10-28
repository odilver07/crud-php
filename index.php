<?php include("db.php") ?>
<?php include("pages/header.php") ?>

    <div class="container p-4 row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_user.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" class="form-control" id="apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" name="edad" class="form-control" id="edad" required>
                    </div>
                    <div class="form-group d-grid gap-2 pt-2">
                        <input type="submit" class="btn btn-primary btn-block" name="save_user" value="save user" id="guardar">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "select * from usuario";
                    $usuarios = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($usuarios)){ ?>
                    <tr>
                        <td> <?php echo $row['id'] ?></td>
                        <td> <?php echo $row['nombre'] ?></td>
                        <td> <?php echo $row['apellido'] ?></td>
                        <td> <?php echo $row['edad'] ?></td>
                        <td>
                            <a class="btn btn-secondary" href="edit_user.php?id=<?php echo $row['id'] ?>">
                            Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="delete_user.php?id=<?php echo $row['id'] ?>" id="eliminar">
                            Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>

    <script src="js/guardado.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>