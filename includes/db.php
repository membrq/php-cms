<!--To create DB connection-->


<?php

    //connection method 1
    $connection = mysqli_connect('localhost', 'root', 'root', 'cms');

    if($connection) {
        echo "We are connected";
    }

    //connection  method 2
    // $db_host = 'localhost';
    // $db_user = 'root';
    // etc...continue assigning params to variables

    //connection method 3
    //$db['db_host'] = "localhost";
    //$db['db_user'] = "root";
    //$db['db_pass'] = "root";
    //$db['db_name'] = "cms";
    //
    //foreach($db as $key => $value){
    //  define(strtoupper($key), $value); //BEST PRACTICE TO UPPERCASE
    //}
    //
    //$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    //...etc

?>
