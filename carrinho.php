<!DOCTYPE html>

<html lang="pt-br">

<title>Arabesque - Carrinho</title>

<!--Head-->
<?php
include('head.html');
?>

<body>

  <!--Menu-->
  <?php
  include('menu.html');
  ?>

  <!--Main layout-->
  <main class="principal">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="h2 text-center py-5">FINALIZE SUA COMPRA</h2>

      <!--Grid row-->
      <div class="row">

        <!--Carrinho-->
        <div class="col-md-6 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">CARRINHO</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <img src="imagens/sapatilhas/ponta-rosa.jpg" class="img-carrinho" alt="..." />
              </div>
              <div class="row">
                <p class="valor">R$ 100,00</p>
                <p class="produto nome">Nome do Produto</p>

                <!--Itens do Carrinho-->

                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                  <div class="btn-group" role="group">

                    <!--Tamanho-->
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
                      P
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="#">PP</a></li>
                      <li><a class="dropdown-item" href="#">P</a></li>
                      <li><a class="dropdown-item" href="#">M</a></li>
                      <li><a class="dropdown-item" href="#">G</a></li>
                      <li><a class="dropdown-item" href="#">GG</a></li>
                    </ul>

                    <!--Quantidade-->
                    <input type="number" value="1" aria-label="Search" class="form-control" style="width: 80px;">

                    <!--Cor-->
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
                      COR
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="#">Branco</a></li>
                      <li><a class="dropdown-item" href="#">Marrom</a></li>
                      <li><a class="dropdown-item" href="#">Preto</a></li>
                      <li><a class="dropdown-item" href="#">Rosa</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Cupom de desconto</h6>
                <small>PRIMEIRACOMPRA10</small>
              </div>
              <span class="text-success">- R$ 10,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total</span>
              <strong>R$ 90,00</strong>
            </li>
          </ul>
          <!-- Cart -->

          <!-- Promo code -->
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
              </div>
            </div>
          </form>
          <!-- Promo code -->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="firstName" class="form-control" placeholder="Primeiro Nome">
                    <label for="firstName"></label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" id="lastName" class="form-control" placeholder="Segundo Nome">
                    <label for="lastName"></label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Username-->
              <div class="md-form input-group pl-0 mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control py-0" placeholder="Apelido" aria-describedby="basic-addon1">
              </div>

              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="email@example.com">
                <label for="email" class="">Email</label>
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="Rua ABCD">
                <label for="address" class="">Endereço Principal</label>
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="Rua 1234">
                <label for="address-2" class="">Endereço Secundário</label>
              </div>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <label for="cidade">Cidade</label>
                  <select class="custom-select d-block w-100" id="cidade" required>
                    <option value="">Escolha...</option>
                    <option>São Paulo</option>
                  </select>
                  <div class="invalid-feedback">
                    Selecione uma cidade da lista.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="state">Estado</label>
                  <select class="custom-select d-block w-100" id="estado" required>
                    <option value="">Escolha...</option>
                    <option>São Paulo</option>
                  </select>
                  <div class="invalid-feedback">
                  Selecione um Estado da lista.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    CEP
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">O endereço de entrega é o mesmo de faturamento</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Salvar essa informação para a próxima compra</label>
              </div>

              <hr>

              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Cartão de Crédito</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Cartão de Débito</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Nome do titular</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="Nome completo igual ao que está no cartão" required>
                  <small class="text-muted"></small>
                  <div class="invalid-feedback">
                    Digite igual ao cartão
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Número do Cartão</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="1234 5678 9123 4567" required>
                  <div class="invalid-feedback">
                  Digite igual ao cartão
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Validade</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="01/01" required>
                  <div class="invalid-feedback">
                  Digite igual ao cartão
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="123" required>
                  <div class="invalid-feedback">
                  Digite igual ao cartão
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue para checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

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