<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Alan Martin">
	<meta name="description" content="Inicio de sesion">
	<link rel="stylesheet" type="text/css" href="iniciodirector.css">
  <link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<title>Iniciar sesion</title>
  <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
  <title>Inicio</title>
	<script type="text/javascript">

</script>
</head>
<body> 
 <header>
  <div id="Cabecera">
    <div id="boton">
      <a class="botones" href="inicio.php">Inicio</a> 
      <a class="botones" href="iniciodirector.php">Director</a>
      <a class="botones" href="inicioadministrador.php">Administrador</a>
      <a class="botones" href="iniciomaestro.php">Maestro</a>
      <a class="botones" href="inicioalumno.php">Alumno</a>
    </div>
  </div>
 </header>

<section id="cuerpo">

   <h1>Bievenido</h1>
   <h2>Inicio de sesión maestro</h2>

      <form action="identifica.php" method="POST" name="form">
       <p>
        <label for="username">Correo:</label>
        <input type="email" name="email" id="">
        <br><br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="passmaestro" id="">
        <br><br>
        <input name="enviar" type="submit" value="Entrar">
        <br>

      </p>
      </form>

</section>
</body>
</html>