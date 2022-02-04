<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>MoGo</title>

    <!-- Fonts!!!  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lato:wght@400;700&family=Montserrat:wght@400;700&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet"> 
    <!-- Fonts!!!  -->

    <?php wp_head(); ?> 

  </head>

  <body>

    <header class="header">

      <div class="header__container">   

        <div class="mycontainer">

          <div class="col-md-12 header__content p-0">

            <div class="col-md-1 header__logo p-0">MoGo</div>

            <nav class="col-md-7 header__nav p-0">

              <ul class="header__navList">
                <li class="header__desktop"><a href="#">about</a></li>
                <li class="header__desktop"><a href="#">service</a></li>
                <li class="header__desktop"><a href="#">work</a></li>
                <li class="header__desktop"><a href="#">blog</a></li>
                <li class="header__desktop"><a href="#">contact</a></li>
                <li class="header__desktop"><span><a href="#"><img src="<?php bloginfo('template_directory')?>/assets/img/buyer.png" alt="buylist"></span></a></li>
                <li>
                  <form>
                    <input class="header__searcher" type="text" placeholder="Search...">
                    <div class="header__seek"><img src="<?php bloginfo('template_directory')?>/assets/img/seeker.png" alt="seek"></div>
                  </form>
                  
                </li>
              </ul>

              <div class="col-1 header__burger">
                <span></span>
              </div>
              
            </nav>

          </div>  

          <div class="col-md-12 header__banner">

            <div class="col-md-12 banner__uptitle">Creative Template</div>

            <div class="col-md-12 banner__title">
              <h1>welcome to mogo</h1>
            </div>

            <div class="col-md-12 banner__sub"></div>

            <div class="col-md-12 banner__btn"><a href="#">learn more</a></div>

          </div>

        </div>

        <div class="header__mobMenu">
          <ul>
            <li><a href="#">about</a></li>
            <li><a href="#">service</a></li>
            <li><a href="#">work</a></li>
            <li><a href="#">blog</a></li>
            <li><a href="#">contact</a></li>
            <li><span><a href="#"><img src="<?php bloginfo('template_directory')?>/assets/img/buyer.png" alt="buylist"></span></a></li>
          </ul>
        </div>

      </div>

      <div id="carouselExampleIndicators" class="carousel slide header__carousel" data-ride="carousel">

        <ol class="carousel-indicators header__carousel-indicators mycontainer">

          <div class="header__slideBullet">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <span>01</span>Intro
          </div>

          <div class="header__slideBullet">
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <span>02</span>Work
          </div>  

          <div class="header__slideBullet">
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <span>03</span>About
          </div>

          <div class="header__slideBullet">
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <span>04</span>Contacts
          </div>

        </ol>

        <div class="carousel-inner header__carousel-inner">
          <div class="carousel-item header__carousel-item active">
            <img class="header__imgFrst" src="" alt="">
          </div>
          <div class="carousel-item header__carousel-item">
            <img class="header__imgScnd" src="" alt="">
          </div>
          <div class="carousel-item header__carousel-item">
            <img class="header__imgThrd" src="" alt="">
          </div>
          <div class="carousel-item header__carousel-item">
            <img class="header__imgFrth" src="" alt="">
          </div>
        </div>

        <a class="carousel-control-prev header__carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next header__carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>

    </header>  