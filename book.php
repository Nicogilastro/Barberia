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
    $sid    = ""; 
    $token  = ""; 
    $twilio = new Client($sid, $token); 
     
    $message = $twilio->messages 
                      ->create("whatsapp:+5491132551226", // to 
                        array( 
                            "from" => "whatsapp:+14155238886",       
                            "body" => "Hola, queria hacer una reserva. Soy " . "$Nombre" . " " . "$Apellido" . ", mi dni es " . "$Dni" . " y mi telefono es " . "$Telefono" . "." . " El dia seria, el " . "$Fecha" . " a las " . "$Horario" . ". Muchas Gracias!"
                        ) 
                      ); 
     
    print($message->sid);
  }

?>