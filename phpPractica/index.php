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
<title>Practica PHP</title>

<body>
<?php include './partials/navbar.html';?>

  <br>
  <div class="row">
    <div class="col s12 center">
      <br>
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <br>
            <div class="center">
              <a class="waves-effect waves-light btn-large" href="./quizA.php">Quiz A</a>
              <a class="waves-effect waves-light btn-large" href="./quizB.php">Quiz B</a>
              <a class="waves-effect waves-light btn-large" href="./quizC.php">Quiz C</a>
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

</html>