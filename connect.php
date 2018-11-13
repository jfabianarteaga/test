<?php
$serverName = "den1.mssql7.gear.host"; //serverName\instanceName
$connectionInfo = array( "Database"=>"mynorthwind1", "UID"=>"mynorthwind1", "PWD"=>"jfabian1*");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>