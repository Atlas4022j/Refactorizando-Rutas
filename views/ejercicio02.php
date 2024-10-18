<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio02</title>
    <link rel="stylesheet" href="<?php echo $app_url . 'resources/css/bootstrap.min.css' ?>">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto mb-5">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->
        <h1 class="text-center mt-3">Calculadora</h1>
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Datos</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Numero 1</label>
                                <input type="numb" class="form-control" name="n1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numero 2</label>
                                <input type="numb" class="form-control" name="n2">
                            </div>
                            <button class="btn btn-info text-white">Enviar</button>
                        </div>
                        <div class="col-md-6">


                            <?php if (isset($_POST['n1']) && ($_POST['n2'])) {
                                $n1 = $_POST['n1'];
                                $n2 = $_POST['n2']; ?>

                                <p>La suma es: <?php echo ($n1 + $n2) ?></p><br>
                                <p>La resta es: <?php echo ($n1 - $n2) ?></p><br>
                                <p>La multiplicaion es: <?php echo ($n1 * $n2) ?></p><br>
                                <p>La divicion es: <?php echo ($n1 / $n2) ?></p><br>

                            <?php } ?>
                        </div>

                    </div>
                </div>
        </form>

    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>

</html>
<?php
