<?php
//dbopen
include "dbconfig.php";
//Per aprire un database
$dbconn = mysqli_connect($dbhost,$dbuser,$dbpass);
//Per selezionare un database
mysqli_select_db($dbconn,$dbnome);
?>