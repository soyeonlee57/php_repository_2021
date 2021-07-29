<?php
$pageCode = "test";
?>

<?php require_once "head.php"; ?>

<div style="margin-left:auto; margin-right:auto; margin-top:150px; text-align:center; font-size:1.3rem; color: yellow; width: 400px; border:3px dashed lightblue; padding:20px;">

<?php
$n = time() % 2;
?>

<?php if ( $n == 1 ) { ?>
  💔💔💔UNLUCKY💔💔💔
<?php } else { ?>
  🍀🍀🍀🍀🍀LUCKY🍀🍀🍀🍀🍀
<?php } ?>

<button type="button" style="border:1px solid #dfdfdf; background-color:azure; padding:0 20px; color:black; font-size:1rem;" onclick="history.back();">Try Again</button>

</div>


<?php require_once "foot.php"; ?>