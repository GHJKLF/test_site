<?php

$user='root';
$pass='';
$db='test';
$db=new mysqli('localhost',$user,$pass,$db) or die ("Unable to connect");
echo "Connected";
?>