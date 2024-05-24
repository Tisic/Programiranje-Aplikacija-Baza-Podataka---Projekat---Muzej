<?php

include_once("povezivanje.php");

$password = $_REQUEST["password"];
$lozinka2 = $_REQUEST["lozinka2"];

if ($password != $lozinka2) {
    die(header("location: ../register.php?error=1"));
} else {

    $ime = $_REQUEST["ime"];
    $prezime = $_REQUEST["prezime"];
    $email = $_REQUEST["email"];
   

    $query = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    $num = $query->num_rows;
    if ($num > 0) {
        die(header("location: ../register.php?error=2"));
    }

    $statement = $mysqli->prepare("INSERT INTO users(ime,prezime,email,password) VALUES (?, ?, ?, ?)");

    
    $statement->bind_param('ssss', $ime, $prezime, $email, md5($password));

    
    if ($statement->execute()) {
        header("location: ../index.php?success=1");
    } else {
        die('Error:(' . $mysqli->errno . ')' . $mysqli->error);
    }
}
