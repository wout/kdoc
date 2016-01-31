
<footer role="contentinfo">
  <div class="wrap">
    <p>This project is maintained by <a href="<?php echo $site->authorurl()->html() ?>"><?php echo $site->author()->html() ?></a>.</p>
    <?php echo $site->copyright()->kirbytext() ?>
  </div><!--/.wrap -->
</footer>

<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
<?php echo js('assets/js/highlight.pack.js') ?>
<?php echo js('assets/js/accordion.js') ?>
<?php echo js('assets/js/kdoc.js') ?>
</body>
</html>
