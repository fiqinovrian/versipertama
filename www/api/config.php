<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "kuliner";

$con = mysql_connect($host,$user,$pass);
if(!$con){
    echo "Tidak dapat menyambung ke server";
}

$db = mysql_select_db($dbnm);
if(!$db){
    echo "Tidak dapat menemukan database";
}
?>