<?php
$nombre = "";
if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"] . '<br>';
}

$edad = "";
if (isset($_POST["edad"])) {
    $edad = $_POST["edad"] . '<br>';
}

$check = "";
if (isset($_POST["check"])) {
    $check = $_POST["check"];
}

// Redirección basada en la edad
if (isset($_POST["edad"])) {
    $edad = $_POST["edad"];
    if ($edad < 18 && $edad >= 1) {
        header('Location: menor.php');
        exit; // Agrega exit después de la redirección para detener la ejecución del script
    } elseif ($edad >= 18) {
        header('Location: MarceloskyWeb.php');
        exit; // Agrega exit después de la redirección para detener la ejecución del script
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menor.css">
    <link rel="icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="menor.php">
    <link rel="stylesheet" href="MarceloskyWeb.php">
    <title>Document</title>
</head>

<body>
    <h4>
        <div class="container mt-5">
            <form action="" method="post">
                <div class="row justify-content-center">
                    <div class="col-md-4 ">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control rounded" id="nombre" name="nombre" required>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="number" class="form-control rounded" id="edad" name="edad" required>
                    </div>
                </div>
        </div>
        <br>
        <div class="mb-5">
            <button type="submit" class="btn btn-primary rounded">Enviar</button>
        </div>
        </form>
        </div>
    </h4>



    <h4>
        <?= $nombre ?><br>
        <?= $edad ?><br>
        <?= $check ?><br>
    </h4>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>