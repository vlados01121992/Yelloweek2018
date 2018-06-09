<!DOCTYPE html>
<!--[if lt IE 9 ]> <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>YelloWeek 2018 | Veuve Clicquot</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php __asset('css/yelloweek.css'); ?>" type="text/css">
<?php /*
    <link rel="apple-touch-icon" sizes="180x180" href="{{ absolute_url(asset('apple-touch-icon.png')) }}">
    <link rel="icon" type="image/png" href="{{ absolute_url(asset('favicon-32x32.png')) }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ absolute_url(asset('favicon-16x16.png')) }}" sizes="16x16">
    <link rel="manifest" href="{{ absolute_url(asset('manifest.json')) }}">
    <link rel="mask-icon" href="{{ absolute_url(asset('safari-pinned-tab.svg')) }}" color="#ffa616">
    <meta name="apple-mobile-web-app-title" content="YelloWeek 2018 Veuve Clicquot">
    <meta name="application-name" content="YelloWeek 2018 Veuve Clicquot">
    <meta name="msapplication-TileColor" content="#ffa616">
    <meta name="msapplication-TileImage" content="{{ absolute_url(asset('mstile-144x144.png')) }}">
    <meta name="theme-color" content="#ffa616">    
*/ ?>
    <script src="<?php __asset('js/vendor/modernizr.min.js'); ?>"></script>    

  </head>
  <body class="yelloweek yelloweek-launch">
  
    <div id="yw-maincontainer" class="maincontainer launch hidden-ie8 hidden-ie9 <?php echo $locale; ?>">
    
      
        <div id="topzone">
          <!-- !---- LAUNCH ---- -->
          <div class="container-fluid" id="yw-launch">
            <div class="logo hidden-xs"><img src="<?php __asset('img/svg/logo-yelloweek-date-'.$locale.'.svg'); ?>" alt="YelloWeek" width="100%" height="auto" /></div>
            <div class="logo visible-xs-block"><img src="<?php __asset('img/svg/logo-yelloweek-blanc.svg'); ?>" alt="YelloWeek" width="100%" height="auto" /></div>
            <div class="row">
              <div class="content-zone">
                <div class="fleche hidden-xs"></div>
                <div class="date visible-xs-block"><img src="<?php __asset('img/svg/launch_date-'.$locale.'.svg'); ?>" alt="YelloWeek" width="100%" height="auto" /></div> 
                <div class="titre"><?php echo $yw['launch']['choisissez'][$locale]; ?></div>
                <div class="liste">
                  <?php foreach($yw['places'] as $code=>$nom) { ?>
                    <div class="place-item"><a href="<?php echo $root_path.$locale.'/'.$code.'/'; ?>"><?php echo $nom; ?></a></div>
                  <?php } ?>
                </div>
              </div> <!-- /.content-zone -->
            </div>
          </div><!-- /#yw-launch.container-fluid -->
        </div> <!-- /#topzone -->  
      
    
    </div> <!-- /#yw-maincontainer -->
        
    <div class="disclaimer hidden visible-ie8-block visible-ie9-block" style="position:absolute;width:100%;top:50%;margin-top:-150px;">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center texte" style="background-color:#ffffff;border-radius:4px;padding:40px 40px 40px 40px;"><img src="<?php __asset('img/gui/email_logo.png'); ?>" width="176" height="134" alt="YelloWeek 2018" border="0" style="margin-bottom:50px;" /><br /><?php  ?></div>
        </div>
      </div>
    </div>
    
    
    <!-- monitoring-clicquothub -->
    
    <script>window.jQuery || document.write('<script type="text/javascript" src="<?php __asset('js/vendor/jquery-3.2.1.min.js'); ?>"><\/script>')</script>
    <script type="text/javascript" src="<?php __asset('js/vendor/clientdetection.js'); ?>"></script>
    <script type="text/javascript" src="<?php __asset('js/vendor/eventdispatcher.js'); ?>"></script>
    <script type="text/javascript" src="<?php __asset('js/vendor/bootstrap.min.js'); ?>"></script>


    <script type="text/javascript" src="<?php __asset('js/yelloweek.js'); ?>"></script>

    <script>
      function ga(i,s,o) {
        _console('GA neutralisé : '+i+', '+s+', url: '+o);
      }  
    </script>
    
  </body>
</html>  