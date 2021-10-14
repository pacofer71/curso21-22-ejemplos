<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:login.php");
    die();
}
if($_SESSION['perfil']!=0){
    header("Location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>admin</title>
</head>

<body style="background-color: crimson;">

    <!-- navbar -->
    <ul class="nav justify-content-end">

        <li class="nav-item">
            <input type="text" class="form-control" disabled value="<?php echo $_SESSION['usuario']; ?>" style="width: 12rem;" />
        </li>
        <li class="nav-item">
            <a href="cerrarsesion.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i></a>
        </li>
    </ul>
    <!-- Fin Barra -->

    <div class="container mt-4">
       
        <a href="index.php" class="btn btn-secondary"><i class="fas fa-home"></i> Inicio</a>
    </div>

</body>

</html>