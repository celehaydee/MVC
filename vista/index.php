<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>

</head>
    </form>
    </div>
</body><body>
<div class="container bg-info col">
      <center><h2>Ingrese</h2></center>
    <form action="../controlador/uingresar.php" method="post">
        <div class="form-group">
          <label for="">Usuario</label>
          <input type="text" name="usuario" id="" class="form-control" placeholder="Ingrese nombre de usuario" aria-describedby="helpId" required >
          <label for="">clave</label>
          <input type="password" name="clave" id="" class="form-control" placeholder="Ingrese su clave" aria-describedby="helpId" required><br>
        <button type="submit" class="btn btn-primary" value="aceptar" name="aceptar">Aceptar</button> 
        <br>
          <a href="../vista/vregistro.php">Registrarse</a>
        <br><br>
</html>