<?php

    session_start();

    $autoload = function($class) {
        include("classes/$class.php");
    };

    spl_autoload_register($autoload);



    define('INCLUDE_PATH','http://localhost/Novos%20Projetos/Sistema-de-login-treino/');
    define('INCLUDE_PATH_ADMIN',INCLUDE_PATH.'admin');

    # Configurações de servidor...

    // Conectar com banco de dados 

    define('HOST','localhost');
    define('USER','root');
    define('DATABASE','projeto_01');
    define('PASSWORD','');

?>