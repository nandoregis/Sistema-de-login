<?php

    class Logado
    {

        public static function conectado() {
            return isset($_SESSION['login']) ? true : false;
        }

    }

?>