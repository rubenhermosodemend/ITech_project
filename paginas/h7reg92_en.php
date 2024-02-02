<?php
require_once '../assets/phpassets/functions.php';
if (isset($_POST['registrar'])){    
    $error=$user=$pass=$pass2=$birthdate=$result=$term="";
    $conexion= mysqli_connect('localhost','root','','proy1v1procesoregistro') or die(mysqli_error());
    $user=$_POST['email'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $birthdate=$_POST['nacimiento'];
    if (isset($_POST['terms'])){
    $term=$_POST['terms'];
    }

    if ($user==""|| $pass=="" || $pass2=="" || $birthdate=="" ){
        $error="There are some empty values";
    } 
    else {
        $result = queryMysql("SELECT * FROM members WHERE user='$user'");    
        if ($result->num_rows) {
         $error = "The user already exists";
        }else{
        if ($pass !== $pass2){
         $error = "Unmatching passwords";
        }else{
        if ($term==false){
            $error="Accept terms and conditions";
        }else{
        $registro="INSERT INTO members(user,pass,birthdate) VALUES ('$user','$pass','$birthdate')"or die(mysqli_error());
        $execute= mysqli_query($conexion, $registro);
        }
        }
       
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

        <h2>Sign in</h2>
        <form class="form-center border p-3 bg-light" role="form" method="POST" action="h7reg92_en.php">
          <div class="form-group mb-3">
              <label for="exampleInputEmail1" class="form-label" > E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputPassword1" class="form-label" >Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputPassword2" class="form-label">Repeat password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" name="pass2">
          </div>
          <div class="m-3">
            <label for="nacimiento"> Birth date:</label>
            <input type="date" name="nacimiento" id="nacimiento">
          </div>
          <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terms">
            <label class="form-check-label" for="exampleCheck1">Acepto los terminos y condiciones</label>
          </div>
            <?php
          /** @var type $_POST */
          if (isset($_POST['registrar'])){  
                if( $error!==""){
                    echo "<strong>ERROR!!!: $error </strong><br>";
                }else {
                    echo "<strong>PROCESS COMPLETED</strong>";
                }
            }
            ?>
          <button type="submit" class="btn btn-secondary" name="registrar">Sign in</button>
          <button type="submit" class="btn btn-secondary" name="salir"><a href="../index-ingles.php" style="text-decoration: none; color: white"> Back</a>  </button>
        </form>
      </div>
      <br>
      <br>
      <br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="../assets/js/cart.js"></script>
  <script src="../assets/js/store.js"></script>
</body>

</html>
