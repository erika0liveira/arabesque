<!DOCTYPE html>

<html lang="pt-br">

<title>Arabesque - Produto</title>

<!--Head-->
<?php
include('head.html');
?>


<body>

    <!--Menu-->
    <?php
    include('menu.html');
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
                                <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
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

                        <h4 class="my-4 h4">COLOCAR CARROSEL</h4>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
                            voluptates,
                            quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row
                <div class="row wow fadeIn">

                    <!--Grid column
                    <div class="col-lg-4 col-md-12 mb-4">

                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

                    </div>
                    <!--Grid column

                    <!--Grid column
                    <div class="col-lg-4 col-md-6 mb-4">

                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

                    </div>
                    <!--Grid column

                    <!--Grid column-
                    <div class="col-lg-4 col-md-6 mb-4">

                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

                    </div>
                    <!--Grid column

                </div>
                <!--Grid row
                -->

            </div>
        </main>
        <!--Main layout-->











    </div>











    <!-- Footer -->
    <?php
    include('footer.html');
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</body>

</html>