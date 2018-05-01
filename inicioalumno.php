<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Alan Martin">
	<meta name="description" content="Inicio de sesion">
  <link rel="stylesheet" type="text/css" href="estilocabecera.css">
	<link rel="stylesheet" type="text/css" href="iniciodirector.css">
	<title>Iniciar sesion</title>
  <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
  <title>Inicio</title>
	<script type="text/javascript">

//Nombramos la función
function valida_envia(){

//Validamos un campo o área de texto, por ejemplo el campo nombre
if (document.form.email.value.length==0){
alert("Tiene que escribir tu correo")
document.form.email.focus()
return 0;
}

if (document.form.passalum.value.length==0){
alert("Ingresar contraseña")
document.form.passalum.focus()
return 0;
}

//Si todos los campos han validado correctamente, se envía el formulario
document.form.submit();
}

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
   <h2>Inicio de sesión alumno</h2>

      <form action="identifica.php" method="POST" name="form">
       <p>
        <label for="username">Correo:</label>
        <input type="email" name="email" id="">
        <br><br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="passalum" id="">
        <br><br>
        <input name="enviar" type="submit" value="Entrar" onclick="valida_envia()">
        <br>
        <input type=radio name=Usuario value=Director style="visibility: hidden;">
        <input type=radio name=Usuario value=Administrador style="visibility: hidden;">
        <input type=radio name=Usuario value=Maestro style="visibility: hidden;">
        <input type=radio name=Usuario value=Alumno checked="" style="visibility: hidden;">  
       </p>
      </form>

  </section>

</body>
</html>