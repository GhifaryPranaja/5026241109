<!DOCTYPE html>
<html lang="en">

<head>
    <title>G Barbershop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">


        <style>
    body{
        font-family: "Open Sans", sans-serif;
        background-color:#f4f6f9;
    }

    .container{
        margin-top:40px;
    }

    .jumbotron{
        background: linear-gradient(135deg,#1f4037,#99f2c8);
        color:white;
        border-radius:12px;
        padding:50px;
        box-shadow:0 6px 15px rgba(0,0,0,0.15);
    }

    .jumbotron h1{
        font-weight:700;
    }

    .font-intro{
        font-size:20px;
        line-height:1.7;
    }

    .row.border{
        background:white;
        border-radius:10px;
        box-shadow:0 4px 10px rgba(0,0,0,0.1);
        margin-top:20px;
    }

    img{
        border-radius:10px;
        box-shadow:0 4px 8px rgba(0,0,0,0.15);
    }

    .btn{
        border-radius:30px;
        padding:10px 20px;
        font-weight:600;
    }

    .btn-primary{
        background-color:#2b9348;
        border:none;
    }

    .btn-primary:hover{
        background-color:#1b6e36;
    }

    .btn-success{
        background-color:#0077b6;
        border:none;
    }

    .btn-success:hover{
        background-color:#023e8a;
    }

    .modal-content{
        border-radius:10px;
    }

    .modal-header{
        background:#2b9348;
        color:white;
    }

    .modal-title{
        font-weight:600;
    }
</style>

</head>

<body>

<div class="container">

    <!-- Header -->
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang di G Barbershop</h1>
        <p class="lead">Tempat cukur rambut pria dengan layanan profesional</p>
        <hr class="my-4">
        <p>Kami menyediakan berbagai layanan potong rambut, styling, dan perawatan rambut.</p>

        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#infoModal">
            Lihat Layanan
        </button>
    </div>

    <div class="row">
        <div class="col text-center">
            <img src="https://images.unsplash.com/photo-1622286342621-4bd786c2447c?auto=format&fit=crop&w=1000&q=80"
                 class="img-fluid mt-3"
                 alt="Tempat Barbershop">
        </div>
    </div>


    <!-- Profil Barbershop -->
    <div class="row border p-3">
        <div class="col-3">
            <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033"
                 class="img-fluid rounded">
        </div>

        <div class="col-9">
            <p class="font-intro">
                <b>G Barbershop</b> adalah tempat potong rambut yang menyediakan layanan
                cukur rambut pria dengan gaya terbaru dan pelayanan yang nyaman.
            </p>

            <p>
                Kami melayani berbagai gaya rambut seperti fade, undercut, pompadour,
                serta menyediakan layanan hair styling dan perawatan rambut.
            </p>

            <button class="btn btn-success" data-toggle="modal" data-target="#bookingModal">
                Booking Sekarang
            </button>
        </div>
    </div>

</div>

<!-- Layanan -->
<div class="modal fade" id="infoModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Daftar Layanan</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <ul>
            <li>Potong Rambut Pria</li>
            <li>Hair Styling</li>
            <li>Cukur Jenggot</li>
            <li>Hair Treatment</li>
        </ul>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<!-- Booking -->
<div class="modal fade" id="bookingModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Booking Cukur Rambut</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">

        <form>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>Pilih Layanan</label>
                <select class="form-control">
                    <option>Potong Rambut</option>
                    <option>Hair Styling</option>
                    <option>Cukur Jenggot</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control">
            </div>

        </form>

      </div>

      <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">Pesan</button>
</div>

    </div>
  </div>
</div>

</body>
</html>
