<?php

require "Calculadora.php";

$notas = [9, 5, 10, 2];

$calculadora = new Calculadora();

$media = $calculadora->calculaMedia($notas);

echo "MÉDIA: $media";
