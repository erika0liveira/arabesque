<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />

    <title>Arabesque - Ballet Feminino</title>

</head>

<body>

    <!--Menu-->
    <?php
    include('menu.html');
    ?>

    <!--Bloco1-->
    <!--Carousel Wrapper-->
    <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-mdb-interval="2000">
                <img src="imagens/inicio-sapatilha.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item" data-mdb-interval="2000">
                <img src="imagens/inicio-tutu.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="imagens/inicio-tutu-2.jpg" class="d-block w-100" alt="..." />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <!--/.Carousel Wrapper-->

    <!--Submenu-->
    <div class="row">
        <div class="col-md-12">
            <div class="submenu">
                <nav class="navbar navbar-expand-lg navbar-white bg-white py-3">
                    <!-- Container wrapper -->
                    <div class="container-fluid">

                        <!-- Toggle button -->
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                        <!-- Collapsible wrapper -->
                        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                            <!-- Left links -->
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">TODOS OS PRODUTOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">MAIS VENDIDOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">LANÇAMENTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ON SALE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-rosa.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-marrom.png" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-rosa.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-rosa.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-rosa.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-rosa.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-rosa.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-rosa.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button type="button" class="btn btn-primary">Button</button>
                            </div>
                        </div>
                    </div>
                </div>

                <nav aria-label="...">
                    <ul class="pagination pagination-circle pagination justify-content-center">
                        <a class="page-link" href="#" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1 <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <a class="page-link" href="#" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    include('footer.html');
    ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</body>

</html>