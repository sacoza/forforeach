<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando estructura while</title>
  </head>
  <body>
    <?php
$tablas=[
"primera"=>5,
"segunda"=>13,
"tercera"=>11
];

foreach ($tablas as $valor){
  echo "<hr>";
  for ($numero=1; $numero <11; $numero++){
  $resultado=$valor+$numero;
  echo $valor ." x ".$numero ." = ".$resultado ."<br>";
  }
}
?>
