<?php

include_once("povezivanje.php");

session_start();

$email = stripcslashes($_REQUEST["email"]);
$password = stripcslashes($_REQUEST["password"]);
$md_5 = md5($password);


$query = $mysqli->query("SELECT * FROM users WHERE email='$email' AND password='$md_5'");
if ($query->num_rows == 1) {

	
	$data = $query->fetch_object();
	$_SESSION["ime"] = $data->ime;
	$_SESSION["prezime"] = $data->prezime;
	$_SESSION["email"] = $data->email;


	header("Location: ../panel.php");
} else {
	die(header("Location: ../index.php?error=1"));
}

