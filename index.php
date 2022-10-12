<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1 class="d-flex justify-content-center">Tabla de multiplicar</h1>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <form action="" method="post">
                <div class="form-group">
                    <label>Numero a multiplicar</label>
                    <br>
                    <input type="text" class="col-sm" name="numero" placeholder="Ingrese numero">
                    <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
                    <input class="btn btn-primary" type="reset" value="Borrar">
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-center">
            <?php include("./css/multiplicacion.php") ?>
        </div>
    </div>
</body>
</html>