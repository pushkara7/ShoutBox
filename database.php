<?php 
define ('SERVERNAME','localhost');
define('USER','root');
define('DBPASS','Pushkara1');
define('DBNAME','shoutit');

$db = mysqli_connect(SERVERNAME,USER,DBPASS,DBNAME);

if(mysqli_connect_errno()){
	echo "Failed to connect to database:" .mysqli_connect_errno();
}

?>