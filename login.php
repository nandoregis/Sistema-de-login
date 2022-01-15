<?php

    $url2 = isset($_GET['url']) ? $_GET['url'] : 'login.php';

    if($url2 == 'login.php') {
        header('location:'.INCLUDE_PATH.'login');
        die();
    }

?>
<section class="box-login">
        <div class="container">

            <div class="login__wraper">
                <div class="form">
                    <h2>Faça o seu Login:</h2>
                    <form method="POST">

                        <div class="input-box-single">
                            <div class="icon"><i class="fas fa-user-cog"></i></div>
                            <input type="text" name="nome" placeholder="Username...">
                        </div><!--input-box-single-->

                        <div class="input-box-single">
                            <div class="icon"><i class="fas fa-lock"></i></div>
                            <input type="password" name="senha" placeholder="Password...">
                        </div><!--input-box-single-->
                        <input type="submit" name="acao" value="Entrar">
                        <a href="#">Cadastre-se aqui</a>
                        <div class="clear"></div>
                    </form>
                </div><!--form-->
            </div><!--login__wraper-->
            <?php
            
                if(isset($_POST['acao'])) {
                    $username = $_POST['nome'];
                    $password = $_POST['senha'];
                    $sql = Banco::conectar()->prepare('SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND pass = ?');
                    $sql->execute(array($username,$password) );
                    if($sql->rowCount() == 1) {
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $username;
                        $_SESSION['password'] = $password;
                        header('location: '.INCLUDE_PATH_ADMIN);
                        die();
                    }
                }
            
            ?>
        </div><!--container-->
    </section><!--box-login-->