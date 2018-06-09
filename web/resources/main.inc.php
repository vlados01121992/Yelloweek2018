<?php 
  // for sharing
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
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
    <meta name="apple-mobile-web-app-title" content="Clicquot YelloWeek">
    <meta name="application-name" content="Clicquot YelloWeek">
    <meta name="msapplication-TileColor" content="#ffa616">
    <meta name="msapplication-TileImage" content="{{ absolute_url(asset('mstile-144x144.png')) }}">
    <meta name="theme-color" content="#ffa616">   
*/ ?>
    <meta name="title" content="<?php __p(array('partage','titre')); ?>"/>
    <meta name="description" content="<?php __p(array('partage','description')); ?>"/>
    <meta name="DC.title" content="<?php __p(array('partage','titre')); ?>"/>
    <meta name="DC.description" content="<?php __p(array('partage','description')); ?>"/>
    
    
    <meta property="og:url" content="<?php echo $actual_link; ?>" />
    <meta property="og:title" content="<?php __p(array('partage','titre')); ?>" />
    <meta property="og:description" content="<?php __p(array('partage','description')); ?>" />
    <meta property="og:image" content="<?php echo __asset($yw['common']['partage']['image']); ?>" />



    <script src="<?php __asset('js/vendor/modernizr.min.js'); ?>"></script>    

  </head>
  <body class="yelloweek">
  
    <div id="yw-maincontainer" class="maincontainer hidden-ie8 hidden-ie9 <?php echo $locale; ?>">
    
    <div class="page-wrap">
      
    <!-- !---- SELECTION PLACES ---- -->
      <?php 
        $c = '<ul class="%CLASS%"%EXTRA%>';
        foreach($yw['places'] as $code=>$nom) {
          $c .= '<li><a href="'.$root_path.$locale.'/'.$code.'/" class="place-link';
          if ($code==$place) $c.= ' selected';
          $c .= '">'.$nom.'</a></li>';
        }
        $c .= "</ul>";
      ?>
    <div id="topzone">
      <div class="hidden-xs container" id="yw-navplaces">
        <div class="row">
        <?php echo str_ireplace(array('%CLASS%','%EXTRA%'), array('list-inline',''), $c); ?>
        </div>
      </div> <!-- /#yw-navplaces -->
      <div class="visible-xs-block container" id="yw-navplaces-mob">
        <div class="row">
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="yw-navplaces-mob-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <?php echo $yw['places'][$place]; ?>
              <span class="chevron"></span>
            </button>
            <?php echo str_ireplace(array('%CLASS%','%EXTRA%'), array('dropdown-menu','aria-labelledby="yw-navplaces-mob-dropdown"'), $c); ?>
          </div>
        </div>
      </div> <!-- /#yw-navplaces-mob -->
    <!-- /selection places -->
    
    <!-- !---- INTRO ---- -->
    <div class="container-fluid" id="yw-intro">
      <div class="titre-date"><img src="<?php __asset('img/svg/date-'.$locale.'.svg'); ?>" alt="<?php __p(array('titre_date')); ?>" width="100%" height="auto" /></div>
      <div class="logo"><img src="<?php __asset('img/svg/logo-yelloweek.svg'); ?>" alt="YelloWeek" width="100%" height="auto" /></div>
      <div class="city"><?php echo $yw['places'][$place]; ?></div>
      <div class="row">
        <div class="content-zone">
          <div class="titre"><?php __p(array('intro','titre')); ?></div>
          <div class="contenu"><?php __p(array('intro','contenu')); ?></div>
          <div class="instagram"><a href="https://www.instagram.com/veuveclicquotcanada/" target="_blank"><?php __p(array('intro','instagram')); ?></a></div>
        </div> <!-- /.content-zone -->
      </div>
    </div><!-- /#yw-intro.container -->
  </div> <!-- /#topzone -->  
    
    <!-- !---- NAVIGATION ---- -->
    <div class="navigation container hidden-xs" id="yw-nav">
      <ul class="list-inline">
        <li><a href="#yw-experiences" class="inpage-link"><?php __p(array('experiences','nav')); ?></a></li>
        <li><a href="#yw-programme" class="inpage-link"><?php __p(array('programme','nav')); ?></a></li>
        <?php if ($yw[$place]['boutique']!==false) { ?><li><a href="#yw-boutique" class="inpage-link"><?php __p(array('boutique','nav')); ?></a></li><?php } ?>
        <?php if ($yw[$place]['hotel']!==false) { ?><li><a href="#yw-hotel" class="inpage-link"><?php __p(array('hotel','nav')); ?></a></li><?php } ?>
        <li><a href="#yw-plan" class="inpage-link"><?php __p(array('plan','nav')); ?></a></li>
      </ul>
    </div><!-- /#yw-nav.navigation -->
    
    <div class="navigation container-fluid hidden-xs" id="yw-nav-fixed">
      <div class="top-btn"></div>
      <ul class="list-inline">
        <li><a href="#yw-experiences" class="inpage-link"><?php __p(array('experiences','nav')); ?></a></li>
        <li><a href="#yw-programme" class="inpage-link"><?php __p(array('programme','nav')); ?></a></li>
        <?php if ($yw[$place]['boutique']!==false) { ?><li><a href="#yw-boutique" class="inpage-link"><?php __p(array('boutique','nav')); ?></a></li><?php } ?>
        <?php if ($yw[$place]['hotel']!==false) { ?><li><a href="#yw-hotel" class="inpage-link"><?php __p(array('hotel','nav')); ?></a></li><?php } ?>
        <li><a href="#yw-plan" class="inpage-link"><?php __p(array('plan','nav')); ?></a></li>
      </ul>
      <div class="partager hidden-sm">
          <?php $share_direction = 'right'; include('partage.inc.php'); ?>
      </div>
    </div><!-- /#yw-nav.navigation -->
    
    
    <!-- !---- NOUVEAU ---- -->  
    <div id="yw-nouveau" class="container-fluid">
      <div class="row">
          <div class="content-zone">
            <div class="titre"><img src="<?php __asset('img/svg/nouveau-titre.svg'); ?>" alt="<?php __p(array('nouveau','titre')); ?>" width="100%" height="auto" /></div>
            <div class="chapo"><?php __p(array('nouveau','chapo')); ?></div>
            <div class="contenu"><?php __p(array('nouveau','contenu')); ?></div>
          </div> <!-- /.content-zone -->
      </div> <!-- /.row -->
    </div> <!-- /#yw-nouveau -->
    <div id="yw-nouveau-plus" class="container-fluid">
      <div class="row">
        <div class="plus-zone">
          <div class="btn-plus"><a href="clicquot-popup.<?php echo $locale; ?>.popin.php" class="popin-link"><?php __p(array('nouveau','btn-plus')); ?></a></div>
          <div class="partager hidden-xs">
            <?php $share_direction = 'right'; $share_blanc = true; $share_section="#yw-nouveau"; include('partage.inc.php'); ?>
          </div>
        </div> <!-- /.plus-zone -->
        
          <div class="partager-mob visible-xs-block">
            <?php $share_direction = 'top'; include('partage.inc.php'); ?>
          </div>
      </div>
    </div> <!-- /#yw-nouveau-plus -->
    
    
    <!-- !---- EXPERIENCES ---- -->
    <div class="container-fluid" id="yw-experiences" data-trigger="spiedby">
      <div class="controls">
        <div class="leftdeg disabled"></div>
        <div class="rightdeg"></div>
        <div id="yw-exp-prev-mob" class="slider-prev disabled visible-xs-block"></div>
        <div id="yw-exp-next-mob" class="slider-next visible-xs-block"></div>
      </div>
      <div class="row">
        <div class="titre"><?php __p(array('experiences','titre')); ?></div>
        <div class="experience-wrapper">
        <div id="experience-slider">
          <?php foreach($yw['common']['experiences']['liste'] as $expk=>$experience) { ?>
          <div class="experience-item" id="exp-<?php echo $expk; ?>">
            <div class="content-zone">
              <div class="nom" style="color:<?php echo $experience['colors'][0]; ?>;"><?php echo $experience['titre'][$locale]; ?></div>
              <div class="contenu"><?php echo $experience['contenu'][$locale]; ?></div>
            </div>
          </div>
          <?php } ?>
        </div>
        </div>
        <div class="controls">
          <div class="leftdeg disabled"></div>
          <div class="rightdeg"></div>
          <div id="yw-exp-prev" class="slider-prev disabled hidden-xs"></div>
          <div id="yw-exp-next" class="slider-next hidden-xs"></div>
        </div>
      </div>
    </div><!-- /#yw-experiences.container -->
    
    
    <!-- !---- PROGRAMME ---- -->
    <div class="container" id="yw-programme" data-trigger="spiedby">
      <div class="titre"><img src="<?php __asset('img/svg/programme-titre-'.$locale.'.svg'); ?>" alt="<?php __p(array('programme','titre')); ?>" width="100%" height="auto" /></div>
      <div class="partager hidden-xs">
        <?php $share_direction = 'left'; $share_section="#yw-programme"; include('partage.inc.php'); ?>
      </div>
      
      <?php  
        // we review all dates / locations to define the list of 'useful' experiences 
        // to populate the filter list
        $prg_experiences = array();
        // to populate the calendar
        $prg_evenements = array();
        
        foreach($yw[$place]['programme'] as $datestamp=>$evenements) {
          // create first index : date
          if (!array_key_exists($datestamp, $prg_evenements)) {
            $date = new DateTime($datestamp);
            $prg_evenements[$datestamp] = array(
                                            'date'=>'<div class="mois">'.$yw['mois'][$date->format('n')][$locale].'</div><div class="num">'.$date->format('j').'</div><div class="jour">'.$yw['jours'][$date->format('w')][$locale].'</div>',
                                            'experiences' => array()
                                          );
          }
          foreach($evenements as $evenement) {
            if (!in_array($evenement['experience'], $prg_experiences))  $prg_experiences[] = $evenement['experience'];
            
            // create third index : experience
            if (!array_key_exists($evenement['experience'], $prg_evenements[$datestamp]['experiences'])) {
              $prg_evenements[$datestamp]['experiences'][$evenement['experience']] = array(
                                                                                      'nom' => $yw['common']['experiences']['liste'][$evenement['experience']]['shortname'][$locale],
                                                                                      'events' => array()
                                                                                    );
            }
            // populate the calendar list with locations
            $prg_evenements[$datestamp]['experiences'][$evenement['experience']]['events'][] = $evenement;
          }
          
        }
      ?>
      
      <?php 
        $f = '<ul class="%CLASS%"%EXTRA%>';
        $f .= '<li><a href="javascript:void(0);" data-experience="all" class="filtre-link selected"><span>'.$yw['common']['programme']['btn-all'][$locale].'</span></a></li>';
        foreach($prg_experiences as $expid) {
          $f .= '<li><a href="javascript:void(0);" data-experience="'.$expid.'" class="filtre-link"><span>'.$yw['common']['experiences']['liste'][$expid]['titre'][$locale].'</span></a></li>';
        }
        $f .= "</ul>";
      ?>
    </div>  
    <div class="hidden-xs container" id="yw-prg-filtres">
      <div class="row">
      <?php echo str_ireplace(array('%CLASS%','%EXTRA%'), array('list-inline',''), $f); ?>
      </div>
    </div> <!-- /#yw-prg-filtres -->
    <div class="visible-xs-block container" id="yw-prg-filtres-mob">
      <div class="row">
        <div class="dropdown">
          <button class="dropdown-toggle" type="button" id="yw-prg-filtres-mob-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php echo $yw['common']['programme']['btn-filtre'][$locale]; ?>
            <span class="chevron"></span>
          </button>
          <?php echo str_ireplace(array('%CLASS%','%EXTRA%'), array('dropdown-menu','aria-labelledby="yw-navplaces-mob-dropdown"'), $f); ?>
        </div>
      </div>
    </div> <!-- /#yw-prg-filtres-mob -->
    
    <div class="container" id="yw-programme-experience">
      <div class="row">
        <div class="col-xs-12 text-center">
          <div class="titre"></div>
          <div class="description"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="yw-programme-calendar">  
      <div class="row">
        
      <div class="controls">
        <div id="yw-prg-prev-mob" class="slider-prev visible-xs-block"></div>
        <div id="yw-prg-next-mob" class="slider-next visible-xs-block"></div>
      </div>
      <div class="prg-wrapper">
      <div class="prg-slider" id="programme-slider">
        <?php
          $j = '';
          // traitement des données de programme
          $location = $yw[$place]['locations'];
          
          foreach($prg_evenements as $datestamp=>$jour) { ?>
            <div class="jour-slide" data-jour="<?php echo $datestamp; ?>">
              <div class="jour-head">
                <div class="date"><?php echo $jour['date']; ?></div>
              </div>
              <div class="jour-body">
                <?php foreach($jour['experiences'] as $expkey=>$experience) { 
                  
                      $plusieurs = count($experience['events'])>1;
                ?>
                <div class="jour-experience" data-id="<?php echo $expkey; ?>">
                  <div class="expe-nom" style="color:<?php echo $yw['common']['experiences']['liste'][$expkey]['colors'][0]; ?>"><?php echo $experience['nom']; ?></div>
                  <div class="expe-liste<?php echo $plusieurs ? ' multiple' : ''; ?>">
                    <?php
                      if ($plusieurs) { ?>
                      <div class="expe-group" data-jour="<?php echo $datestamp; ?>" data-expe="<?php echo $expkey; ?>"><?php echo count($experience['events']); ?><?php __p(array('programme','plusieurs')); ?></div>
                    <?php }
                      foreach($experience['events'] as $expe_item) { ?>
                    <div class="expe-location"><a href="<?php echo $root_path.$locale.'/'.$place.'/location/'.$expe_item['location'].'_'.$expkey; ?>" class="popin-link"><?php echo $location[$expe_item['location']]['nom'][$locale]; ?></a></div>
                    <?php } ?>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div> <!-- /.jour-slide -->
        <?php }          
          // jour par jour, organisé par expérience
        ?>
      </div>
      </div>
      <div class="controls">
        <div id="yw-prg-prev" class="slider-prev hidden-xs"></div>
        <div id="yw-prg-next" class="slider-next hidden-xs"></div>
      </div>
      </div><!-- /.row -->
    </div><!-- /#yw-programme.container --> 
    <div id="yw-programme-share-mob" class="partager-mob visible-xs-block">
      <?php $share_direction = 'top'; $share_section="#yw-programme"; include('partage.inc.php'); ?>
    </div>
    
    
    
    <?php if ($yw[$place]['boutique']!==false) { ?>
    <!-- !---- BOUTIQUE ---- -->
    <div id="yw-boutique-bg">
    </div>
    <div class="container" id="yw-boutique" data-trigger="spiedby">
      <div class="row">
        <div class="content-zone">
          <div class="titre hidden-xs"><img src="<?php __asset('img/svg/boutique-titre.svg'); ?>" alt="<?php __p(array('boutique','titre')); ?>" width="100%" height="auto" /></div>
          <div class="titre visible-xs-block"><img src="<?php __asset('img/svg/boutique-titre-blanc.svg'); ?>" alt="<?php __p(array('boutique','titre')); ?>" width="100%" height="auto" /></div>
          <div class="soustitre"><?php __p(array('boutique','soustitre'), true); ?></div>
          <div class="contenu"><?php __p(array('boutique','contenu'), true); ?></div>
        </div> <!-- /.content-zone -->
        <div class="plus-zone">
          <div class="btn-plus"><a href="<?php __p(array('boutique','lien'), true); ?>" class="external-link"><?php __p(array('boutique','bouton'), true); ?></a></div>
                  <div class="partager hidden-xs">
            <?php $share_direction = 'right'; $share_section="#yw-boutique"; include('partage.inc.php'); ?>
          </div>
          <div class="partager-mob visible-xs-block">
            <?php $share_direction = 'top'; $share_section="#yw-boutique"; include('partage.inc.php'); ?>
          </div>
        </div> <!-- /.plus-zone -->
      </div><!--  /.row -->
    </div><!-- /#yw-boutique.container -->
    <?php } ?>
    
    
    
    <?php if ($yw[$place]['hotel']!==false) { ?>
    <!-- !---- HOTEL ---- -->
    <div id="yw-hotel-bg">
    </div>
    <div class="container" id="yw-hotel" data-trigger="spiedby">
      <div class="row">
        <div class="content-zone">
          <div class="titre hidden-xs"><img src="<?php __asset('img/svg/hotel-titre.svg'); ?>" alt="<?php __p(array('hotel','titre')); ?>" width="100%" height="auto" /></div>
          <div class="titre visible-xs-block"><img src="<?php __asset('img/svg/hotel-titre-blanc.svg'); ?>" alt="<?php __p(array('hotel','titre')); ?>" width="100%" height="auto" /></div>
          <div class="soustitre"><?php __p(array('hotel','soustitre'), true); ?></div>
          <div class="contenu"><?php __p(array('hotel','contenu'), true); ?></div>
          <div class="produits">
            <div class="produit">
              <div class="nom"><?php echo $yw[$place]['hotel']['produits'][0]['nom'][$locale]; ?></div>
              <div class="prix"><?php echo $yw[$place]['hotel']['produits'][0]['prix'][$locale]; ?></div>
            </div><!--
         --><div class="produit">
              <div class="nom"><?php echo $yw[$place]['hotel']['produits'][1]['nom'][$locale]; ?></div>
              <div class="prix"><?php echo $yw[$place]['hotel']['produits'][1]['prix'][$locale]; ?></div>
            </div><!--
         --><div class="produit">
              <div class="nom"><?php echo $yw[$place]['hotel']['produits'][2]['nom'][$locale]; ?></div>
              <div class="prix"><?php echo $yw[$place]['hotel']['produits'][2]['prix'][$locale]; ?></div>
            </div>
          </div>
          <div class="mention"><?php __p(array('hotel','mention'), true); ?></div>
          <div class="infos"><?php __p(array('hotel','infos'), true); ?></div>
        </div> <!-- /.content-zone -->
        <div class="plus-zone">
          <div class="partager hidden-xs">
            <?php $share_direction = 'left'; $share_section="#yw-hotel"; include('partage.inc.php'); ?>
          </div>
          <div class="btn-plus"><a href="<?php __p(array('hotel','lien'), true); ?>" class="external-link"><?php __p(array('hotel','bouton'), true); ?></a></div>
          <div class="partager-mob visible-xs-block">
            <?php $share_direction = 'top'; $share_section="#yw-hotel"; include('partage.inc.php'); ?>
          </div>
        </div> <!-- /.plus-zone -->
      </div> <!-- /.row -->
    </div><!-- /#yw-hotel.container -->
    <?php } ?>
    
    
    <!-- !---- PLAN ---- -->
    <div class="container-fluid" id="yw-plan" data-trigger="spiedby">
      <div class="row">
        <div class="map" id="yw-map"></div>
        <div class="plan-filtre">
          <div class="plan-liste">
            <?php foreach($prg_experiences as $expid) { ?>
              <div class="plan-expitem" style="color:<?php echo $yw['common']['experiences']['liste'][$expid]['colors'][1]; ?>" data-experience="<?php echo $expid; ?>"><?php echo preg_replace('/<br( \/)?>/', ' ', $yw['common']['experiences']['liste'][$expid]['titre'][$locale]); ?></div>
            <?php } ?>
          </div>
        </div>
        <div class="titre"><img src="<?php __asset('img/svg/plan-titre.svg'); ?>" alt="<?php __p(array('plan','titre')); ?>" width="100%" height="auto" /></div>
      </div>
    </div><!-- /#wp-plan.container -->
    
    
    </div>
    
    <?php /* FOOTER */ ?>
    </div>
    
    <div id="modal-cont" class="modal fade hidden-ie8 hidden-ie9" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
            
    <script>
    
      _map_center = [<?php echo $yw[$place]['plan']['center']; ?>];
      
      var _map_icons = {
        tasting: {
          icon: '<?php __asset('img/svg/hotpoint-tasting.svg'); ?>'
        },
        popup: {
          icon: '<?php __asset('img/svg/hotpoint-popup.svg'); ?>'
        },
        brunch: {
          icon: '<?php __asset('img/svg/hotpoint-brunch.svg'); ?>'
        },
        table: {
          icon: '<?php __asset('img/svg/hotpoint-table.svg'); ?>'
        },
        bytheglass: {
          icon: '<?php __asset('img/svg/hotpoint-bytheglass.svg'); ?>'
        },
        night: {
          icon: '<?php __asset('img/svg/hotpoint-night.svg'); ?>'
        }
      };
      
      <?php 
        $map_locations = array();
        foreach($prg_evenements as $jour) { 
          foreach($jour['experiences'] as $expkey=>$experience) { 
            foreach($experience['events'] as $expe_item) {
              
              if (!array_key_exists($expe_item['location'], $map_locations)) {
                $map_locations[$expe_item['location']] = array(
                                                          'nom' => $yw[$place]['locations'][$expe_item['location']]['nom'][$locale],
                                                          'dates' => $yw[$place]['locations'][$expe_item['location']]['dates'][$locale],
                                                          'contact' => $yw[$place]['locations'][$expe_item['location']]['contact'][$locale],
                                                          'gps' => $yw[$place]['locations'][$expe_item['location']]['gps'],
                                                          'experiences' => array($expkey)
                                                        );
              }
              if (!in_array($expkey, $map_locations[$expe_item['location']]['experiences'])) $map_locations[$expe_item['location']]['experiences'][] = $expkey;
            }
          }
        } 
      ?>    
      
        
    </script>
    
    <script>window.jQuery || document.write('<script type="text/javascript" src="<?php __asset('js/vendor/jquery-3.2.1.min.js'); ?>"><\/script>')</script>
    <script type="text/javascript" src="<?php __asset('js/vendor/clientdetection.js'); ?>"></script>
    <script type="text/javascript" src="<?php __asset('js/vendor/eventdispatcher.js'); ?>"></script>
    <script type="text/javascript" src="<?php __asset('js/vendor/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php __asset('js/vendor/slick.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php __asset('js/gmap_style.js'); ?>"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFNINH2raAe3LyqheeCmcdX-B-VCWOpOQ&sensor=FALSE"></script>


    <script type="text/javascript" src="<?php __asset('js/yelloweek.js'); ?>"></script>
    <script>
      
      var _share_target_url = "<?php echo $actual_link; ?>";
      
      var _map_locations;
      
      function _map_initSpots() {
        _map_locations = [
          <?php foreach ($map_locations as $lid=>$loc) {
                  foreach($loc['experiences'] as $expe) {
             ?>
          { 
            position: new google.maps.LatLng(<?php echo $loc['gps']; ?>), 
            gps: '<?php echo $loc['gps']; ?>', 
            type: '<?php echo $expe; ?>',
            id: '<?php echo $lid.'_'.$expe; ?>',
            color: '<?php echo $yw['common']['experiences']['liste'][$expe]['colors'][0]; ?>',
            experience: '<?php echo $yw['common']['experiences']['liste'][$expe]['titre'][$locale]; ?>',
            dates: '<?php echo $loc['dates']; ?>',
            nom: '<?php echo $loc['nom']; ?>',
            contact: '<?php echo $loc['contact']; ?>'
          },
          <?php 
              }
            } ?>
        ];   
      }
      
      var _infoWindow_tpl = '<div class="plan-infowindow"><div class="expe" style="color:%COLOR%;">%EXPE%</div><div class="dates">%DATES%</div><div class="nom">%NOM%</div><div class="contact">%CONTACT%</div><div class="bouton"><a href="<?php echo $root_path.$locale.'/'.$place; ?>/location/%URL%" class="popin-link"><?php __p(array('plan','more_btn')); ?></a></div></div>';
        
    </script>
    <script>
      function ga(i,s,o) {
        _console('GA neutralisé : '+i+', '+s+', url: '+o);
      }  
    </script>
    
  </body>
</html>  