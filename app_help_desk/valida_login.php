<?php 
session_start(); 

$usuario_autenticado = false; 

//cria uma variavel que armasena os valores dos email e senhas
$usuario_cadastrado = [
    [ 'email' => 'admin@senai.br', 
    'senha' => 12345
],
    [ 'email' => 'aluno@senai.br', 
    'senha' => "abcde"
],
    [ 'email' => 'suporte@senai.br', 
    'senha' => "1a2b3c"
],
]; 

// cria uma foreach que aprevia a variavel $usuario_cadastrado para $user
foreach ($usuario_cadastrado as $user){
   if ( $user ['email'] == $_POST ['email'] && $user ['senha'] == $_POST ['senha'] ) { 
    $usuario_autenticado = true; 
   }
}

if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM'; 
    echo "usuário autenticado com sucesso"; 

 if ($usuario_autenticado == true) { 
 header ('location: painel.php?');} 
} else {
    $_SESSION['autenticado'] = 'NÃO'; 
    //echo "Usuário ou senha incorreto";
    header ('location: index.php?login=erro'); 
}


?>

    

