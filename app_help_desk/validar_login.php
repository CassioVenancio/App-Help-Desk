<?php
session_start();
$_SESSION['autenticado'];
$usuario_id = null;
$tipo = null;
$user_array = array(
    array(
        'id' => 1,
        'email' => 'admin@admin.com',
        'senha' => '123',
        'tipo' => 1
    ),
    array(
        'id' => 2,
        'email' => 'calo@calo.com',
        'senha' => '123',
        'tipo' => 2
    ),
    array(
        'id' => 3,
        'email' => 'alho@alho.com',
        'senha' => '321',
        'tipo' => 2 
    )
);

foreach($user_array as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_id = $user['id'];
        $tipo = $user['tipo'];
        $user_array = false;
    }
        
}

if(!$user_array){
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['tipo'] = $tipo;
    header('Location: home.php');
}else{
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'NAO';
}
    