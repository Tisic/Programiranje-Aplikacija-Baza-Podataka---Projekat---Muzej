<?php include("php/povezivanje.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posetioci</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="fixed-header text-center text-white">
        <h1 class="mb-0">Dodaj Posetioca</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <form action="php/napraviPosetioca.php" method="post">
                            <div class="form-group">
                                <label for="Ime">Ime:</label>
                                <input type="text" id="Ime" name="Ime" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Prezime">Prezime:</label>
                                <input type="text" id="Prezime" name="Prezime" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" id="Email" name="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Telefon">Telefon:</label>
                                <input type="text" id="Telefon" name="Telefon" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="DatumPosete">Datum Posete:</label>
                                <input type="date" id="DatumPosete" name="DatumPosete" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="IzložbaID">Izložba ID:</label>
                                <input type="number" id="IzložbaID" name="IzložbaID" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Dodaj Posetioca</button>
                            <button type="button" class="btn btn-primary back-to-panel"><a href="posetioci.php" style="color:white;">Back</a></button>

                        </form>
                    </div>
                    <div class="card-footer">
                        <?php
                        if (isset($_REQUEST["success"]) && $_REQUEST["success"] == 1) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo 'Uspesno dodat posetilac!';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
