<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>agencias de remises</title>
  <link rel="stylesheet" href="https://github.com/yourbeautyweb/newpwa/css/style.css">
  <meta name="description" content="remiserias de buenos aires">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
.header{
  background-color: #0e1531;
  width: 100%;
  margin: auto;
  padding: 1rem;
  color: #fff;
  text-align: center;
}
#my-row{
  width: 100%;
  min-height: 90px;
  padding: 40px;
  background: #ffeb3b;
}
.contaner{
  width: 100%;
  margin: 0;
  padding: 0;
  text-align: center;
  font-family: ubuntu, monospace;
}
a{
  color: #1e5ce9;
}
#my-h1{
  color: #fff;
}
#result{
  font-size: 1.5em; !important
}
</style>
</head>
<body>
  <div class="contaner">

    <div class="header" id="gris">
      <h2>
        <span style="color:#f9fd0e;"> remise.ar</span></a></h2>
    </div>



    <div id="my-row">

<h1 id="my-h1">Ingresa ciudad</h1>

      <div class="col-md-6 mx-auto">
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></span>
          <input type="text" class="form-control" id="search" placeholder="busca ciudad">
        </div>
      </div>
      <div class="container">

          <div class="col-md-9" id="result">
          </div>

        </div>
      </div>

<?php include "https://github.com/yourbeautyweb/newpwa/agencia/nosotros.php" ?>

<div class="separa"></div>
<div class="centrado" id="gris">
   <p>Remise.ar @copy 2021</p>

</div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
   
</body>
</html>
