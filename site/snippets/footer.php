
<footer role="contentinfo">
  <div class="wrap">
    <p>This project is maintained by <a href="<?php echo $site->authorurl()->html() ?>"><?php echo $site->author()->html() ?></a>.</p>
    <?php echo $site->copyright()->kirbytext() ?>
  </div><!--/.wrap -->
</footer>


<?php echo js('assets/js/libs/highlight.pack.js') ?>
<?php echo js('assets/js/libs/accordion-plain.js') ?>
<?php echo js('assets/js/kdoc.js') ?>
</body>
</html>
