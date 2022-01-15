<?php

    $url2 = isset($_GET['url']) ? $_GET['url'] : 'admin.php';

    if($url2 == 'admin.php') {
        header('location:'.INCLUDE_PATH.'admin');
        die();
    }

?>

<section class="box-admin">

</section><!--box-admin-->