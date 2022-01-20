<?php
    include("../config/config.php");

    $objEvents = new \Classes\ClassEvents();

    var_dump($objEvents->getEvents());

    echo $objEvents->getEvents();

?>
