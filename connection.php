<?php


// session
session_start();

// hostname
define('hostname','localhost');

// user name
define('username','root');

// password 
define('password','');

// database name
define('db_name','pos');

// baseurl
$baseurl = 'http://localhost/products/';


$connect = new mysqli(hostname, username,password,db_name);

if($connect -> connect_error){
    echo $connect -> connect_error;
}