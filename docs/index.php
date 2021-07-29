<?php
$pageCode = "home";
?>

<?php require_once "head.php"; ?>



<section class="section-1">
  <div class="container mx-auto">
  <span style="text-align:center;">
    <h1>Welcome!</h1>
    <h1>I'm Web Designer yeonni </h1>
    </span>
  </div>
</section>

<section class="section-2">
  <div class="container mx-auto">
    <span style="text-align:center;">
      <h1>this is index page</h1>
    </span>
  </div>
</section>

<section class="section-3">
  <div class="container mx-auto">
    <span style="text-align:center;">
      <h1>what time is it now ?</h1>
      <div style="font-size:1.5rem;"><?=date('Y-m-d H:i:s')?></div>
    </span>
  </div>
</section>
    
<?php require_once "foot.php"; ?>