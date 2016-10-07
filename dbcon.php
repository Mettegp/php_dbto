<?php
const DB_HOST = 'mettegottlieb.dk.mysql';
const DB_USER = 'mettegottlieb_d';
const DB_PASS = '8PrDCr4s';
const DB_NAME = 'mettegottlieb_d';
$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset("utf8"); 
?>