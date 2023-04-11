<?php 
require 'config/database.php';

$db = new Database();
$connect = $db->connection();

$id = $_GET['id'];

$query = $connect -> prepare("DELETE FROM productos WHERE id=?");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
    <div class="row">
        <div class="col">
            <?php if($query -> execute([$id])) { ?>
                <h3>Producto eliminado</h3>
            <?php }else{ ?>
                <h3>Error al eliminar</h3>
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
          <a href="index.php" class="btn btn-secondary">Regresar</a>  
        </div>
    </div>
    </main>
</body>
</html>