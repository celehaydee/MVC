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
<body>
<div class="container bg-info col">
      <center><h2>Registrese</h2></center>
    <form action="../controlador/uregistrar.php" method="post">
        <div class="form-group">
          <label for="">Ingrese Usuario</label>
          <input type="text" name="usuarion" id="usuarion" class="form-control" placeholder="Ingrese nombre de usuario" aria-describedby="helpId" required >
          <label for="">Ingrese su clave</label>
          <input type="password" name="claven" id="claven" class="form-control" placeholder="Ingrese su clave" aria-describedby="helpId" required><br>
        <button type="submit" class="btn btn-primary" value="aceptarn" name="aceptarn">Registrarse</button> 
        <br><br>
        </div>
    </form>
    </div>
</body>
</html>