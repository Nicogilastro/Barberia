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

    // Required if your environment does not handle autoloading
    require __DIR__ . '/vendor/autoload.php';
    
    // Use the REST API Client to make requests to the Twilio REST API
    
    // Your Account SID and Auth Token from twilio.com/console
    $sid = 'AC705c4a96adfbec3eeb75cc31caad3ff9';
    $token = '3d449aed513c044bdb9f317dbf3a6c19';
    $client = new Client($sid, $token);
    
    // Use the client to do fun stuff like send text messages!
    $client->messages->create(
        // the number you'd like to send the message to
        '+541166577020',
        [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+541132551226',
            // the body of the text message you'd like to send
            'body' => 'que te pasa pedazo de puta pelotuda!'
        ]
    );
  }

?>