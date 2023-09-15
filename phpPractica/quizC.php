<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
    </script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QUIZ C</title>

</head>

<body>
    <?php include './partials/navbar.html'; ?>

    <br>
    <div class="row">
        <div class="col s4">
            <!-- Form Agregar el Producto -->
            <br>
            <div class="card horizontal">
                <div class="card-image">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h5 class="header center">Consultar Pais</h5>
                        <br>
                        <form id="ConsultarSaludo" class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="paisValue" required>
                                        <option value="" disabled selected>Seleccionar una Opcion:</option>

                                        <?php
                                        // Cargar Paises
                                        $paises = array("Venezuela", "Brasil", "Estados Unidos", "Francia");

                                        foreach ($paises as $i) {
                                            echo "<option value=\"" . $i . "\">" . $i . "</option>";
                                        }
                                        ?>

                                    </select>
                                    <label>Seleccionar Pais:</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Consultar Saludo!
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                    <div class="card-action">
                    </div>
                </div>
            </div>
        </div>

        <div class="col s4 center">
            <br>
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <br>
                        <div class="center">
                            <div id="response"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    <!-- <a class="waves-effect waves-light btn-large">Button</a> -->

</body>
<!--JavaScript at end of body for optimized loading-->
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery
    $(document).ready(function () {
        $("#ConsultarSaludo").submit(function (event) {
            // Detener el envío del formulario
            event.preventDefault();

            // Obtener los datos del formulario
            var formData = $(this).serialize();

            // Enviar los datos al servidor usando AJAX
            $.ajax({
                type: "POST",
                url: "./operaciones/ConsultarSaludo.php",
                data: formData,
                success: function (response) {
                    // Mostrar la respuesta del servidor
                    // alert(response)

                    $("#response").html(response);


                }
            });
        });
    });


    $(document).ready(function () {
        $('select').formSelect();
    });

</script>

</html>