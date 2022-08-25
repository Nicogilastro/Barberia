<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Barbero</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

    :root {
      --fondo: #BFCC94;
      --detalles: #0D1821;
      --fondo-inputs: #344966;
      --letra: #F0F4EF;
      --verde: #b4cded;
    }

    body {
      background-color: #0e3558;
      font-family: 'Roboto', sans-serif;
      color: var(--letra);
      text-transform: capitalize!important;
    }

    input {
      all: unset;
      border: solid 1px var(--detalles);
      border-radius: 15px;
      padding: 0 5px 0 10px;
      background-color: var(--fondo-inputs);
      text-transform: uppercase;
      
    }

    /* account system */

    .accountSystem {
      display: flex;
      align-items: center;
      justify-content: right;
      flex-direction: row;
      gap: 15px;
    }

    /* formatting */

    .form-container {
      display: flex;
      justify-content: center;
      align-content: center;
      margin: 30px;

    }

    .form-container form{
      display: flex;
      align-items: left;
      justify-content: center;
      flex-wrap: wrap;
      flex-direction: column;
      gap: 20px;
      min-width: 700px;
    }

    /* text formatting */

    label {
      color: var(--detalles);
      font-weight: 600;
      float: left;
    }

    ::placeholder {
      color: var(--letra);
    }

    form:nth-child(4) {
      all: unset;
    }

    /* boton */

    .reserva {
      min-width: 210px!important;
    }

    .reserva:hover {
      transform: translateY(1px);
    }

    .reserva:active {
      transform: translateY(3px);
    }

    .accountSystem {
      display: flex;
      align-items: center;
      justify-content: right;
      flex-direction: row;
      gap: 15px;
      padding: 15px 15px 0 0;

    }

    .acc, .reg {
      color: black;
      background-color: #346009;
      padding: 10px;
      border-radius: 15px;
      cursor: pointer;
    }

    .acc:hover, .reg:hover {
      background-color: #344900;
      transition: 0.4s;
    }

    .search-bar > div{
      display: flex; 
      align-items: center; 
      justify-content: center; 
      flex-direction: column;
      gap: 20px;

    }

    * {
      font-family: 'Roboto', sans-serif;
    }
    
    .userdetails {
      display: flex;
      align-items: center;
      justify-content: center;
      padding-top: 20px;
    }

    body {
      background-color: white;

    }

    th {
      padding: 9px;
      color: whitesmoke;
      background-color: #155082;
      text-align: center;
    }

    td {
      padding: 9px;
      color: whitesmoke;
      background-color: #4f9ee3;
      text-align: center;
    }
    
    td:hover{
      background-color: #a7cef1;

    }

  </style>
</head>

<body style="background-color: #0e3558;">
  <form class="search-bar" action="./busqueda.php" method="post">
    <div>
      <div>
        Buscar Cliente: <input type="text" name="busqueda">
      </div>
      <div>
        Buscar Cliente:
        
          <select name="column">
            <option value="nombre">Nombre</option>  

            <option value="telefono">Apellido</option>

            <option value="dni">Dni</option>

            <option value="fecha">Fecha</option>

            <option value="telefono">Telefono</option>

            <option value="fecha">Fecha</option>

            <option value="horario">Horario</option>
            
        </select>
      </div>
        <input type ="submit">
      </div>
  </form>
    
</body>
</html>

