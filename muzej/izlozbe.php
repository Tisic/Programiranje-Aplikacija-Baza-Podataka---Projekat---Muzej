<?php include("php/povezivanje.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izložbe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-image: url('img/muzej.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .container {
            margin-top: 50px;
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

        .back-to-panel {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }
        .table {
            background-color: white;
        }
    </style>
</head>

<body>

    <div class="fixed-header text-center text-white">
        <h3 class="mb-0">Izložbe</h3>
        <button type="button" class="btn btn-primary back-to-panel"><a href="panel.php" style="color:white;">Back</a></button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Naziv</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Datum Početka</th>
                                <th scope="col">Datum Kraja</th>
                                <th scope="col">Lokacija</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = $mysqli->query("SELECT * FROM Izložbe");

                            while ($data = $query->fetch_object()) {
                                echo '<tr>';
                                echo '<td>' . $data->Naziv . '</td>';
                                echo '<td>' . $data->Opis . '</td>';
                                echo '<td>' . $data->DatumPočetka . '</td>';
                                echo '<td>' . $data->DatumKraja . '</td>';
                                echo '<td>' . $data->Lokacija . '</td>';
                                echo '</tr>';
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
