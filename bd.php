<?php

$host = "localhost";
$port = 3306;
$socket = "";
$user = "root";
$password = "";
$dbname = "myweb";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

$usuarios = array();
$query = "SELECT * FROM mw_user";

$result = mysqli_query($con, $query);


foreach ($result as $value) {
    $usuarios[] = $value;
}


/*
  foreach ($result as $key => $value) {

  $data[]=$key;

  }

 */



echo json_encode($usuarios);

