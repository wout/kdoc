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

      <?php /*
        This is a PHP based search form that will display results using the search template and controller.
        You can also move it around to other places in the templates and snippets.
        Comment or remove this form below if you are generating a static site (until we build search for static sites) */ ?>
      <form class="search-form" action="/search">
        <input type="search" name="q" value="<?php echo esc($query) ?>">
        <input type="submit" value="Search">
      </form>
    </div>
  </header>
