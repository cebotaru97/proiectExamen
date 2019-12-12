<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Managment Service Center</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>

        <!-- Navbar -->
    <?php
    include_once("./templates/header.php");
    ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto">
                    <img src="./img/avatar-man.png" style="width: 60%" class="card-img-top mx-auto">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-user">&nbsp</i>Info utilizator</h5>
                        <p class="card-text"><i class="fa fa-user">&nbsp</i>Rotari Serghei</p>
                        <p class="card-text"><i class="fa fa-user">&nbsp</i>Admin</p>
                        <p class="card-text">Ultima logare : xx.xx.xxxx </p>
                        <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp</i>Modifica</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="jumbotron" style="width: 100%; height: 100%;">
                    <h1>Buna ziua Admin</h1>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe src="http://free.timeanddate.com/clock/i72acurk/n177/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Comenzi noi</h5>
                                    <p class="card-text">Aici puteți face facturi și crea noi comenzi.</p>
                                    <a href="#" class="btn btn-primary">Comanda noua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <p></p>
        <p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tip dispozitiv</h5>
                        <p class="card-text">Aici putem alege tipul dispozitiv putem adauga si modifica</p>
                        <a href="#" data-toggle="modal" data-target="#from_category" class="btn btn-primary">Adauga</a>
                        <a href="#" class="btn btn-primary">Gestioneaza</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Brand</h5>
                        <p class="card-text">Aici putem alege brendu dispozitiv putem adauga si modifica</p>
                        <a href="#" data-toggle="modal" data-target="#from_brand" class="btn btn-primary">Adauga</a>
                        <a href="#" class="btn btn-primary">Gestioneaza</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dispozitiv</h5>
                        <p class="card-text">Aici putem alege dispozitive putem adauga si modifica</p>
                        <a href="#" data-toggle="modal" data-target="#from_products" class="btn btn-primary">Adauga</a>
                        <a href="#" class="btn btn-primary">Gestioneaza</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php
        //Category From
        include_once ("./templates/category.php");
        ?>
        <?php
        //Brand From
        include_once ("./templates/brand.php");
        ?>
        <?php
        //Dispozitiv From
        include_once ("./templates/products.php");
        ?>
</body>
</html>

