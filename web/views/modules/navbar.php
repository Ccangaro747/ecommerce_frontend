<!-- Enlace al archivo CSS externo -->
<link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/template.css">

<div class="container py-2 py-lg-4">
  <div class="row align-items-center">
    <!-- Logo -->
    <div class="col-12 col-lg-2 mt-1 d-flex justify-content-center">
      <a href="<?php echo $path ?>views/assets/js/index3.html" class="navbar-brand">
        <img src="<?php echo $path ?>views/assets/img/adminlte/rufina.png" class="brand-image img-fluid">
      </a>
    </div>

    <!-- Menú, Categorías y Barra de Búsqueda -->
    <div class="col-12 col-lg-7 col-xl-8 mt-1">
      <div class="navbar-content">
        <!-- Menú hamburguesa -->
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
        <!-- Botón de Categorías -->
        <div class="dropdown templateColor">
          <a id="dropdownSubMenu1" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-uppercase">
            <span class="d-lg-block d-none">Categorias<i class="ps-lg-2 fas fa-th-list"></i></span>
            <span class="d-lg-none d-block"><i class="fas fa-th-list"></i></span>
          </a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li class="dropdown-submenu dropdown-hover">
              <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">
                <i class="fas fa-circle-notch pe-2 fa-xs"></i>
                Indumentaria
              </a>
              <ul class="border-0 shadow py-3 ps-5 d-block d-lg-none">
                <li><a tabindex="-1" href="#" class="dropdown-item">Indumentaria 1 simple</a></li>
                <li><a tabindex="-1" href="#" class="dropdown-item">Indumentaria 2 elegante</a></li>
                <li><a tabindex="-1" href="#" class="dropdown-item">Indumentaria 3 deportiva</a></li>
              </ul>
              <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                <li><a tabindex="-1" href="#" class="dropdown-item">Indumentaria 1 simple</a></li>
                <li><a tabindex="-1" href="#" class="dropdown-item">Indumentaria 2 elegante</a></li>
                <li><a tabindex="-1" href="#" class="dropdown-item">Indumentaria 3 deportiva</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu dropdown-hover">
              <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">
                <i class="fas fa-circle-notch pe-2 fa-xs"></i>
                Artículos
              </a>
              <ul class="border-0 shadow py-3 ps-5 d-block d-lg-none">
                <li><a tabindex="-1" href="#" class="dropdown-item">Artículos 1 simple</a></li>
                <li><a tabindex="-1" href="#" class="dropdown-item">Artículos 2 elegante</a></li>
                <li><a tabindex="-1" href="#" class="dropdown-item">Artículos 3 deportiva</a></li>
              </ul>
              <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                <li><a tabindex="-1" href="#" class="dropdown-item">Artículos 1 simple</a></li>
                <li><a tabindex="-1" href="#" class="dropdown-item">Artículos 2 elegante</a></li>
                <li><a tabindex="-1" href="#" class="dropdown-item">Artículos 3 deportiva</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- Barra de Búsqueda -->
        <form class="navbar-search-container">
          <div class="input-group input-group w-100 me-0 me-lg-4">
            <input class="form-control rounded-0 p-3 pe-5" type="search" placeholder="Buscar..." style="height:40px">
            <div class="input-group-append px-2 templateColor">
              <button class="btn btn-navbar text-white" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Carrito -->
    <div class="col-12 col-lg-3 col-xl-2 mt-1 px-3 px-lg-0">
      <div class="my-2 my-lg-0 d-flex justify-content-center">
        <a href="#">
          <div class="input-group-append px-2 templateColor">
            <button class="btn btn-navbar text-white" type="submit">
              <i class="fas fa-shopping-cart"></i>
            </button>
          </div>
        </a>
        <div class="small border float-start ps-2 pe-5 w-100 d-flex flex-column" style="font-size: 10px; padding-top: 5px;">
          <p class="mb-0">Tu cesta: <span>0</span></p>
          <p class="mb-0">ARG $<span>0</span></p>
        </div>
      </div>
    </div>
  </div>
</div>
