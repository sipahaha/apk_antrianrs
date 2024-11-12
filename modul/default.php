<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            h2{
                margin-top: 100px;
            }
            .card{
                width: 100px;
                height: 250px;
            }
            .card img{
                width: 120px;
                height: 120px;
                margin-top: 25px;
        
            }
            .btn-primary{
                margin-top: 15px;
            }
        </style>
</head>

<body>
    <center>
        <h2>Welcome !!</h2>
    </center>
    <div class="container">
        <center><div class="row" style ="margin-top: 75px;">
            <div class="col-md-6">
                <div class="card" style="width: 16rem;">
                    <center><img src="asset/img/tambah.png" class="card-img-top" alt="..."></center>
                    <div class="card-body">
                        <a href="modul/tambah_antrian.php" class="btn btn-primary">Tambah Antrian</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 16rem;">
                    <center><img src="asset/img/list.png" class="card-img-top" alt="..."></center>
                    <div class="card-body">
                        <a href="modul/daftar_antrian.php" class="btn btn-primary">Daftar Antrian</a>
                    </div>
                </div>
            </div>
        </div></center>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>