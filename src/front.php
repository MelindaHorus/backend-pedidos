<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
 $host = "suleiman.db.elephantsql.com";
 $user = "ctivxoew";
 $pass = "DSdxMW24BH6mPBaN8COjozlm8qS1YUTv";
 $db = "ctivxoew";

 // Open a PostgreSQL connection
 $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
   or die ("Could not connect to server\n");

 $query = 'SELECT * FROM clientes';
 $results = pg_query($con, $query) or die('Query failed: ' . pg_last_error());

 $row = pg_fetch_all($results);

print_r ($row);


 

 // Closing connection
 pg_close($con);
            
            ?>
            
            
            
            
        </div>
    </body>
</html>
