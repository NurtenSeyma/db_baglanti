<?php

$connect = mysql_coonect("localhost", "root", "") or die (mysql_error());
mysql_select_db("multisession", $connect) or die (mysql_error());
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET NAME SET 'utf8'");



?>