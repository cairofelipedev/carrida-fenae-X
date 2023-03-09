<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>


<body>
  <?php include "components/navbar_temporary.php"; ?>
  <div class="mx-auto max-w-7xl px-2 md:pt-4 pt-1">
    <h1 class="rounded-xl p-2 text-center text-md font-semibold leading-9 tracking-tight text-white dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-3xl md:leading-14">
      XII CORRIDA FENAE DO PESSOAL DA CAIXA 2023
    </h1>
    <p class="text-lg pb-4 font-bold">Escolha como pagar</p>
    <div class="flex items-center mb-4">
      <input id="default-radio-1" value="cartao" onchange="method('cartao')" type="radio" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
      <label for="default-radio-1" class="ml-2 text-sm font-medium"><i class="fa-solid fa-credit-card"></i> Cartão de Crédito, Boleto  e <i class="fa-brands fa-pix"></i> no Pix </label>
    </div>
    <!-- <div class="flex items-center mb-4">
      <input id="default-radio-1" value="pix" onchange="method('pix')" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
      <label for="default-radio-1" class="ml-2 text-sm font-medium"><i class="fa-solid fa-credit-card"></i> Cartão de Crédito e Boleto</label> <i class="fa-brands fa-pix"></i> Pagar no Pix</label>
    </div> -->
    <!-- <div class="flex items-center mb-4">
      <input id="default-radio-1" value="loja" onchange="method('loja')" type="radio" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
      <label for="default-radio-1" class="ml-2 text-sm font-medium"><i class="fa-solid fa-map-location-dot"></i> Pagar na APCEF</label>
    </div> -->
    <div id="add">
    </div>
  </div>
  <?php include "components/footer_temporary.php"; ?>
  <script src="./assets/js/script.js"></script>
  <script>
    function method(value) {
      if (value == "loja") {
        document.getElementById("add").innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.2421013142107!2d-42.77256298465674!3d-5.064463952843603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78e3a10c0c0c98d%3A0x2a9a497430e4220f!2sClube%20APCEF!5e0!3m2!1spt-BR!2sbr!4v1675334559666!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><h6>Av. Pres. Kennedy, 1951 - São Cristóvão, Teresina - PI, 64050-210</h6></div>`
      } else if (value == "cartao") {
        document.getElementById("add").innerHTML = `<!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7ZbPak-zr/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO -->`
      } else if (value == "pix") {
        document.getElementById("add").innerHTML = `<div class='p-3 shadow'><h6>Chave pix: <span class='font-bold'>contato@apcefpi.org.br</span> <br> Envie o comprovante para nosso WhatsApp: <br> 86 99843-0303</h6></div>`
      }
    }
  </script>
</body>

</html>
