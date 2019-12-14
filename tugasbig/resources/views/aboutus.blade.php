<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}, en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
        <div>
        <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark" style="background: #000000";>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="color: gold" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: gold" href="#">Create Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: gold" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: gold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By
                        </a>
                            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="background: #000000; color: gold" href="#">Event Name</a>
                            <a class="dropdown-item" style="background: #000000; color: gold" href="#">Event Location</a>
                            <a class="dropdown-item" style="background: #000000; color: gold" href="#">Event Date</a>
                        <a class="dropdown-item" style="background: #000000; color: gold" href="#">Event Type</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: gold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">                                                       
                                    <a class="dropdown-item" style="background: #000000; color: gold" href="{{ route('login') }}">Admin</a>
                                    <a class="dropdown-item" style="background: #000000; color: gold" href="{{ route('login') }}">User</a>
                                    <a class="dropdown-item" style="background: #000000; color: gold" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn- my-2 my-sm-0" style="color: gold" type="submit">Search</button>
                </form>
            </nav>
        </div>

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" align="center">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT_3wQctbjqsyGBp6qUANmBc7UxBekIvpZoARX-NEoGAgfiXWNj" class="d-block w-40" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
            <img src="https://www.indrakurniawansyah.com/wp-content/uploads/2019/02/1p-IK.jpg" class="d-block w-40" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSx2N-OLW49Iat0zDZYIa71xpJiPrHrEYmIUJonRTthwKTmYXb4" class="d-block w-40" alt="...">
            </div>
        </div>
    </div>

    <div align="center">
    <div class="card<div align="center">
        <div class="card-body" style="background-color: rgba(245, 245, 245, 0.4); color: black; width: 70rem;">
            <div class="container-fluid">
            <form>
                <h3 align="center">Visi dan Misi Gubernur DIY 2017-2022</h5>
                <h4>Visi:</h4>
                <p>“Menyongsong Abad Samudera Hindia untuk Kemuliaan Martabat Manusia Jogja.”</p>
                <h4>Misi “Pancamulia”:</h4>
                <p>1. Terwujudnya peningkatan kualitas hidup-kehidupan-penghidupan masyarakat yang berkeadilan dan berkeadaban, melalui peningkatan kemampuan dan peningkatan keterampilan sumber daya manusia Jogja yang berdaya saing.</p>
                <p>2. Terwujudnya peningkatan kualitas dan keragaman kegiatan perekonomian masyarakat, serta penguatan ekonomi yang berbasis pada sumber daya lokal, untuk pertumbuhan pendapatan masyarakat sekaligus pemerataan ekonomi yang berkeadilan.
                <p>3. Terwujudnya peningkatan harmoni kehidupan bersama, baik pada lingkup masyarakat maupun pada lingkup birokrasi atas dasar toleransi, tenggang rasa, kesantunan, dan kebersamaan.</p>
                <p>4. Terwujudnya tata dan perilaku penyelenggaraan pemerintahan yang demokratis.</p>
                <p>5. Terwujudnya perilaku bermartabat dari para aparatur sipil penyelenggara pemerintahan atas dasar tegaknya nilai-nilai integritas yang menjunjung tinggi kejujuran, nurani rasa malu, nurani rasa bersalah dan berdosa apabila melakukan penyimpangan dalam bentuk korupsi, kolusi, dan nepotisme.</p>
            </form>
            </div>
        </div>
    </div>

    <div class="card-center">
        <div class="card-body" style="background-color: rgba(245, 245, 245, 0.4); color: black; width: 70rem;">
            <div class="container-fluid">
            <form>
                <h3 align="center">Visi dan Misi Dinas Pariwisata DIY</h5>
                <h4>Visi:</h4>
                <p>“Terwujudnya Yogyakarta sebagai salah satu destinasi terkemuka di Asia Tenggara pada tahun 2025 berdasarkan keunggulan produk wisata yang berkualitas, berwawasan budaya, berwawasan lingkungan, berkelanjutan dan menjadi salah satu pendorong tumbuhnya ekonomi kerakyatan.”</p>
                <h4>Misi:</h4>
                <p>1. Mewujudkan destinasi pariwisata DIY yang berbasis budaya, lingkungan, kreatif dan inovatif, maju berkembang dan mampu menggerakan peningkatan perekonomian masyarakat yang berkelanjutan.</p>
                <p>2. Mewujudkan sadar wisata dan sapta pesona bagi seluruh masyarakat DIY untuk meningkatkan pertumbuhan perekonomian dan kesejahteraan masyarakat melalui sektor kepariwisataan.
            </form>
            </div>
        </div>
    </div>
    </div>

    <div class="card-group">
        <div class="card">
        <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
        <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
        <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
        <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

        <!-- row 3: Footer -->
<div class="footer" style="background: #000000; color: gold">
    <div class="container">
        <div class="row">
            <div class="col-sm">
            Degoolan Team Project
            </div>
            <div class="col-sm">
            One of three columns
            </div>
            <div class="col-sm">
            Follow Us on
            <i class="fab fa-instagram"></i>
            </div>
        </div>
    </div>
</div>    
    </div>




    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>