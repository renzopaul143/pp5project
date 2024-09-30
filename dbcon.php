<?php

        define("HOSTNAME", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "");
        define("DATABASE", "pp5_crudoperation");

        $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
        

            if(!$connection){
                die("Connection Failed");
            }
         
?>
