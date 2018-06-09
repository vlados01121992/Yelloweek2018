<?php $loc = explode('_', $location); ?>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
  <div class="modal-header-logo"><img src="<?php __asset('img/svg/logo-yelloweek-jaune.svg'); ?>" width="100%" height="auto" alt="YelloWeek" /></div>
</div>
<div class="modal-body">
  <div class="modal-illu" data-background="<?php __asset($yw[$place]['locations'][$loc[0]]['image'][0], true); ?>" data-background-xs="<?php __asset($yw[$place]['locations'][$loc[0]]['image'][1], true); ?>"></div>
  <div class="modal-page-content">
    <div class="modal-main-zone">
      <div class="experience" style="color:<?php echo $yw['common']['experiences']['liste'][$loc[1]]['colors'][0]; ?>"><?php __p(array('experiences','liste',$loc[1],'titre')); ?></div>
      <div class="dates"><?php __p(array('locations',$loc[0],'dates'), true); ?></div>
      <div class="nom"><?php __p(array('locations',$loc[0],'nom'), true); ?></div>
      <div class="logo"><img src="<?php __asset('img/gui/dot.gif', true); ?>" data-src="<?php __asset($yw[$place]['locations'][$loc[0]]['logo'], true); ?>" width="100%" height="auto" alt="" /></div>
      <div class="description"><?php __p(array('locations',$loc[0],'description'), true); ?></div>
      <div class="contact"><?php __p(array('locations',$loc[0],'contact'), true); ?></div>
    </div>
    <div class="modal-plus-zone">
      <div class="partager hidden-xs">
        <?php $share_direction = 'right'; include('partage.inc.php'); ?>
      </div>
      <div class="btn-plus"><a href="<?php __p(array('locations',$loc[0],'lien'), true); ?>" class="external-link" target="_blank"><?php __p(array('locations',$loc[0],'bouton'), true); ?></a></div>
      <div class="partager-mob visible-xs-block">
        <?php $share_direction = 'top'; include('partage.inc.php'); ?>
      </div>
    </div> <!-- /.plus-zone -->
  </div>
  <div class="modal-map" id="modal-map"></div>
</div>
<script>
  
  
  
  function _popin_init() {
  
    _console('_popin_init() '+$('#modal-cont .logo img').length);
     
    // initialisation des images en fonction du retina et de la res.
    // logo
    var __src = $('#modal-cont .logo img').data('src').split('.');
    if ($('html').hasClass('hires')) __src[__src.length-2] += "@2x";
    $('#modal-cont .logo img').attr('src', __src.join('.'));
    
    // bg
    var __src = $('#modal-cont .modal-illu').data('background').split('.');
    var __src_xs = $('#modal-cont .modal-illu').data('background-xs').split('.');
    if ($('html').hasClass('hires')) {
      __src[__src.length-2] += "@2x";
      __src_xs[__src_xs.length-2] += "@2x";
    }
    var style_str = "<style>";
    style_str += "#modal-cont .modal-illu { background-image: url('"+__src_xs.join('.')+"'); } ";
    style_str += "@media (min-width: 768px) { #modal-cont .modal-illu { background-image: url('"+__src.join('.')+"'); }}";
    style_str += "</style>";
    
    $('#modal-cont .modal-body').append(style_str);
        
  }
  function _popin_map_init() {
    
    // initialisation de la carte Google Maps
    var styledMap = new google.maps.StyledMapType(gmap_style, {name: "YelloWeek"});
    
    <?php
      $gps_ar = explode(',', $yw[$place]['locations'][$loc[0]]['gps']);
      $gps_ar[0] = floatval($gps_ar[0]) + 0.036;
      
    ?>
      
    var mapOptions = {
      center: new google.maps.LatLng(<?php echo implode(',', $gps_ar); ?>),
      zoom: 12,
      scrollwheel: false,
      streetViewControl: false,
      mapTypeControl: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    var modal_map = new google.maps.Map(document.getElementById("modal-map"), mapOptions);
        
    modal_map.mapTypes.set('map_style', styledMap);
    modal_map.setMapTypeId('map_style');


    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(<?php echo $yw[$place]['locations'][$loc[0]]['gps']; ?>),
      icon: _map_icons['<?php echo $loc[1]; ?>'].icon,
      map: modal_map
    });
    
    $("#modal-map").hide(0).show(0);
    
  //  google.maps.event.trigger(modal_map,'resize');
  
    google.maps.event.addListenerOnce(modal_map, 'idle', function() {
      $("#modal-map").hide(10).show(10);
    });
//    
//    setTimeout(function() {
//      _console('resize map');
//      google.maps.event.trigger(modal_map,'resize');       
//    }, 1000);

  }
  
  _popin_map_init();
  _popin_init();
  
  
</script>