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
    <link href="<?= base_url('assets/imagens/favicon.png')?>" rel="shortcut icon">
  </head>
  <body>

    <header class="layout-cabecalho layout--cabecalho--home">
      <div class="container">

      <?php $this->load->view('commons/menu'); ?>
          
      </div>
    </header>