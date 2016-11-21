<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="viewport" content="width=device-width">
    <?php echo css('assets/css/main.css') ?>
  </head>
  <body class="kdoc__page">
  <div class="kdoc__container">
  <header role="kdoc__banner">
    <div class="kdoc__wrap">
      <h1 class="kdoc__site-title"><a class="kdoc__title-link" href="<?php echo url() ?>"><?php echo $site->title()->html() ?></a></h1>
    </div>
  </header>
