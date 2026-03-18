<?php
echo "hello world!!!".'<br>';
print "meu primeiro código em PHP";

$num1 = 12;
$num2 = 22;

$texto = "texto qualquer";

$soma = $num1 + $num2;
echo "<br> a soma de $num1 com $num2 é igual a $soma";

$idade = 16;

if ($idade >= 18) {
    echo "<br> idade: $idade - você é maior de idade";
} else {
    echo "<br> idade: $idade - você é menor de idade";
}

// ativadade 1: receber 3 notas, calcular a média e mostrar se o aluno foi aprovado ou reprovado (nota 7)   

$nota1 = 8;
$nota2 = 6;
$nota3 = 9;

$soma_media = $nota1 + $nota2 + $nota3; 
$media = $soma_media / 3;

if ($media >= 7) {
    echo "<br> aluno aprovado com media $media";
}
else {
    echo "<br> aluno reprovado com media $media";
}

?>