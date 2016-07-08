<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyApk</title>

    <link  href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/base.css')?>" rel="stylesheet" >
    <link href="<?= base_url('assets/css/layout.css')?>" rel="stylesheet" >
    <link href="<?= base_url('assets/css/componentes.css')?>" rel="stylesheet" >
    <link rel="shortcut icon" href="<?= base_url('assets/imagens/favicon.png')?>" rel="stylesheet">
  </head>
  <body>

    <header class="layout-cabecalho layout--cabecalho--home">
      <div class="container">

      <nav class="navegacao"> 
          <a href="<?=base_url()?>">
              <img src="<?= base_url('assets/imagens/logo.png')?>" width="100" height="35" alt="MyApk" data-toggle="tooltip" data-placement="bottom" title="MyApk">  
          </a>
        <div class="navegacao__menu">
          <button class="botao-chaveador js-botao-chaveador"></button>

          <ul class="menu js-menu">
            <li class="menu__item">
                <a href="<?=base_url('empresa')?>"" class="texto__link__menu" data-toggle="tooltip" data-placement="bottom" title="A Empresa">A Empresa</a>
              </li>
              <li class="menu__item">
                <a href="<?=base_url('servicos')?>" class="texto__link__menu" data-toggle="tooltip" data-placement="bottom" title="Serviços">Serviços</a>
              </li>
               <li class="menu__item">
                <a href="<?=base_url('trabalhe-conosco')?>" class="texto__link__menu" data-toggle="tooltip" data-placement="bottom" title="Trabalhe Conosoco">Trabahe Conosco</a>
              </li>
              <li class="menu__item">
                <a href="<?=base_url('contato')?>" class="texto__link__menu" data-toggle="tooltip" data-placement="bottom" title="Contato">Contato</a>
              </li>
              <li class="menu__item  menu__item--botao">
                <a href="#" class="botao  botao--login" data-toggle="tooltip" data-placement="bottom" title="Login">Login</a>
              </li>
          </ul>
        </div>
      </nav>        
      </div>
    </header>