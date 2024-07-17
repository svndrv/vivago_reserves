<?php

session_start();
if (isset($_SESSION['id'])) {
    header("Location:dashboard.php");
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>

    <section class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <p class="fw-bold h3 mb-3">Login Vivago</p>
                <form id="formLogin" class="w-25">
                    <input type="hidden" value="login" name="option">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="usuario" name="usuario">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user" style="color: #474747;"></i>
                        </span>
                    </div>
                    <label for="contrasena" class="form-label">Contraseña:</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="contrasena" name="contrasena">
                        <span class="input-group-text">
                            <i class="fa-solid fa-lock" style="color: #474747;"></i>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
    </section>
</body>

<!-- BOOSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- AJAX -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- SWEETALERT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- FONTAWESOME -->
<script src="https://kit.fontawesome.com/2314719ba4.js" crossorigin="anonymous"></script>
<!-- JS -->
<script src="js/login.js"></script>

</html>