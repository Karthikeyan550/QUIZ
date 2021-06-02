<?php
$url='127.0.1.1:80';
$username='root';
$password="kali@123";
$conn=mariadb_connect($url,$username,$password,"crud");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
else{
    echo "Connected to MariaDB server";
}
?>