
<?php
require_once '../assets/phpassets/functions.php';
session_start();
if (isset($_POST['login'])) {
    $error = $user = $password = "";
    $conexion = mysqli_connect('localhost', 'root', '', 'proy1v1procesoregistro') or die(mysqli_error());
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "" || $pass == "") {
        $error = "Por favor, introduzca las credenciales";
    } else {
        $result = mysqli_query($conexion, "SELECT * FROM members WHERE user='$user'");
        if (mysqli_num_rows($result) > 0) {
            $findpass = mysqli_query($conexion, "SELECT * FROM members WHERE user='$user'");
            $passresult = mysqli_fetch_array($findpass);
            if ($passresult["pass"] == $pass) {
                echo "CONEXIÓN ESTABLECIDA";
                $_SESSION['user']=$user;
                
                if (!isset($_SESSION['CREATED'])) {
                    $_SESSION['CREATED'] = time();
                } else if (time() - $_SESSION['CREATED'] > 1800) {

                    session_regenerate_id(true);
                    $_SESSION['CREATED'] = time();
                }
                header('Location: ../index.php');
            } else {
                $error = "El usuario y la contraseña no son correctos";
            }
        } else {
            $error = "El usuario no existe";
        }
        
        


    }
}
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>ITech home page</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
        <link rel="stylesheet" href="../assets/styles/boxes.css">
        <link rel="stylesheet" href="../assets/styles/aourselves.css">
        <link rel="stylesheet" href="../assets/styles/store.css">
        <link rel="icon" type="image/x-icon" href="../assets/images/icono_itech.png">
    </head>
    <body> 
        <div class="container align-items-center col-4 py-5">

            <h2>Bienvenido</h2>
            <form class="form-center border p-3 bg-light" role="form" method="POST" action="login.php">
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                    <input type="email" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" >
                </div>
<?php
/** @var type $_POST */
if (isset($_POST['login'])) {
    if ($error !== "") {
        echo "<strong>ERROR!!!: $error </strong><br>";
    }
}
?>
                <button type="submit" class="btn btn-secondary" name="login">Entrar</button>
                <button type="submit" class="btn btn-secondary" name="salir"><a href="../index.php" style="text-decoration: none; color: white"> Volver</a>  </button>
            </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <script src="../assets/js/cart.js"></script>
    <script src="../assets/js/store.js"></script>
</body>

</html>
