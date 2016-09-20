<pre>
<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('Carro.php');

$carro 		= new Carro('Prata');
$carro2 	= new Carro('Verde');
$carro3 	= new Carro();





//----------------------------------------------------
$carro->marca = "Audi";

echo $carro->marca;
echo $carro->modelo;
