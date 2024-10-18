<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio01</title>
    <link rel="stylesheet" href="<?php echo asset('resources/css/bootstrap.min.css') ?>">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <h2 class="text-center mt-3">Datos de Contacto</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" class="form-control" name="edad">
                    </div>
                    <button type="submit" class="btn btn-info text-white">Enviar</button>
                </form>
            </div>
            <div class="col-md-6">
                <div>

                    <?php 
                    if(isset($_POST['nombres']) && ($_POST['email']) && ($_POST['edad'])){
                        $nombres = $_POST['nombres'];
                        $email = $_POST['email'];
                        $edad = $_POST['edad'];?>

                       <p>Su nombre es: <?php echo $nombres?></p><br>
                       <p>Su correo es: <?php echo $email?></p><br>
                       <p>Su edad es: <?php echo $edad?></p> <br>
                    <?php }?>
            
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</html>