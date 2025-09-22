<?php
// Se conectar ao banco de dados
require_once __DIR__ ."/conexao.php";


// Funcao para capturar os dados passados de uma pagina para a outra
function redirecWitch($url, $params=[]){
// Verifica se os parametros nao vieram vazios
if(!empty($params)){
// Separar os parametros em espacos diferentes
$qs= http_build_query($params);
$sep = (strpos($urls,'?') === false) ? '?': '&';
$url .= $sep . $qs;
}
// Joga a url para o cabecalho no navegador
header("location: $url");
// Fecha o script
exit;
}

// Capturando os dados e jogando em variaveis 
try{
// Se o metado de envio for diferente do post    
    if($_SERVER["RESQUEST_METHOD"] !== "POST"){
// Voltar a tela de cadastro e exibir erro
        redirecWitch("../paginas/cadastro.html",
      ["erro "=> "Metodo inválido"]);
    }
    // Jogando os dados da dentro de variaveis
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $dataNascimento = $_POST["dataNascimento"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $emailNovamente = $_POST["emailNovamente"]
    $senha = $_POST["senha"];
    $senhaNovamente = $_POST["senhaNovamente"];
    

    // VALIDANDO OS CAMPOS
// Criar uma variavel para receber os erros de validacao
$erros_validacao=[];
if($nome === "" || $sobrenome === "" || $dataNascimento === "" || $telefone === "" || $cpf === ""
|| $email === "" || $emailNovamente === "" || $senha === "" || $senhaNovamente === "")



//Verificar se senha e confirmar senha sao diferentes
if($senha !== $senhaNovamente){
$erros_validacao[]= "As senhas estão diferentes"
}
// Verifica se a senha tem mais de 8 digitios
if(strlen($senha)<8){
$erros_validacao[]= "A senha deve ter pelomenos 8 digitos";
}
// Verifica se o telefone tem pelo menos 11 digitos
if(strlen($telefone)<11){
$erros_validacao[]= "Telefone incorreto";
}









// Verificar se o cpf tem pelo menos 11 digitos 
if(strlen($cpf)<11){
$erros_validacao[]= "CPF Invalido";
}



// Agora e enviar os erros para a tela de cadastro 
if($erros_validacao){
    redirecWitch("../paginas/cadastro.html" ,
    ["erro " => urlencode($erros_validacao[0])]);
}


// Verifica se o cpf ja foi cadastrado no banco de dados
$stmt = $pdo->prepare("SELECT * FROM Cliente WHERE CPF= :cpf LIMIT 1");
// Joga o cpf digitado dentro do banco de dados
$stmt ->execute([':cpf =>$cpf']);
if($stmt ->fetch()){
    redirecWitch('../paginas/cadastro.html',["erro "
=> urldecode("CPF já cadastrado")]);
}
























}

?>