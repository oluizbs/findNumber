<?php

// ideia de upgrade, desabilitar o botão ao atingir o número de tentativas máximas
// colocar um time para tentar de novo e resetar o número de tentativas
// colocar de 0 á 100 e adicionar dicas, serão 5 tentativas e dicas como "o número é primo"
// seria interessante pesquisar sobre keyframes para js, mais em questão de estilo
// ver sobre cookies
// tentar fazer algo parecido com o contexto
// e por fim... refaça todo o projeto, pesquisando o mínimo possível

session_start();
    // random_int = função que gera número aleatório da escala fonecida entre o () ex: random_int(1,100)
   if(!isset($_SESSION['randomNumber'])){
    $generatedNumber = [];

    for ($i = 0; $i <= 10; $i ++){
        $generatedNumber[] = $i;
    };

    // array_rand = função que seleciona um número aleatório do array
        $randomNumber = $generatedNumber[array_rand($generatedNumber)];
        
        $_SESSION['randomNumber'] = $randomNumber;

        echo $_SESSION['randomNumber']." <br>";
        
        $_SESSION['attempt'] = 1;
        
        $_SESSION['maxAttempt'] = 3;
    }else{
        $randomNumber = $_SESSION['randomNumber'];

    };

$numberUser = $_POST["numberUser"];

$attempt = $_SESSION["attempt"]; 

$maxAttempt = $_SESSION["maxAttempt"];

if( $numberUser == $randomNumber){
    echo "Parabéns você acertou o número secreto";
    
}elseif($numberUser < $randomNumber){
    echo "O numero secreto é maior";
    
}else{
    echo "O numero secreto é menor";
}

if($_SESSION['attempt'] = $_SESSION['maxAttempt']){
    echo "<br> Tentativas esgotadas... Não foi dessa vez :( <br>";
}else{
    $_SESSION["attempt"] = $attempt + 1;
}
