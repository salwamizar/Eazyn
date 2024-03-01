<?php

$username = "salwa";
$password = "salwa123";
$host = "localhost";

$is_connect = mysqli_connect($host, $username, $password);
//mysql -u phpmyadmin -p -h localhost

if($is_connect){
   mysqli_select_db($is_connect, "izin_db");
   //  echo "Hurayyy!!";
 } else {
    echo "Oopssss..";
 }