<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<title>QUIZ B</title>
<?php

session_start();

//Eliminar la Session
unset($_SESSION["FlagNumber"]);

$Boleean = true;
$_SESSION["FlagNumber"] = $Boleean;

?>

<body>
<?php include './partials/navbar.html';?>

  <br>
  <div class="row">
    <div class="col s3 push-s1">
      <div class="row">
        <div class="card horizontal">
          <div class="card-image">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="header center">Ingresar Numero</h5>
              <br>
              <form id="formNumber" class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="number" type="text" class="validate" name="number" required>
                    <label for="number">Ingresar Numero:</label>
                  </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Agregar Numero
                  <i class="material-icons right">send</i>
                </button>
              </form>
            </div>
            <div class="card-action">
            </div>
          </div>
        </div>
      </div>
      </span>
    </div>

    <div class="col s5 push-s2 center">
      
      <div class="card horizontal">
          <div class="card-image">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h5 class="header center">Lista de Numeros</h5>
              <br>
              <div id="numberPrint"></div>
            </div>
            <div class="card-action">
            </div>
          </div>
        </div>
    </div>

  </div>
</body>
<!--JavaScript at end of body for optimized loading-->
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Procesar con Ajax PHP -->
<script>

  // Form para los Productos
  $(document).ready(function () {
    $("#formNumber").submit(function (event) {
      // Detener el envío del formulario
      event.preventDefault();

      // Obtener los datos del formulario
      var formData = $(this).serialize();

      // Enviar los datos al servidor usando AJAX
      $.ajax({
        type: "POST",
        url: "./operaciones/IngresarNumero.php",
        data: formData,
        success: function (response) {
          // Mostrar la respuesta del servidor
          // alert(response)
          

          if (response.includes("ErrorN")) {
            M.toast({ html: 'No se Mostrara el Numero' });
          }else{
            $("#numberPrint").html(response);
          }

        }
      });
    });
  });

</script>

</html>