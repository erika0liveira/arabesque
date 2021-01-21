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

    &nbsp;

    <div class="container">

        <div class="row">

            <div class="col-md-9">

                <!-- Card -->
                <div class="card">

                    <!-- Image without zoom -->
                    <div class="view overlay">
                        <img class="img-fluid w-100" src="imagens/tutu/tutu-gamzatti.jpg" alt="Sample">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Image without zoom -->

                </div>
                <!-- Card -->
            </div>

            <div class="col-md-3 py-1">
                <h3 class="text-center titulo-produto">TÍTULO DO PRODUTO</h3>
                <p class="text-center small text-muted text-uppercase">CATEGORIA</p>
                <ul class="rating">
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star-half-alt fa-sm text-primary"></i>
                    </li>
                </ul>
                <span class="ml-1">4.9/5.0 <a href="#!" class="material-tooltip-main card-link" data-toggle="tooltip" data-placement="top" title="Read reviews">(542 reviews)</a></span>
            </div>
        </div>
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