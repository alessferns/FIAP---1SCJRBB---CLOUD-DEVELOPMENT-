azureuser@trabalho-pos-vm:/var/www/html$ cat config.php
<?php

        $dbHost = 'trabalho-pos-db.mysql.database.azure.com';
        $dbUsername = 'trabalho';
        $dbPassword = 'Pentium4';
        $dbName = 'formulario-trabalho';

        $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

        #if ($conexao->connect_errno)
        #{
        # echo "Erro";
        # }
        # else
        # {
        #       echo "Conexão sucesso";
        # }



?>
