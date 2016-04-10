<?php

define("DB_SERVER","127.0.0.1"); //local server name default localhost
define("DB_USERNAME","root");  //  
define("DB_PASSWORD","");  //
define("DB_DATABASE","data login");//database name which you created 

$db  = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
?>