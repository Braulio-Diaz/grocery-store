<?php
require 'config/database.php';

$db = new Database();
$connect = $db->connection();

$ok = false;

//UPDATE
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $inventariable = isset($_POST['inventariable']); //EN CASO DE QUE INVENTARIABLE NO SE PRESIONE, SE ASIGNA VALOR 0

    if ($stock == ''){
        $stock == 0;
    }

    $query = $connect -> prepare("UPDATE productos SET codigo=?, descripcion=?, inventariable=?, stock=?  WHERE id=?");

    $result = $query -> execute(array($codigo, $descripcion, $inventariable, $stock, $id));

    if($result){
        $ok = true;
    }

//CREATE
} else {
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $inventariable = isset($_POST['inventariable']); //EN CASO DE QUE INVENTARIABLE NO SE PRESIONE, SE ASIGNA VALOR 0

    if ($stock == ''){
        $stock == 0;
    }

    $query = $connect -> prepare("INSERT INTO productos (codigo, descripcion, inventariable, stock, activo) 
    VALUES (:cod, :descr, :inv, :sto, 1)");

    $result = $query -> execute(array('cod' => $codigo, 'descr' => $descripcion, 'inv' => $inventariable, 
    'sto' => $stock));

//SI TODO ESTÁ CORRECTO EN RESULT, LA VARIABLE $OK SE VUELVE TRUE E INSERTA 
    if ($result){
        $ok = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
        <div class="row">
            <div class="col">
                <?php if($ok){ ?>
                    <h3>Guardado exitoso</h3>
                <?php }else{?>
                    <h3>Error al guardar</h3>
                <?php }?>
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