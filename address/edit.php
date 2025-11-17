<?php

include '../connect.php';

$table = "address";

$addressid  = filterRequest("addressid");
$name  = filterRequest("name");
$city       = filterRequest("city");
$street     = filterRequest("street");
$lat        = filterRequest("lat");
$long       = filterRequest("long");

$data =array(
    "address_long" => $long ,
    "address_lat" => $lat ,
    "addres_steet" => $street ,
    "addres_city" => $city ,   
    "address_name" => $name ,  
);

updateData($table , $data , "address_id = $addressid");