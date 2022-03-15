<?php
/*******************************************************************
* Objetivo: arquivos para criar funções e separação de par e impar
* Data: 22/02/2022
* Autor: Vinicio
* Versão: 1.0
********************************************************************/

$resultado = numerosParesImpares(10, 20);
echo("<pre>");
print_r($resultado);
echo("</pre>");

//Função para separar uma sequência de numeros pares
function numerosPares ($numeroInicial, $numeroFinal)
{   
    //criando variaveis internas para fazer a trataiva
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $pares = array();
    $cont = (int) 0;
    
    while ($numInicial <= $numFinal) 
    {
        if($numInicial%2 == 0)
        {
            $pares[$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    }
    return $pares;

}

//Função para separar uma sequência de numeros pares

function numerosImpares ($numeroInicial, $numeroFinal)
{   
    //criando variaveis internas para fazer a trataiva
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $impares = array();
    $cont = (int) 0;
    
    while ($numInicial <= $numFinal) 
    {
        if($numInicial%2 == 1)
        {
            $impares[$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    }
    return $impares;
    
}

function numerosParesImpares ($numeroInicial, $numeroFinal)
{
    //Recebe os dados dos argumentos de função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    
    //Variaveis para criar os arrays individuais
    $pares = array();
    $impares = array();
    $paresImpares = array();
    $contPar = (int) 0;
    $contImpar = (int) 0;

    //chama as funções que separam numeros pares e impares
    $pares = numerosPares($numInicial, $numFinal);
    $impares = numerosImpares($numInicial, $numFinal);
    
        // fazendo o que está acima não precisaremos fazer o que está abaixo porque
        // já está chamando as partes separadas.

            // //Repetição para validar um sequência de pares e impares
            // while ($numInicial <= $numFinal) 
            // {
            //     //verifica se o numero é par (==0) e monta a lista de numeros pares
            //     if($numInicial%2 == 0)
            //     {
            //         $pares[$contPar] = $numInicial;
            //         $contPar++;
            //     }else  //Monta a lista de numeros impares (caso !=0)

            //     {
            //         $impares[$contImpar] = $numInicial;
            //         $contImpar++;
            //     }
            //     $numInicial++;
            // }
    

    //Criamos um array para armazenar os dois arrays individuais (Pares e impares).
    //Criamos uma chave dentro do array chamada "Pares" para identificar a lista dos pares
        // e "Impares" para identificar a lista dos impares
    $paresImpares = array(
        "Pares"     => $pares,
        "Impares"   => $impares
    );

    return $paresImpares;

}



?>