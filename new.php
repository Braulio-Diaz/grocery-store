<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New register</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
        <div class="row">
            <div class="col">
                <h2>Nuevo registro</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="POST" action="save.php" autocomplete="off" class="row g-3">
                    
                    <div class="col-md-4">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" name="codigo" id="codigo" required autofocus class="form-control">
                    </div>
                    
                    <div class="col-md-4">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" required class="form-control">
                    </div>
                    
                    <h3>Inventario</h3>

                    <div class="col-md-12">
                        <input type="checkbox" name="inventariable" id="inventariable" class="form-check-input">
                        <label for="inventariable" class="form-check-label">Inventariable</label>
                    </div>

                    <div class="col-md-4">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <a href="index.php" class="btn btn-secondary">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </main>
    
</body>
</html>