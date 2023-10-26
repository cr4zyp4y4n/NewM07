<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio S10-S11</title>
</head>
<body>
<form method="post" action="register.php">
    <label for="name">Nombre:</label><br>
    <input type="text" id="name" name="name" required pattern="[A-Za-z]+"><br>
    <label for="surname">Apellidos:</label><br>
    <input type="text" id="surname" name="surname" required pattern="[A-Za-z]+"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}"><br>
    <label for="confirm_password">Confirmación de la contraseña:</label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br>
    <label for="shipping_address">Dirección de envío:</label><br>
    <input type="text" id="shipping_address" name="shipping_address"><br>
    <label for="card_number">Número de tarjeta:</label><br>
    <input type="text" id="card_number" name="card_number" pattern="\d{16}"><br>
    <label for="expiry_date">Fecha de caducidad:</label><br>
    <input type="text" id="expiry_date" name="expiry_date"><br>
    <label for="security_code">Código de seguridad:</label><br>
    <input type="text" id="security_code" name="security_code" pattern="\d{3}"><br>
  <?php

    ?>
</body>
</html>