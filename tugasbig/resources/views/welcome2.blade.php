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

        <div class="row" align="center">
        <div class="col-md-12">
            <div class="container">
            <!-- Required meta tags -->
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4);">
                        <span class="border border-warning">        
                             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT_3wQctbjqsyGBp6qUANmBc7UxBekIvpZoARX-NEoGAgfiXWNj" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tugu Festivalist</h5><!-- Variabel Nama Event -->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!-- Variabel About Event -->
                                <a href="#" class="p-3 mb-2 bg-success text-white">Read More</a><!-- Variabel Image Event -->
                            </div>
                        </span>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4);">
                        <span class="border border-warning">        
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT_3wQctbjqsyGBp6qUANmBc7UxBekIvpZoARX-NEoGAgfiXWNj" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tugu Festivalist</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="p-3 mb-2 bg-success text-white">Read more</a>
                            </div>
                        </span>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4);">
                        <span class="border border-warning">        
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT_3wQctbjqsyGBp6qUANmBc7UxBekIvpZoARX-NEoGAgfiXWNj" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tugu Festivalist</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="p-3 mb-2 bg-success text-white">Read More</a>
                            </div>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4);">
                        <span class="border border-warning">        
                        <img src="https://www.indrakurniawansyah.com/wp-content/uploads/2019/02/1p-IK.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Prambanan Jazz</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="p-3 mb-2 bg-success text-white">Read More</a>
                            </div>
                        </div>
                    </span>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4);">
                        <span class="border border-warning">        
                        <img src="https://www.indrakurniawansyah.com/wp-content/uploads/2019/02/1p-IK.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Prambanan Jazz</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="p-3 mb-2 bg-success text-white">Read more</a>
                            </div>
                        </div>
                    </span>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4);">
                        <span class="border border-warning">        
                        <img src="https://www.indrakurniawansyah.com/wp-content/uploads/2019/02/1p-IK.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Prambanan Jazz</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="p-3 mb-2 bg-success text-white">Read More</a>
                            </div>
                        </div>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <nav aria-label="...">
        <ul class="pagination">
            <a class="page-link" href="#">Previous</a>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item disabled">
                <a class="page-link" href="#">2<span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
            </li>
            </li>
        </ul>
    </nav>

            <!-- row 3: Footer -->
        <div class="row" style="background: #000000; color: gold">
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