<?php
    $serverName = "ermawebsub1.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "ermawebsub1", // update me
        "Uid" => "erma", // update me
        "PWD" => "Zha3254sub1" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP 20 pc.name as Name, pc.email as Email
         FROM [dbo].[Registration] pc
         ";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['Name'] . " " . $row['Email'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>