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
<title>QUIZ A</title>
<?php

session_start();

//Eliminar la Session
unset($_SESSION["sessionArray"]);

$productos = array();
$_SESSION["sessionArray"] = $productos;


?>


<body>
  <nav>
    <div class="nav-wrapper teal darken-4">
      <a href="#" class="brand-logo center " style=" font-family: GillSans;">Practica PHP</a>
    </div>
  </nav>
  <!--  Practica PHP -->
  <div class="row">
    <div class="col s4">
      <!-- Form Agregar el Producto -->
      <br>
      <div class="card horizontal">
        <div class="card-image">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <h5 class="header center">Agregar producto</h5>
            <br>
            <form id="formProducts" class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="name_produc" type="text" class="validate" name="name_produc" required>
                  <label for="name_produc">Nombre del Producto</label>
                </div>
                <div class="input-field col s6">
                  <input id="precio_produc" type="number" class="validate" name="precio_produc" required>
                  <label for="precio_produc">Precio del Producto</label>
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Agregar Producto
                <i class="material-icons right">send</i>
              </button>
            </form>
          </div>
          <div class="card-action">
          </div>
        </div>
      </div>
    </div>

    <div class="col s7">
      <br>
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <h5 class="header center">Tabla de productos</h5>
            <br>
            <!-- Tabla de Productos -->
            <div id="tableProduc" class="responsive-table">
            </div>

          </div>
        </div>
      </div>


    </div>



  </div>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- Procesar con Ajax PHP -->
  <script>

    // Form para los Productos
    $(document).ready(function () {
      $("#formProducts").submit(function (event) {
        // Detener el envío del formulario
        event.preventDefault();

        // Obtener los datos del formulario
        var formData = $(this).serialize();

        // Enviar los datos al servidor usando AJAX
        $.ajax({
          type: "POST",
          url: "./operaciones/agregarProduct.php",
          data: formData,
          success: function (response) {
            // Mostrar la respuesta del servidor

            //Validar Respuesta del AgregarProductoPHP
            if (response.includes("errPrec")) {

              M.toast({ html: 'Precio Incorrecto', classes: 'rounded' });

            } else if (response.includes("errLimit")) {
              M.toast({ html: 'Error alcanzo el limite de compra', classes: 'rounded' });
            }
            else {
              $("#tableProduc").html(response);
              M.toast({ html: 'Producto Agregado', classes: 'rounded' });
            }

          }
        });
      });
    });

  </script>


</body>

</html>