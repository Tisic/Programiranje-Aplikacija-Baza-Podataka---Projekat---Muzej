<?php include("php/povezivanje.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksponati</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            background-image: url('img/muzej.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .fixed-header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #343a40;
            padding: 10px 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .container {
            margin-top: 70px;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-body img {
            max-height: 200px;
            width: auto;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-12">
            <button type="button" class="btn btn-primary"><a href="panel.php" style="color:white;">Back</a></button></h3>
            <h3 class="text-center mt-3" style="color: white;">Eksponati</h3>
                <?php
                $query = $mysqli->query("SELECT * FROM Eksponati");
                while ($data = $query->fetch_object()) {
                    echo '<div class="card text-white bg-dark">';
                    echo '<div class="card-header">';
                    echo '<h3 class="card-title">Naziv: ' . $data->Naziv . '</h3>';
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo '<div class="row">';
                    echo '<div class="col-md-8">';
                    echo '<h5 class="card-text">Opis: ' . $data->Opis . '</h5>';
                    echo '<h5 class="card-text">Istorija: ' . $data->Istorija . '</h5>';
                    echo '<h5 class="card-text">Datum prijema: ' . $data->DatumPrijema . '</h5>';
                    echo '<h5 class="card-text">Vrsta: ' . $data->Vrsta . '</h5>';
                    echo '<h5 class="card-text">Lokacija: ' . $data->Lokacija . '</h5>';
                    echo '</div>';
                    echo '<div class="col-md-4">';
                    echo '<img class="img-fluid" src="img/' . $data->Slika . '" />';
                    echo '</div>';
                    echo '<div class="col-md-4 text-center">';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMi6zOW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>