<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php print $docTitle?></title>
        <meta name="viewport" content="width=device-width">
        <?php print $metadata?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <?php print $css?>
        <link rel="stylesheet" type="text/css" href="../../../mediaelement/mediaelementplayer.css" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../../js/slick/slick.css">
        <?php print $head?>
    </head>
    <body class="page">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<!-- outer -->
        <div id="outer">
        	<!-- metanavigation -->
            <div id="topbar">
                <div class="contentWrapper clearfix">
                    <nav class="langs">
                        <?php print $languages; ?>
                    </nav>
                    <nav class="menu-top visible-tablet visible-desktop">
                        <?php print $metanavigation; ?>
                    </nav>
                    <div class="menu-dropdown pull-right">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="icon fa fa-user"></i></a>
                                <?php print $userMenu; ?>
                            </li>
                        </ul>
                    </div>
                    <?php print $search; ?>
                </div>
            </div>
            <!-- metanavigation -->
            <div class="contentWrapper clearfix container-fluid">
            	<!-- header -->
                <header class="clearfix row-fluid">
                    <div class="col-md-3 visible-tablet visible-desktop">
                        <?php print $title3; ?>
                    </div>
                    <div class="<?php print ($title4 ? 'col-md-6' : 'col-md-9') ?>">
                        <h1><?php print $title1; ?></h1>
                        <h2><?php print $title2; ?></h2>
                    </div>
                    <?php if ($title4) {?>
                    <div class="col-md-3 visible-tablet visible-desktop">
                        <?php print $title4; ?>
                    </div>
                    <?php } ?>
                </header>
                <!-- header -->

                <!-- show-nav-for-iphone -->
                <button type="button"  class="show-nav-for-iphone col-md-12" data-toggle="collapse" data-target="#nav-collapse">MENU DI NAVIGAZIONE</button>
                <!-- show-nav-for-iphone -->

                <!-- breadcrumb -->
                <article class="main-content view-one-column col-md-12">
                    <?php if ($breadcrumbs) { ?>
                        <nav class="breadcrumb">
                            <?php print $breadcrumbs; ?>
                        </nav>
                    <?php } ?>
                    <?php if ($pageTitle) { ?>
                        <div class="box-title">
                            <?php print $pageTitle; ?>
                            <a href="javascript:window.print()" class="print-ico"><i class="fa fa-print fa fa-grey"></i></a>
                        </div>
                    <?php } ?>
                    <div class="content-box row-fluid ">
                        <?php if ($navigation) { ?>
                            <div id="nav-collapse" class="collapse col-md-3">
                                <nav class="menu-sx col-md-12">
                                    <?php print $navigation; ?>
                                </nav>
                            </div>
                        <?php } ?>
                        <?php print $content; ?>
                    </div>
                    <?php print $afterContent; ?>
                    <?php print $sharing; ?>
                </article>
            </div>
            <!-- content -->

        </div>
        <!-- outer -->

       <footer>
            <div class="contentWrapper clearfix">
                <div class="logo-footer">
                    <a href="http://www.movio.beniculturali.it" title="Movio"><img src="img/logo_movio.png" alt="Movio - Online Virtual Exhibition" title="Movio - Online Virtual Exhibition" width="109" height="81"></a>
                    <?php print $logoFooter; ?>
                </div>
                <?php if ($linkFooter) { ?>
                <div class="box">
                    <div id="nav-collapse-box1">
                        <nav>
                           <?php print $linkFooter; ?>
                        </nav>
                    </div>
                </div>
                <?php } ?>
                <?php if ($address) { ?>
                <div class="box col-md-3 pull-right">
                    <?php print $address;?>
                </div>
                <?php } ?>
            </div>
            <div id="info-page" class="visible-desktop">
                <div class="contentWrapper container-fluid">
                    <p class="pull-left"><?php print $copyright;?></p>
                    <p class="pull-right"><?php print $docUpdate;?></p>
                </div>
            </div>
        </footer>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="../../js/movio.js"></script>
        <script src="../../../mediaelement/mediaelement-and-player.js" type="text/javascript"></script>
        <script src="../../../js/slick/slick.min.js"></script>
    </body>
</html>
