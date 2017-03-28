<?php

$server='localhost';
$username='root';
$password=NULL;

if(!@mysql_connect($server,$username,$password)||!@mysql_select_db('login'))
	die ('Server Down!!');

?>