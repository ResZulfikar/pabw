<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}, en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>deGoolan APPS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Icons -->
        <link rel=”stylesheet” href=”resources/fontawesome/css/all.min.css”>

        <div class="background">
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

            .background {
                background-image: url(https://live.staticflickr.com/2842/8909348621_a44acd1b94_b.jpg);
                background-size: cover;
                background-attachment: fixed;
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
        </div>
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
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <a class="nav-link" style="color: gold" href="{{ route('login') }}">Login</a>
                </form>
            </nav>
        </div>

        <div class="row" align="center">
            <div class="col-md-12">
                <div class="container">
                <!-- Required meta tags -->
                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
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
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
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
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
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
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
                                <span class="border border-warning">
                                    <img src="https://www.indrakurniawansyah.com/wp-content/uploads/2019/02/1p-IK.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Prambanan Jazz</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="p-3 mb-2 bg-success text-white">Read More</a>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
                                <span class="border border-warning">
                                    <img src="https://www.indrakurniawansyah.com/wp-content/uploads/2019/02/1p-IK.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Prambanan Jazz</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="p-3 mb-2 bg-success text-white">Read more</a>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
                                <span class="border border-warning">
                                    <img src="https://www.indrakurniawansyah.com/wp-content/uploads/2019/02/1p-IK.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Prambanan Jazz</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="p-3 mb-2 bg-success text-white">Read More</a>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
                                <span class="border border-warning">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSx2N-OLW49Iat0zDZYIa71xpJiPrHrEYmIUJonRTthwKTmYXb4" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Road to Alkid</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="p-3 mb-2 bg-success text-white">Read More</a>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
                                <span class="border border-warning">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSx2N-OLW49Iat0zDZYIa71xpJiPrHrEYmIUJonRTthwKTmYXb4" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Road to Alkid</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="p-3 mb-2 bg-success text-white">Read more</a>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="max-width: 19rem; background-color: rgba(245, 245, 245, 0.4)">
                                <span class="border border-warning">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSx2N-OLW49Iat0zDZYIa71xpJiPrHrEYmIUJonRTthwKTmYXb4" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Road to Alkid</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="p-3 mb-2 bg-success text-white">Read More</a>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

            <!-- row 3: Footer -->
        <div class="row" align="center" style="background: #000000; color: gold">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                    Degoolan Team Project
                    </div>
                    <div class="col-sm">
                    One of three columns
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            Follow Us on 
                            <div class="col-sm">
                            <i class="fab fa-instagram"></i>
                            </div>
                            <div class="col-sm">
                            <i class="fab fa-instagram"></i>
                            </div>
                            <div class="col-sm">
                            <i class="fab fa-instagram"></i>
                            </div>
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