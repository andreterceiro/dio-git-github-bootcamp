<?php

if ((! isset($_GET['valor1'])) || (! isset($_GET['valor2']))) {
    echo "Por favor insira os parâmtros GET valor1 e valor2";
    exit;
}

echo $_GET['valor1'] + $_GET['valor2'];
