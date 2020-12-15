<?php

    $host = "sql107.epizy.com";
    $username = "epiz_25765843";
    $password = "APkhXpNuYUsyO";
    $database = "epiz_25765843_contact_form";

    // Create database connection
    $sql = new mysqli($host, $username, $password, $database);
    
    // Check connection
    if ($sql->connect_error) {
        die("Connection failed: " . $sql->connect_error);
    }

?>