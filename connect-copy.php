<?
include "sql.php";
$db=sql_get_db('localhost','artcrawl','root','');

// use socket instead of TCP if the database is on the same, Linux server
// $db=sql_get_db(':/var/run/mysqld/mysqld.sock','gyrostart','root','mnstudio');
