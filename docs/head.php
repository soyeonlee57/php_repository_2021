
<?php
if ( $pageCode == "home" ) {
  $title = "Web designer yeonni blog";
}
else if ( $pageCode == "pf" ) {
  $title = "portfolio";
}
else if ( $pageCode == "aboutMe" ) {
    $title = "about yeonni";
}
else if ( $pageCode == "test" ) {
  $title = "about yeonni";
}
?>


<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>

  <style>
  .active {
    color:lightcoral;
    font-weight:bold;
    text-decoration: underline;
  }
</style>

<?php
$navItemHomeClass = "";
$navItempfClass = "";
$navItemaboutMeClass = "";

if ( $pageCode == "home" ) {
  $navItemHomeClass = "active";
}
else if ( $pageCode == "pf" ) {
  $navItempfClass = "active";
}
else if ( $pageCode == "aboutMe" ) {
  $navItemaboutMeClass = "active";
}
else if ( $pageCode == "test" ) {
  $navItemtestClass = "active";
}
?>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- font-awsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- tailwind -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css">
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  <!-- js -->
  <script src="common.js"></script>
</head>
<body>
  <div class="site-wrap">
    <header class="h-12 bg-pink-100 top-bar">
      <div class="container flex h-full mx-auto">
        <a href="./" class="flex items-center px-4 logo <?=$navItemHomeClass?>">
        <img src="images/pink.png" alt=""> yeonni
        </a>

        <div class="flex-grow"></div>

        <ul class="flex top-bar_menu-box-1">
          <li>
            <a href="aboutyeonni.php" class="flex items-center h-full px-4 <?=$navItemaboutMeClass?>">
              About Yeonni
            </a>
          </li>
          <li>
            <a href="pf.php" class="flex items-center h-full px-4 <?=$navItempfClass?>">
              Portfolio
            </a>
          </li>
          <li>
            <a href="test.php" class="flex items-center h-full px-4 <?=$navItemtestClass?>">
              test🥞
            </a>
          </li>
        </ul>
      </div>
    </header>
    
    <main>
