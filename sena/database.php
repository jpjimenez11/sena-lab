<?php

$server = '192.168.213.103:3306';
$username = 'sena';
$password = 'sena';
$database = 'php_login_database';

try {
  $conn = mysqli_init();
  mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
  mysqli_real_connect($conn, "sena-mysql.mysql.database.azure.com", "sena", "Lab2023*", $database, 3306, MYSQLI_CLIENT_SSL);
}

?>
