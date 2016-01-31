$(function() {

  $('.sidebar-nav').each(function() {
    accordion($(this));
  });

  $('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });

});
