<?php
    $page = $_GET["page"];

    if(!isset($page) or empty($page)) {
        header("Location: index.php?page=login");
    } elseif (isset($page) && !empty($page)) {
        require_once('templates/header.tpl');

        require_once('templates/'.$page.'.tpl');

        require_once('templates/footer.tpl');
    }
