<?php
$con = mysql_connect("localhost", "monita", "monita2011");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ws", $con) or die("Database tidak ada");  
?>