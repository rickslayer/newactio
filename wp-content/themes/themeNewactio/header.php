<?php
/*
@package themeNewactio
====================
SECTION HEADER
====================
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title></title>
    <meta charset="<?php bloginfo('charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if( is_singular() && pings_open(get_queried_object() ) ); ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>
<body id="page-top" class="index" <?php body_class(); ?>>
<div class="container-fluid">
    <div class="row">
        <div class="row">
            <div class="col-xl-12">
                <div id="skipnav"><a href="#maincontent">Skip to main content</a></div>
                    <!-- Navigation -->
                    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header page-scroll">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#page-top"><?php bloginfo('name'); ?></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="hidden">
                                        <a href="#page-top"></a>
                                    </li>
                                    <li class="page-scroll">
                                        <a href="#portfolio">Portfolio</a>
                                    </li>
                                    <li class="page-scroll">
                                        <a href="#about">Sobre</a>
                                    </li>
                                    <li class="page-scroll">
                                        <a href="#contact">Contato</a>
                                    </li>
                                     <li class="page-scroll">
                                        <a href="#blog">Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php header_image(); ?>" alt="">
                    <div class="intro-text">
                        <h1 class="name">seja bem vindo</h1>
                      <!--  <hr class="star-light">
                        <span class="skills"></span>-->
                    </div>
                </div>
            </div>
        </div>
    </header><!--</header>-->
            </div>
        </div>
    </div>
</div>




</body>
</html>