<?php

$stmt = $DB_con->prepare("SELECT * FROM navbars");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  extract($row);
}
?>
<header class="w-full">
  <div class="hidden bg-color2 sm:block py-1">
    <div class="mx-auto flex max-w-6xl justify-between">
      <div class="flex justify-between items-center space-x-2">
        <a href=""><img width="20px" src="<?php echo $URI->base('/assets/img/brazil.png') ?>" /></a>
        <span class="text-sm text-white">Outras apcefs</span>
      </div>
      <div class="flex space-x-4 items-center">
        <a href=""><i class="text-white bi bi-whatsapp"></i></a>
        <a href=""><i class="text-white bi bi-instagram"></i></a>
        <a href=""><i class="text-white bi bi-facebook"></i></a>
        <a href="<?php echo $URI->base("/admin/login"); ?>">
          <span class="text-sm font-bold text-white">Entrar</span>
        </a>
      </div>
    </div>
  </div>
  <nav class="shadow bg-white lg:pt-2 md:pb-0">
    <div class="flex flex-wrap items-center justify-between max-w-6xl px-4 mx-auto">
      <a href="<?php echo $URI->base("/home"); ?>">
        <img src="<?php echo $URI->base("/assets/img/$logo"); ?>" class="logo" alt="<?php echo $title; ?>" />
      </a>
      <div class="flex items-center lg:order-2">
        <?php if ($btn_name != null) { ?>
          <div class="hidden mt-2 mr-4 sm:inline-block">
            <a href="<?php echo $btn_link; ?>" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800"><?php echo $btn_name; ?></a>
          </div>
        <?php } ?>
        <!-- <div class="nav_icons px-4 flex hidden md:block">
          <div class="flex justify-between space-x-3">
            <div class="relative hidden max-w-lg sm:block">
              <input aria-label="Pesquise no site" type="text" placeholder="Pesquise no site" class="block w-full rounded-md border border-gray-300 px-4 py-2 text-gray-900" />
              <svg class="absolute right-3 top-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </div>
          </div>
        </div> -->
        <!-- <span id="theme_toggler">
          <a class="text-color1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            </svg>
          </a>
        </span>
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-color1 rounded-lg lg:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button> -->
      </div>
    </div>
    <div class="items-center justify-center hidden w-full lg:flex lg:w-auto lg:order-1 py-1.5 mt-2 bg-color1" id="mobile-menu-2">
      <!-- <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
        <li class="py-2">
          <a href="<?php echo $URI->base("/home"); ?>" class="block py-2 pl-3 pr-4 text-white rounded lg:p-0" aria-current="page">HOME</a>
        </li>
        <div class="group inline-block">
          <button class="inline-flex items-center rounded py-2 px-4">
            <span class="mr-1 text-white">QUEM SOMOS</span>
            <svg class="h-4 w-4 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </button>
          <ul class="absolute z-10 hidden rounded pt-3 bg-white shadow-md shadow-gray-300 group-hover:block">
            <li>
              <a href="<?php echo $URI->base("/quem-somos"); ?>">
                <button class="inline-flex items-center rounded py-2 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E96708" class="bi bi-chevron-right font-bold" viewBox="0 0 16 16">
                    <path fillRule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <h1 class="ml-2 mr-5 text-sm text-gray-900">
                    MISSÃO, VISSÃO, VALORES
                  </h1>
                </button>
              </a>
            </li>
            <li>
              <a href="./diretoria">
                <button class="inline-flex items-center rounded py-2 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E96708" class="bi bi-chevron-right font-bold" viewBox="0 0 16 16">
                    <path fillRule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <h1 class="ml-2 mr-5 text-sm text-gray-900">
                    DIRETORIA
                  </h1>
                </button>
              </a>
            </li>
            <li>
              <a href="<?php echo $URI->base('/sedes'); ?>">
                <button class="inline-flex items-center rounded py-2 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E96708" class="bi bi-chevron-right font-bold" viewBox="0 0 16 16">
                    <path fillRule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <h1 class="ml-2 mr-5 text-sm text-gray-900">SEDES</h1>
                </button>
              </a>
            </li>
          </ul>
        </div>
        <li class="py-2">
          <a href="<?php echo $URI->base("/sedes"); ?>" class="block py-2 pl-3 pr-4 text-white rounded lg:p-0" aria-current="page">CONHEÇA NOSSAS SEDES</a>
        </li>
        <div class="group inline-block">
          <button class="inline-flex items-center rounded py-2 px-3">
            <span class="text-white">ESPORTES</span>
            <svg class="h-4 w-4 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </button>
          <ul class="absolute z-10 hidden rounded bg-white pt-1 shadow-md shadow-gray-300 group-hover:block">
            <li>
              <button class="inline-flex items-center rounded py-2 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E96708" class="bi bi-chevron-right font-bold" viewBox="0 0 16 16">
                  <path fillRule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <a href="<?php echo $URI->base('/esportes'); ?>">
                  <h1 class="text-gray-900 ml-2 mr-5 text-sm">
                    TODAS AS MODALIDADES
                  </h1>
                </a>
              </button>
            </li>
            <?php
            $stmt = $DB_con->prepare("SELECT * FROM esportes");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <li>
                  <button class="inline-flex items-center rounded py-2 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E96708" class="bi bi-chevron-right font-bold" viewBox="0 0 16 16">
                      <path fillRule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                    <a href="<?php echo $URI->base('/esporte/' . slugify($esporte)); ?>">
                      <h1 class="ml-2 mr-5 text-sm text-gray-900 uppercase">
                        <?php echo $esporte; ?>
                      </h1>
                    </a>
                  </button>
                </li>
            <?php
              }
            }
            ?>
          </ul>
        </div>
        <li class="py-2">
          <a href="<?php echo $URI->base("/noticias"); ?>" class="block py-2 pl-3 pr-4 text-white rounded lg:p-0" aria-current="page">NOTÍCIAS</a>
        </li>
        <li class="py-2 md:px-4">
          <a href="" class="block py-2 pl-3 pr-4 text-white rounded lg:p-0" aria-current="page">FENAE</a>
        </li>
        <li class="py-2 md:px-4">
          <a href="" class="block py-2 pl-3 pr-4 text-white rounded lg:p-0" aria-current="page">CONTATO</a>
        </li>
      </ul> -->
    </div>
  </nav>
</header>