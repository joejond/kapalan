<?php
   //Start your session
session_start();
require_once('./../inc/cekSession.php');

   //Read your session (if it is set)
   if (isset($_SESSION['username']))
      echo "<b>".$_SESSION['username']."</b>";
?>