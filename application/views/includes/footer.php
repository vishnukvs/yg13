
      <hr>
      <!-- footer-->
      <footer id="footer">
        <p>&copy;2013 | Art of Living Foundation </p>
      </footer>
  </div> <!-- /container -->

   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
     <script src="<?=base_url('js/bootstrap-carousel.js');?>"></script>
     <script type="text/javascript">
      $('#myCarousel').carousel({
      interval: 5000
    })
    </script>

</script>
<script src="<?=base_url('js/youtube-plugin.js');?>"></script>
   <script type="text/javascript">
        $(function () {
            $("a.youtube").YouTubePopup({ autoplay: 0 });
        });
    </script>
<script>
$("a.youtube").YouTubePopup({ idAttribute: 'youtube' });</script>
<script>
 $(document).ready(function() {
  /* This is basic - uses default settings */
  $("a.grouped_elements").fancybox();
  $("a#single_image").fancybox();
  
  /* Using custom settings */
  
  $("a#inline").fancybox({
    'hideOnContentClick': true
  });

  /* Apply fancybox to multiple items */
  
  $("a.group").fancybox({
    'transitionIn'  : 'elastic',
    'transitionOut' : 'elastic',
    'speedIn'   : 600, 
    'speedOut'    : 200, 
    'overlayShow' : false
  });
  
});
</script>
</body>
</html>