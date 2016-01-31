<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="viewport" content="width=device-width">
    <?php echo css('assets/css/main.css') ?>
  </head>
  <body>
  <div class="container">
  <header role="banner">
    <div class="wrap">
      <h1 class="site-title"><a class="title-link" href="<?php echo url() ?>"><?php echo $site->title()->html() ?></a></h1>
    </div>
  </header>
