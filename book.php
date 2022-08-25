<?php
  // error_reporting(0);
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use Twilio\Rest\Client;
  
  require './phpmailer/vendor/autoload.php';

  $conn = mysqli_connect('localhost', 'root', '', 'bd');

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "";

  }

  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Dni = $_POST['Dni'];
  $Telefono = $_POST['Telefono'];
  $Fecha = $_POST['Fecha'];
  $Horario = $_POST['Horario'];

  $sql = "INSERT INTO `reserva` (`id`, `nombre`, `apellido`, `Dni`, `telefono`, `fecha`, `horario`) VALUES (id, '$Nombre', '$Apellido', '$Dni', '$Telefono', '$Fecha', '$Horario');";

  if(mysqli_query($conn, $sql)){
    readfile("./success/success.html");

    readfile("./message/1.bat");

  }

?>