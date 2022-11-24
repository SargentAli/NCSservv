<?php 
define('DBHOST', 'glennserv.mysql.database.azure.com');
define('DBUSER', 'glenn');
define('DBPASS', 'P@ssw0rd');
define('DBNAME', 'student');


$db_con = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
