<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- <title><?php bloginfo('name'); ?></title> -->
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo("stylesheet_url"); ?>" />

  <?php wp_enqueue_script('jquery'); ?>

  <!-- WordPress Header -->
  <?php wp_head(); ?>
  <!-- WordPress Header -->
</head>
<body>
  <div class="fixed-banner">
    <div class="banner block-center"></div>
  </div>
  <header>
    <div class="main block-center">
      <div class="search">
        <a href="#" class="search closed"></a>
        <form action="#" class="form-control">
          <input type="text" name="search" placeholder="Pesquisar">
          <input type="submit">
        </form>
      </div>
      <div class="logo">
        <img src="<?php bloginfo('template_url');?>/images/logo.png" alt="Logo Quatro Rodas">
      </div>
      <div class="main-menu">
        <a href="#" class="mobile-menu close">
          <span class="closed">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <span class="opened">
            <span>&times;</span>
          </span>
        </a>
        <ul class="menu">
          <li class="main-menu-li">
            <a href="#" class="main-link">carros</a>
            <nav class="submenu nav-carros">
              <ul class="left">
                <li><a href="#">Ver todos os modelos</a></li>
              </ul>
              <div class="right">
                <ul class="car-list">
                  <li><a href="#">Audi</a></li>
                  <li><a href="#">Bentley</a></li>
                  <li><a href="#">BMW</a></li>
                  <li><a href="#">Chevrolet</a></li>
                  <li><a href="#">Chrysler</a></li>
                  <li><a href="#">Chevrolet</a></li>
                  <li><a href="#">Dodge</a></li>
                  <li><a href="#">Ferrari</a></li>
                  <li><a href="#">Fiat</a></li>
                  <li><a href="#">Ford</a></li>
                  <li><a href="#">Honda</a></li>
                  <li><a href="#">Hyundai</a></li>
                  <li><a href="#">JAC Motos</a></li>
                  <li><a href="#">Jaguar</a></li>
                  <li><a href="#">Jeep</a></li>
                  <li><a href="#">Kia</a></li>
                  <li><a href="#">Lamborghini</a></li>
                  <li><a href="#">Mercedes-Benz</a></li>
                  <li><a href="#">Mitsubishi</a></li>
                  <li><a href="#">Volkswagen</a></li>
                </ul>
              </div>
            </nav>
          </li>
          <li class="main-menu-li">
            <a href="#" class="main-link">testes</a>
            <nav class="submenu testes-list">
              <ul class="left">
                <li><a href="#">Ver tudo de testes</a></li>
                <li><a href="#">Comparativos</a></li>
                <li><a href="#">Impressões</a></li>
                <li><a href="#">Longa duração</a></li>
                <li><a href="#">Teste de pista</a></li>
              </ul>
              <div class="right">
                <ul>
                  <li>
                    <img src="<?php bloginfo('template_url');?>/images/img-car01.jpg" alt="">
                    <h2>Ford Focus Fastback Titanium Plus</h2>
                    <p class="hidden"></p>
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url');?>/images/img-car02.jpg" alt="">
                    <h2>Audi A6 2.0 TFSI</h2>
                    <p class="hidden"></p>
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url');?>/images/img-car03.jpg" alt="">
                    <h2>Ford EcoSport 1.6 Powershift</h2>
                    <p class="hidden">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url');?>/images/img-car04.jpg" alt="">
                    <h2>Audi Q3 1.4</h2>
                    <p class="hidden"></p>
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url');?>/images/img-car05.jpg" alt="">
                    <h2>BMW 420i Cabriolet</h2>
                    <p class="hidden"></p>
                  </li>
                </ul>
              </div>
            </nav>
          </li>
          <li class="main-menu-li"><a href="#" class="main-link">notícias</a></li>
          <li class="main-menu-li"><a href="#" class="main-link">auto-serviço</a></li>
          <li class="main-menu-li"><a href="#" class="main-link">guia de compras</a></li>
          <li class="main-menu-li"><a href="#" class="main-link">tabela fipe</a></li>
          <li class="main-menu-li"><a href="#" class="main-link">assine</a></li>
        </ul>
      </div>
    </div>
    <div class="second-menu block-center">
      <div class="bg-arrow">
        <p>+acessados</p>
      </div>
      <ul>
        <li><a href="#">salão do automóvel</a></li>
        <li><a href="#">renegade</a></li>
        <li><a href="#">novo sandero</a></li>
        <li><a href="#">novo fox</a></li>
        <li><a href="#">novo ka</a></li>
        <li><a href="#">hb 20</a></li>
        <li><a href="#">duster</a></li>
        <li><a href="#">golf</a></li>
        <li><a href="#">corolla</a></li>
        <li><a href="#">civic</a></li>
        <li><a href="#">|a - z|</a></li>
      </ul>
    </div>
  </header>
  <main class="block-center">