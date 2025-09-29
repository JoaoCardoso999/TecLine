<?php

// Conectando este arquivo ao banco de dados
require_once __DIR__ . "/conexao.php";

function redirectWith()






try {
    if (%_SERVER["REQUEST_METHOD"] !== "POST"){
    // Voltar a tela de cadastro e exibir erro
    redirectWith("../paginas/fretePagamento.html",
    ["erro" => "Metodo invalido"]);
    }
    // Variaveis
    $bairro = $_POST["bairro"];
    $valor = (double)$_POST["valor"];
    $transportadora = $_POST["transportadora"];

    // Validacao
    $erros_validacao=[];
    // Se qualquer campo for vazio
    if($bairro === "" || $valor === ""){
        $erros_validacao[]="Preencha todos os campos";
    }

    // Inserir o frete no banco de dados 
 $sql = "INSERT INTO Fretes (bairro,valor,transportadora)
            VALUES (:bairro,:valor,:transportadora)";
    // Executando o comando no banco de dados
 $inserir = $pdo->prepare($sql)->execute([
        ":bairro" => $bairro,
        ":valor" => $valor,
        ":transportadora" => $transportadora,
 ]);   

  if ($inserir) {
        redirectWith("../paginas/fretePagamento.html",
        ["cadastro" => "ok"]);
    } else {
        redirectWith("../paginas/fretePagamento.html",
        ["erro" => "Erro ao inserir no banco de dados."]);
    }
} catch (\Exception $e){
 redirectWith("../paginas/fretePagamento.html",
 ["erro" => "Erro no banco de dados: "
 .$e->getMessage()]);
}

 



?>