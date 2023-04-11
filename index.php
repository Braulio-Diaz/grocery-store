<?php
require 'config/database.php';

$db = new Database();
$connect = $db->connection();
$query = $connect->query("SELECT id, codigo, descripcion, stock FROM productos ORDER BY codigo ASC");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery store</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
        <div class="row">
            <div class="col">
                <h4>Productos</h4>
                <a href="new.php" class="btn btn-primary float-left">Nuevo</a>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Stock</th>
                            <th>Inventariable</th>
                            <th>activo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($result AS $res){
                        ?>
                        <tr>
                            <td><?php echo $res['id'] ?></td>
                            <td><?php echo $res['codigo'] ?></td>
                            <td><?php echo $res['descripcion'] ?></td>
                            <td><?php echo $res['stock'] ?></td>
                            <td><a href="edit.php?id=<?php echo $res['id']; ?>" class="btn btn-success">Editar</a></td>
                            <td><a href="delete.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>
    
</body>
</html>