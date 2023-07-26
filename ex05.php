<?php
$valor = readline("Digite um valor: ");
if ($valor > 0) {
    echo "O valor $valor é positivo";
}
elseif ($valor < 0) {
    echo "O valor $valor é negativo";
}
else {
    echo "O valor é igual a zero";
}
?>
