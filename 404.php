<?php
  $military = '';
  $rice = '';
  $taverns = '';
  $roads = '';
  $title = "Combahee Ferry River";

include_once 'header.php'; ?>


<section class="content intro">
  <div class="container" style="text-align: center;">
    <h3>Oops...there doesn't seem to be anything here!</br> Taking you back to the home page.</h3>
  </div>
</section>

<script type="text/javascript">
  (function ($) {
    $(document).ready(function () {
        // Handler for .ready() called.
        window.setTimeout(function () {
            location.href = "/";
        }, 3000);
    });
  })(jQuery);
</script>

<?php
include_once 'footer.php';
