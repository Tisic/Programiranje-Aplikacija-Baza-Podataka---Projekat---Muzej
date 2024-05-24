<?php 

include("povezivanje.php");

$Ime = $_REQUEST['Ime'];
$Prezime = $_REQUEST['Prezime'];
$Email = $_REQUEST['Email'];
$Telefon = $_REQUEST['Telefon'];
$DatumPosete = $_REQUEST['DatumPosete'];
$IzložbaID = $_REQUEST['IzložbaID'];

if(!empty($Ime) && !empty($Prezime) && !empty($Email) && !empty($Telefon) && !empty($DatumPosete) && !empty($IzložbaID)){

    $statement = $mysqli->prepare("INSERT INTO posetioci(Ime, Prezime, Email, Telefon, DatumPosete, IzložbaID) VALUES (?, ?, ?, ?, ?, ?)");

    $statement->bind_param("ssssss", $Ime, $Prezime, $Email, $Telefon, $DatumPosete, $IzložbaID);

    if($statement->execute()){
        header("Location: ../napraviPosetioca.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>