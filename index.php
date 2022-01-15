<?php include('config.php');?>
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php INCLUDE_PATH ?>./css/style.css">
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : implementarUrl('login');

        $title = "";
        switch($url) {
            case 'login':
                $title = "<title>Faça seu Login</title>";
            break;
            case 'admin':
                $title = "<title>Painel de controle</title>";
            break;
        }
    ?>
    <?php echo $title;?>
</head>
<body>
    <?php

        function implementarUrl($pag) {
            return header('location:'.INCLUDE_PATH.$pag);
            die();
        };

        if(file_exists('login.php') && $url == "login" && Logado::conectado() == false) {
            include($url.'.php');
        }else if(file_exists('admin.php') && $url == 'admin' && Logado::conectado() == true) {
            include($url.'.php');
            
            
        }else if(Logado::conectado() == false ) {
            implementarUrl('login');
        }else {
            implementarUrl('admin');
        }
    ?>
   
</body>
</html>