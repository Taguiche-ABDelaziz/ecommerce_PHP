<?php

include '../connect.php';

$table = "address";

$name = filterRequest("name");
$usersid  = filterRequest("usersid");
$city     = filterRequest("city");
$street   = filterRequest("street");
$lat      = filterRequest("lat");
$long     = filterRequest("long");

$data =array(
    "address_long" => $long ,
    "address_lat" => $lat ,
    "addres_steet" => $street ,
    "addres_city" => $city ,
    "address_usersid" => $usersid ,
    "address_name" => $name , 
);

insertData($table , $data);