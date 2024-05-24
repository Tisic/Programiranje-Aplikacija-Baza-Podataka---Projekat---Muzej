<?php

include("php/povezivanje.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Izložba Eksponata</title>
</head>

<style>
body {
            background-image: url('img/muzej.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
</style>

<body>

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary"><a href="panel.php" style="color:white;">Back</a></button>
            </div>
            <div class="col-12">
                <h3 class="text-center mt-3" style="color: white;">Izložba Eksponata</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-3" style="background-color: white;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Eksponat</th>
                                <th scope="col">Izložba</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $sql = "SELECT eksponati.Naziv AS NazivEksponata, izložbe.Naziv AS NazivIzložbe FROM eksponati_izložbe INNER JOIN eksponati ON eksponati_izložbe.EksponatID = eksponati.EksponatID INNER JOIN Izložbe ON Eksponati_Izložbe.IzložbaID = Izložbe.IzložbaID";
                                $result = $mysqli->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td>' . $row["NazivEksponata"] . '</td>';
                                        echo '<td>' . $row["NazivIzložbe"] . '</td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    echo "<tr><td colspan='2'>Nema rezultata.</td></tr>";
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
