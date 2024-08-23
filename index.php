<?php

    require "router/router.php";

    $url = key($_GET);

    $Router = new Router();

    $Router->addRoute("/" , "home.php");
    $Router->addRoute("/form" , "form.php");
    
    $Router->route("/" . $url);

?>