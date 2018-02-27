<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Organisational Charts</title> 
    <meta name="description" content="" /> 
    <meta name="keywords" content="" /> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 

    <link rel="shortcut icon" href="img/favicon.ico"> 
    <link href="fonts/styles.min.css" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/swiper.min.css" rel="stylesheet"> 
    <link href="css/custom.min.css" rel="stylesheet"> 
    <link href="css/independence.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
    <!--[if lt IE 9]> 
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
    <![endif]--> 
</head> 
<body class="body-cls"> 
    <?php
    include ("views/header.php");
    ?>
    <div class="main-container">
        <section class="section1">
            <div class="section-header">
                <h2><span>The Path too</span><br>Independence</h2>
            </div>
            <div class="section-swipe">
              <div class="swiper-container story_carousel">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <img class="story1" src="img/independence/flow-img.jpg" alt=" ">
                      </div>
                      <div class="swiper-slide">
                          <img class="story1" src="img/independence/flow-img.jpg" alt=" ">
                      </div>
                  </div>
              </div>
              <div class="mob_swipe_txt">Swipe to see more</div>
            </div>
        </section>
        <div class="navigation">
            <div class="navigation-inner">
                <a href="#" class="arrow-footer arrow-footer-left"><img src="img/arrow-left-footer.png"></a>
                <p class="number"><span class="custom-num">1</span>/10</p>
                <a href="price.php" class="arrow-footer arrow-footer-right"><img src="img/arrow-right-footer.png"></a>
            </div>
        </div>
    </div>
    <?php
    include ("views/footer.php");
    ?>

<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.visible.min.js"></script> 
<script src="js/swiper.min.js"></script>
<script src="js/script.js"></script> 
</body> 
</html>

