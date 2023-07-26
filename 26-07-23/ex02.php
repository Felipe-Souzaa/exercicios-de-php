<?php
$num = 0;
while(true){
    $a = readline("Digite um valor: ");
    if ($num == $a) {
        echo "Os valores são iguais\n";
        echo "Parabéns os valores são iguais ♥";
        break;
    }
    else {
        echo "Os valores são diferentes\n";
        echo "Digite novamente\n";
        echo "\n";
    }
}
?>
