<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{ font: 14px sans-serif;}
        .wrapper{width:350px; padding:20px;}
    </style>
    <title>Palang Merah Indonesia</title>
</head>
<body>

<!--Jumbotron-->
<div class="container-fluid jumbotron" id="home" style="background-color:#DC5151;">
    <div class="row">
        <div class="col-lg-6">
            <br><br><br><br><br><br><br><br>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{url('history')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nik" id="formGroupExampleInput2" placeholder="NIK">
                </div>
                <input type="submit" class="btn btn-outline-light" style="width:100%;">
            </form>

        </div>
        <div class="col-lg-6">
            <img src="images/images5.svg" class="img" style="width:100%;" height="450px" alt="can't reload images :)">
        </div>
        <br><br><br>

    </div>

</div>
<div class="container">
    <div class="row">
        <h2>Riwayat</h2>

    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Lokasi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>



<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <img src="images/PMI.png" class="image_pmi" height="40px" alt="" style="vertical-align:top !important">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="./index.html.#home">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./index.html.#tentangkami">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="informasi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            INFORMASI
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./index.html.#stok_darah">STOK DARAH</a>
                            <a class="dropdown-item" href="./index.html.#prasyaratan">PRASYARATAN DONOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./index.html.#donasi">DONASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="login.php" target="_blank">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<br><br><br>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>
