<?php
/**
* The library
**
* @author    Diego Chi
* @version   v1.0
* @example   $e_ = escalar (boolean, double, float, int, string) | $a_ = arreglo (array) | $r_ = recurso (resource) | $m_ = matriz (array) | $o_ = objeto (object)
**/
$e_name_site        = 'The Library';
$e_description_site = 'Read, learn, discover';
$e_url_site         = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/';
$e_preview_site     = $e_url_site . 'img/thelibrary_pv.jpg';
$e_revision_site    = '170920171516';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link href="img/favicon.ico?v=1" rel="shortcut icon" type="image/x-icon" />
    <link href="css/base.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css?v=<?=$e_revision_site;?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0,width=device-width" />
    <meta name="author" content="<?=$e_name_site;?>" />
    <meta name="description" content="<?$e_description_site?>" />
    <meta name="keywords" content="books, library" />
    <meta property="og:description" content="<?=$e_description_site;?>" />
    <meta property="og:image" content="<?=$e_preview_site;?>" />
    <meta property="og:site_name" content="<?=$e_name_site;?>" />
    <meta property="og:title" content="<?=$e_name_site;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$e_url_site;?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?=$e_description_site;?>" />
    <meta name="twitter:image:src" content="<?=$e_preview_site;?>" />
    <meta name="twitter:site" content="@thelibrary" />
    <meta name="twitter:title" content="<?=$e_name_site;?>" />
    <title><?=$e_name_site;?></title>
  </head>
  <body data-spy="scroll" data-target="#mainnavbar">
    <div class="main">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-header">
        <a class="navbar-brand" href="<?=$e_url_site;?>"><img alt="" src="img/brand.png" /></a>
        <button aria-controls="collapsenavbar" aria-expanded="false" aria-label="Navigation" class="navbar-toggler" data-target="#collapsenavbar" data-toggle="collapse" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsenavbar">
          <ul class="navbar-nav ml-auto" id="mainnavbar">
            <li class="nav-item"><a class="nav-link" href="#discover">Discover</a></li>
            <li class="nav-item"><a class="nav-link external-link" href="http://www.ebooks.com" target="_blank">eBooks</a></li>
          </ul>
        </div>
      </nav>
      <div id="herobanner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#herobanner" data-slide-to="0"></li>
          <li data-target="#herobanner" data-slide-to="1"></li>
          <li data-target="#herobanner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img alt="" src="img/cover1.jpg" />
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Book sourcing.</h1>
                <p>Our catalogue offers full search facilities to help you to find and reserve books.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">View more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img  alt="" src="img/cover2.jpg" />
            <div class="container">
              <div class="carousel-caption">
                <h1>Bibliographical information.</h1>
                <p>We have the service of bibliographical information and reference to satisfy youy demands of information.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">View more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img alt="" src="img/cover3.jpg" />
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Recommended by us.</h1>
                <p>Every month we have books to recommend thanks to the comments of the readers. Take a look, you may be interested.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">View more</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" data-slide="prev" href="#herobanner" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span></a>
        <a class="carousel-control-next" data-slide="next" href="#herobanner" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span></a>
      </div>
      <div class="container" id="discover">
        <div class="row">
          <div class="col-md-7">
            <h2>Read, learn, discover. <span class="text-muted">We are all on the same page.</span></h2>
            <p class="lead wowload fadeInUp">The Library creates a vibrant nexus of ideas, collections, expertise, and spaces in which users illuminate solutions for local and global challenges.</p>
            <p class="lead wowload fadeInUp">We constantly evolve to research, education, and public service mission by empowering and inspiring communities of scholars and learners to discover, access, create, share, and preserve knowledge.</p>
          </div>
          <div class="col-md-5"><img alt="" class="wowload bounceInUp img-fluid mx-auto" src="img/books.jpg" /></div>
        </div>
      </div>
      <footer class="footer">
        <div class="row wowload fadeIn">
          <div class="col-sm d-flex justify-content-center align-items-center"><a href="<?=$e_url_site;?>"><img alt="" src="img/brand.png" /></a></div>
          <div class="col-sm-6 d-flex justify-content-center align-items-center copyright-text">Copyright (c) <?=date('Y');?> The Library. Read our&nbsp;<a href="#">privacy policy</a></div>
          <div class="col-sm d-flex justify-content-center align-items-center social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
          </div>
        </div>
      </footer>
    </div>
    <script id="js-js" src="js/core.js" type="text/javascript"></script>
    <script id="js-js" src="js/script.js?v=<?=$e_revision_site;?>" type="text/javascript"></script>
  </body>
</html>