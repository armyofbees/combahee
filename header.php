<!DOCTYPE html>
<html land="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="">

<!-- FAVICONS -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ffc200">
<meta name="theme-color" content="#ffc200">

<!-- FONTS -->
<link rel="stylesheet" href="https://s3.amazonaws.com/icomoon.io/34692/Combahee/style.css?3xx96x">
<link href="https://fonts.googleapis.com/css?family=Cambay:400,700|Sumana:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/tooltipster-css/tooltipster.bundle.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
<script type="text/javascript" src="js/magnific-popup.js"></script>
<script type="text/javascript" src="js/site.js"></script>

<title><?= $title ?></title>
</head>

<body>

<div id="page">
  <header id="site-header">
    <div class="container">

      <!-- LOGO -->
      <a class="site-logo" href="/">
        <img src="img/CombaheeFerryLogo.png" alt="CombaheeFerryLogo" width="500" height="106">
      </a>

      <!-- NAV -->
      <nav class="site-nav primary">
        <a id="mobile-menu-open" class="sliding-panel-button"><i class="icon-hamburger"></i></a>
        <a id="mobile-menu-close" class="sliding-panel-close"><i class="icon-cross"></i></a>
        <div class="mobile-menu sliding-panel-content">
          <ul class="menu">
            <li class="<?= $roads ?>"><a  href="/roads-ferries.php">Roads &amp; Ferries</a></li>
            <li class="<?= $taverns ?>"><a  href="/taverns-travel.php">Taverns &amp; Travel</a></li>
            <li class="<?= $rice ?>"><a  href="/rice-empire.php">Rice Empire</a></li>
            <li class="<?= $military ?>"><a href="/military-actions.php">Military Actions</a></li>
          </ul>
        </div>

      </nav>

      <div class="sliding-panel-fade-screen"></div>

    </div>
  </header>

	<main id="content" class="site-content">

  <header id="page-header">
    <div class="container">

    </div>
  </header>

