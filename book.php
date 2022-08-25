<?php
  // error_reporting(0);
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use Twilio\Rest\Client;
  
  require './phpmailer/vendor/autoload.php';
  require './message/twillio/jwt/client';


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
   


  //   $mail = new PHPMailer;
  //   //Enable SMTP debugging.
  //   $mail->SMTPDebug = 0;                           
  //   //Set PHPMailer to use SMTP.
  //   $mail->isSMTP();        
  //   //Set SMTP host name                      
  //   $mail->Host = "smtp.gmail.com";
  //   //Set this to true if SMTP host requires authentication to send email
  //   $mail->SMTPAuth = TRUE;                      
  //   //Provide username and password
  //   $mail->Username = "";             
  //   $mail->Password = "";                       
  //   //If SMTP requires TLS encryption then set it
  //   $mail->SMTPSecure = "tls";                       
  //   //Set TCP port to connect to
  //   $mail->Port = 587;                    
  //   $mail->From = "";
  //   $mail->FromName = "Full Name";
  //   $mail->addAddress("1132551226@vtext.com", "Nico");
  //   $mail->isHTML(true);
  //   $mail->Subject = "Subject Text";
  //   $mail->Body = "<i>Mail body in HTML</i>";
  //   $mail->AltBody = "This is the plain text version of the email content";
  //   if(!$mail->send()) {
  //     echo "";
  //   }
  //   else{
  //     echo "Message has been sent successfully";
  //   }
  // } else {
  //   echo "error";
  // }

  }

?>