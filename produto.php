<!DOCTYPE html>

<html lang="pt-br">

<title>Arabesque - Produto</title>

<!--Head-->
<?php
include('includes/head.html');
?>

<body>

    <!--Menu-->
    <?php
    include('includes/menu.html');
    ?>

    <div class="container">

        <!--Main layout-->
        <main class="mt-5">
            <div class="container dark-grey-text mt-5">

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <img src="imagens/tutu/tutu-gamzatti.jpg" class="img-fluid" alt="">
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Content-->

                        <div class="p-4">

                            <div class="text-center titulo-produto">
                                <h3>TÍTULO DO PRODUTO</h3>
                            </div>

                            <div class="text-center mb-3">
                                <a href="">
                                    <span class="badge purple mr-1">home</span>
                                </a>
                                <a href="">
                                    <span class="badge blue mr-1">categoria principal</span>
                                </a>
                                <a href="">
                                    <span class="badge red mr-1">categoria secundaria</span>
                                </a>
                            </div>

                            <p class="lead">
                                <span class="mr-2">
                                    <del>$200</del>
                                </span>
                                <span class="valor">$100</span>
                            </p>

                            <div class="tamanho py-3 mt-2">
                                <p class="titulo-tamanho">Ecolha o tamanho:</p>
                                <button type="button" class="btn btn-outline-primary waves-effect">PP</button>
                                <button type="button" class="btn btn-outline-primary waves-effect">P</button>
                                <button type="button" class="btn btn-outline-primary waves-effect">M</button>
                                <button type="button" class="btn btn-outline-primary waves-effect">G</button>
                                <button type="button" class="btn btn-outline-primary waves-effect">GG</button>
                            </div>

                            <form class="d-flex justify-content-left py-3">
                                <!-- Default input -->
                                <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px; margin-right:10px">
                                <button class="btn btn-primary btn-md my-0 p" type="submit">Add
                                    <i class="fas fa-shopping-cart ml-1"></i>
                                </button>
                            </form>

                            <p class="lead font-weight-bold mt-3">Description</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
                                sint voluptatibus!
                                Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>
                        </div>
                        <!--Content-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <hr>

                <!--Grid row-->
                <div class="row d-flex justify-content-center wow fadeIn">
                    <!--Grid column-->
                    <div class="col-md-6 text-center">
                        <h4 class="my-4 h4">COMPRE JUNTO</h4>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row wow fadeIn py-5">

                    <div class="col-lg-3">
                        <div class="card h-100 text-center" style="width:20rem" ;>
                            <img src="imagens/sapatilhas/ponta-rosa.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button class="btn btn-primary btn-md my-0 p" type="submit">Add
                                    <i class="fas fa-shopping-cart ml-1"></i>
                                </button>
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
                                <button class="btn btn-primary btn-md my-0 p" type="submit">Add
                                    <i class="fas fa-shopping-cart ml-1"></i>
                                </button>
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
                                <button class="btn btn-primary btn-md my-0 p" type="submit">Add
                                    <i class="fas fa-shopping-cart ml-1"></i>
                                </button>
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
                                <button class="btn btn-primary btn-md my-0 p" type="submit">Add
                                    <i class="fas fa-shopping-cart ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Grid row-->

            </div>

        </main>
        <!--Main layout-->

    </div>

    <!-- Footer -->
    <?php
    include('includes/footer.html');
    ?>

</body>

</html>