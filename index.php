<html>
<head>
	<meta charset="utf-8">
	<h2>Bienvenido</h2>
</head>
<body>
<p>Ingresa tu nombre de usuario y contraseña:</p>
<for name="login" action="login.php" method="post">
<label for="usuario">Nombre de usuario:</label>
<input type="text" id="usuario" name="usuario">
<br />
<label for="contraseña">Contraseña</label>
<input type="password" id="contraseña" name="contraseña">
<br />
<input type="submit" name="enviar" value="enviar">
</form>
</body>
</html>
