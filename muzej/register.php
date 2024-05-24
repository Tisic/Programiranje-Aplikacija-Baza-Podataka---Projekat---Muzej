<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Register page</title>
</head>

<body>

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">

                <div class="card text-white bg-dark">
                    <div class="card-header">

                        <img src="https://download.logo.wine/logo/Microsoft_account/Microsoft_account-Logo.wine.png" alt="alternatetext" style="width:120px; display: block; margin-left: auto; margin-right: auto; ">
                        <h1 style="text-align: center;">Registracija</h1>
                    </div>
                    <div class="card-body">
                        <p class="card-text">

                        <form action="php/register.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="ime">Ime:</label>
                                <input type="text" name="ime" class="form-control" placeholder="Unesite ime" required>
                            </div>
                            <div class="form-group">
                                <label for="prezime">Prezime:</label>
                                <input type="text" name="prezime" class="form-control" placeholder="Unesite prezime" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="Unesite email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Lozinka:</label>
                                <input type="password" name="password" class="form-control" placeholder="Unesite lozinku" required>
                            </div>
                            <div class="form-group">
                                <label for="lozinka2">Lozinka ponovo:</label>
                                <input type="password" name="lozinka2" class="form-control" placeholder="Unesite lozinku opet" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Registrujte se</button>
                            <button type="button" class="btn btn-primary"><a href="index.php">Prijavite se</a></button>
                        </form>
                        </p>
                    </div>
                    <div class="card-footer">
                        <?php

                        if (isset($_REQUEST["error"])) {
                            if ($_REQUEST["error"] == 1) {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo 'Sifre se ne poklapaju!';
                                echo '</div>';
                            } else if ($_REQUEST["error"] == 2) {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo 'Korisnik sa ovom email adresom vec postoji!';
                                echo '</div>';
                            }
                        }

                        ?>
                    </div>
                </div>

            </div>
            <div class="col-2">

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>