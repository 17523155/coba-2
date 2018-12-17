<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Laporan</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom styles for this template -->

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #1c1e21">
      <div class="container">
        <a class="navbar-brand text-warning" href="#">
    <img src="https://lh3.googleusercontent.com/-aj8JHSQ4bmE/XAu0Zmu0EBI/AAAAAAAAXyA/Y1eE5evuCx0xff1nb2-RfylarszgnIHkgCJoC/w530-h508-n-rw/slir.png" width="30" height="30" alt="">  Slir!</a>
  <a class="navbar-brand text-warning" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <a class="navbar btn btn-warning float-right" href="login.html">Selamat Datang, User<img src="user.img"></a>
</div>
</nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item text-dark">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Dashboard</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.html">
                  <span data-feather="home"></span>
                  Beranda<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.html">
                  <span data-feather="users"></span>
                  Profile
                </a>
              </li>
              <!-- useless
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              -->
              <li class="nav-item">
                <a class="nav-link" href="rekap.html">
                  <span data-feather="bar-chart-2"></span>
                  Rekap
                </a>
              </li>
              <!-- useless
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
              -->
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Laporan</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
             <li class="nav-item">
                <a class="nav-link" href="belumvld.html">
                  <span data-feather="file-text"></span>
                  Belum divalidasi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sudahvld.html">
                  <span data-feather="file-text"></span>
                  Sudah divalidasi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Sedang di proses
                </a>

              </li>
              <li><hr></li> <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="warning"></span>
                  Keluar
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
            </div>
          </div>
<div class="container" style="width: 50%" >
  <div class="alert alert-light role="alert" >
  <h4 class="alert-heading">Laporan</h4><span class="badge badge-primary">Belum divalidasi</span>
<span class="badge badge-danger">Tingkat Berat</span>
<span class="badge badge-success">#kode laporannya</span>
  <hr>
  <form>
    <div class="form-row">
              <div class="form-group col-md-6">
                <div class="card" >
          <img class="card-img-top" src="img/jlnrsk.jpg" alt="Card image cap">
                </div>
              </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputPassword4">Judul Laporan</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Judul Laporannya">
  </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Provinsi</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Provinsi">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Kabupaten</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Kabupaten">
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress">Kecamatan</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Kecamatan">
  </div>
  <div class="form-group col-md-4">
      <label for="inputState">Ganti Status</label>
      <select id="inputState" class="form-control">
        <option selected disabled="">Ganti...</option>
        <option>Belum divalidasi</option>
        <option>Sudah di Validasi</option>
        <option>Sedang di proses dinas</option>
      </select>
    </div>
  </div>
    
  </div>
</form>

</div>
</div>
</div>
</main>
          
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>