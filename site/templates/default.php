
<?php snippet('header') ?>
  <div class="kdoc__wrap kdoc__content">

    <?php snippet('sidebar') ?>

    <section id="kdoc__main" class="kdoc__main-content" role="main">
      <?php echo $page->text()->kirbytext() ?>
    </section>

  </div><!-- /.wrap content -->

<?php snippet('footer') ?>
</div> <!-- /.container -->
