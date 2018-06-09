var $w = $(window)
   ,debug = true
   ,now = new Date()
   ,email_preg = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i') 
   ,transEndEventNames = {"transition": "transitionend", "OTransition": "oTransitionEnd", "MozTransition": "transitionend", "WebkitTransition": "webkitTransitionEnd"}
   ,transEndEventName    // transition end event name
   ,animEndEventNames = {"animation": "animationend", "OAnimation": "oanimationend", "MozAnimation": "animationend", "webkitAnimation": "webkitAnimationEnd"}
   ,animEndEventName     // animation end event name
   ,eventDispatcher      // (cf js/vendor/eventdispatcher.js)
   ,resolution
   ,clientConfig
   ,rub_obj
   ,modalVerticalCenterClass = ".modal"
   ,popover_message_template = '<div class="popover popover-message" role="tooltip"><div class="popover-ajax-content"></div><div class="popover-content hidden"></div></div>'
   ,bodyST
   ,menurefheight = -1
   ,wscrolltop           // current position of window scroll
   ,remonteval           // if we scroll up, how many pixels we scroll ?
   ,remontedelta = 10    // minimum value to consider the move is a "scroll up"
   ,_exp_slider_id = 0
   ,experiences_slider
   ,_prg_slider_id = 0
   ,programme_slider
   ,_map_markers = []
   ,_infowindow = []
   ,_infowindowid = -1
   ;
   
var expslider_width = [];
expslider_width['xs'] = '100%';
expslider_width['sm'] = 210;
expslider_width['md'] = 296;
expslider_width['lg'] = 296;
expslider_width['xl'] = 296;

var expslider_nbre = [];
expslider_nbre['xs'] = 1;
expslider_nbre['sm'] = 3;
expslider_nbre['md'] = 3;
expslider_nbre['lg'] = 4;
expslider_nbre['xl'] = 4;

var prgslider_width = [];
prgslider_width['xs'] = '100%';
prgslider_width['sm'] = 296;
prgslider_width['md'] = 296;
prgslider_width['lg'] = 296;
prgslider_width['xl'] = 296;

var prgslider_nbre = [];
prgslider_nbre['xs'] = 1;
prgslider_nbre['sm'] = 2;
prgslider_nbre['md'] = 3;
prgslider_nbre['lg'] = 4;
prgslider_nbre['xl'] = 4;
   
/**
 * display messages in js console
 */
function _console(e,n){"use strict";var o=["","Lun","Mar","Mer","Jeu","Ven","Sam","Dim"],t=new Date;n&&(e=o[t.getDay()]+"."+("0" + t.getHours()).slice(-2)+":"+("0" + t.getMinutes()).slice(-2)+":"+("0" + t.getSeconds()).slice(-2)+" "+e),"undefined"!=typeof console&&debug===!0&&console.log(e)}



/**
 * returns the numeric value from a CSS value
 */
function _getValNum(str) {
  return  Number(str.substring(0, str.indexOf('px')));
}

function _hexToRgb(hex) {
  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;
}

/*
 * detection de la largeur de l'ecran pour lui attribuer une classe
 */
function _sizedetect() {
  
  var w = $w.innerWidth();
  
  if (w<768) {
    if(!$('html').hasClass('xs')) {
      $('html').addClass('xs');
      _sizeChange('xs');
      
      $('html').addClass('mobile');
      
    }
  } else {
    if($('html').hasClass('xs')) $('html').removeClass('xs');
    if($('html').hasClass('mobile')) $('html').removeClass('mobile');
  }
  
  if (w>=768 && w<992) {
    if(!$('html').hasClass('sm')) {
       $('html').addClass('sm');
      _sizeChange('sm');
    }
  } else {
    if($('html').hasClass('sm')) $('html').removeClass('sm');
  }
  
  if (w>=992 && w<1200) {
    if(!$('html').hasClass('md')) {
      $('html').addClass('md');
      _sizeChange('md');
    }
  } else {
    if($('html').hasClass('md')) $('html').removeClass('md');
  }
  
  if (w>=1200) {
    if(!$('html').hasClass('lg')) {
      $('html').addClass('lg');
      _sizeChange('lg');
    }
  } else {
    if($('html').hasClass('lg')) $('html').removeClass('lg');
  }
}


function _sizeChange(res) {
  resolution = res;
  
  _console("_sizeChange("+res+")");
  
  setTimeout(function() {
    eventDispatcher.dispatchEvent({type:"resolutionChange", resolution:res});
  }, 300);

  
}



/**
 * Modernizr test for retina / high resolution / high pixel density
 *
 * @author Joao Cunha
 * @license MIT
 */

Modernizr.addTest('hires', function() {
    // starts with default value for modern browsers
    var dpr = window.devicePixelRatio ||

    // fallback for IE
        (window.screen.deviceXDPI / window.screen.logicalXDPI) ||

    // default value
        1;

    return !!(dpr > 1);
});




/* ! INITIALISATION */
$(document).ready(function() {


  _console("VCP YelloWeek-2018 READY________", true);
  
  $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    
  eventDispatcher = new util.EventDispatcher(this);  
  
  
  transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ];
  animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];
  
  
  // touch inteface detection
  $('html').addClass(Modernizr.touch?'touch':'no-touch');
  
  
  // resize listeners
  $w.on("resize", _sizedetect);
  _sizedetect();
  
 
  if (!$('#yw-maincontainer').hasClass('launch')) {
    
    
  //  $("meta[property='og:url']").attr('content', $("meta[property='og:url']").attr('content')+window.location.hash);
    
    _nav_setActions();
      
    
    _root_setLinks();
    
    _setModalCentering();
    _setModalCloseActions();
    
    window.onhashchange = function() {
      if (window.location.hash=="#closedpopin") $('#modal-cont').modal('hide');
    }
    
      
    $('#modal-cont').on('show.bs.modal', _modal_showLsn);
    $('#modal-cont').on('shown.bs.modal', _init_modal);
    $('#modal-cont').on('hidden.bs.modal', _modal_hideLsn);
    
    
    $w.on('scroll', function() {
      
      var __winScrollTop = $(window).scrollTop();
      var __winHeight = $(window).innerHeight();
      
      $("[data-trigger='spiedby']").each(function(i,e) {
        var __oTop = $(this).offset().top;
        var __id = $(this).attr('id');
        var __item = $('#yw-nav-fixed').find("a[href='#"+__id+"']");
        if (__oTop < (__winHeight + __winScrollTop) && __oTop > __winScrollTop) {
          if (!__item.hasClass('active')) __item.addClass('active');
        } else {
          if (__item.hasClass('active')) __item.removeClass('active');
        }
      });
    });
    
    
    // share actions init
    _initPartage();
    
    // scroll listeners
    _navbarPosition();
    $w.on("scroll", _navbarPosition);
      
    
    // #wp-experiences init
    _initSlickExperiences();
    
    // #wp-programme init
    _initFiltreProgramme();
    _initSlickProgramme();
    
    // #wp-plan init
    _map_init();
    
  }
});


/**
 * commands the compact nav opening depending on the scroll
 */
function _navbarPosition() {  
  
  var remonte = false;
  // if we scroll to top
  // we add pixels to know if the move is significant
  if (wscrolltop>$w.scrollTop()) {
    remonte = true;
    remonteval += wscrolltop-$w.scrollTop();
  } else {
    remonteval = 0;
  }
  wscrolltop = $w.scrollTop();

  // if the nav is at least 20px up to the viewport
  if ($w.scrollTop() > ($('#yw-nav').offset().top + $('#yw-nav').height()+20)) {
    
    // if we scroll up (and if the move is significant), we show the compact nav
 //   if (remonte && remonteval>=remontedelta) {
      if (!$('#yw-nav-fixed').hasClass('open'))  $('#yw-nav-fixed').addClass('open');
 //   }
    // if we scroll down, we hide the compact nav
 //   else {
 //     if ($('#yw-nav-fixed').hasClass('open'))  $('#yw-nav-fixed').removeClass('open');
 //   }
  } 
  // if the nav is in the viewport, we hide the compact nav
  else {
    if ($('#yw-nav-fixed').hasClass('open'))  $('#yw-nav-fixed').removeClass('open');    
  }
  
  // scroll position update
  wscrolltop = $w.scrollTop();
  
}



function _modal_showLsn(e) {
  
  
  window.location.hash = '#openpopin';
  
  bodyST = $(document).scrollTop();
    $('body').css({top:-bodyST,
                   height:'calc(100% + '+bodyST+'px)'});
                   
                   _console('modal show');
                   
 // _console('content['+$('.modal-content').height()+'] - illu['+$('.modal-illu').height()+'] - header['+$('.modal-header').height()+']');
                     
}
function _modal_hideLsn(e) {

     $('body').scrollTop(bodyST)
              .css({top:'', 
                    height:'100%'});
                    
                    
      window.history.back();
  
}

function _init_modal() {
      
  $('#modal-map').css('margin-top',Math.max(0, ($('.modal-page-content').outerHeight()+85) - $('.modal-illu').innerHeight() - $('#modal-map').innerHeight()));
  
}

function _root_setLinks() {

  $(document).on('click', '.popin-link', function(e) {
    e.preventDefault();
    
    if ($(this).parents('.jour-slide.inactive').length) {
      return false;
    } else {
      _root_openModal($(this).attr('href'));
    }
  });  
  
}

function _root_openModal(url) {
  
  $('#modal-cont .modal-content').load(url, 
                                       function( response, status, xhr ) {
                                       	 
                                         if ( status == "error" ) {
                                           _console("!!! page loading error !!!");
                                         }
                                         else {
                                           _console("!!! page ready to display !!!"); 
                                           
                                          
                                          window.location.hash = '#closedpopin';
                                           
                                           
                                           
                                           // appel à Google Analytics pour l'enregistrement de la page dans les stats.
                                          // ga('send','pageView', url);
                                           ga('set', 'page', url);
                                           ga('send', 'pageview');
                                           
                                           
                                           $('#modal-cont').modal('show');
                                           
                                    //       _init_modal();

                                         }
                                       });  
  
}



// function _root_setLinks() {
//   _console('_root_setLinks()');
//   $(document).on('click', '.remote-modal', function(e) {
//     e.preventDefault();
//     var context = $(this).data('context');
//     _root_loadModal($(this).attr('href'), context);
//   });
// }
// 
// 
// function _root_loadModal(url, context) {
//   _console("_root_loadModal("+url+")");
//   
//   // si le context est défini, on l'attribue à la popin
//   if (context!=undefined) {
//     $('#modal-cont').data('context', _root_defineModalContext(context));
//     if (context=="xs-fullscreen") {
//       $('#modal-cont .modal-dialog').addClass('fullscreen');
//     } else {
//       if ($('#modal-cont .modal-dialog').hasClass('fullscreen')) $('#modal-cont .modal-dialog').removeClass('fullscreen');
//     }
//   } else {
//     if ($('#modal-cont .modal-dialog').hasClass('fullscreen')) $('#modal-cont .modal-dialog').removeClass('fullscreen');
//   }
//   
//   url = url+'?intern=1';
//   
//   $('#modal-cont .modal-content').load(url, 
//                                        function( response, status, xhr ) {
//                                        	 
//                                          if ( status == "error" ) {
//                                            _console("!!! page loading error !!!");
//                                          }
//                                          else {
//                                            _console("!!! page ready to display !!!"); 
//                                            
//                                            // appel à Google Analytics pour l'enregistrement de la page dans les stats.
//                                           // ga('send','pageView', url);
//                                            ga('set', 'page', url);
//                                            ga('send', 'pageview');
//                                            
//                                            
//                                            $('#modal-cont').modal('show');
//                                          }
//                                        });
//   
// }
// 
// /**
//  * Filtre les données de contexte pour les modal
//  * (destinée à la popin Message)
//  */
// function _root_defineModalContext(context) {
//   var c = context;
//   
//   // exceptions
//   if (context=="body-class") c = $('body').attr('class');
//     
//   return c;
// }


function centerModals($element) {
    var $modals;
    if ($element.length) {
        $modals = $element;
    } else {
        $modals = $(modalVerticalCenterClass + ':visible');
    }
        
    $modals.each( function(i) {

      if ($(this).find('.modal-dialog').hasClass('fullscreen') && resolution=="xs") return;

      var $clone = $(this).clone().css('display', 'block').appendTo('body');
      var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
      top = top > 0 ? top : 0;
      $clone.remove();
      $(this).find('.modal-content').css("margin-top", top);
      
    });
}

/**
 * Active le centrage vertical des modals (et la mise à jour de la position)
 */
function _setModalCentering() {  
  $(modalVerticalCenterClass).on('show.bs.modal', function(e) {
    centerModals($(this));  
  });
  $(window).on('resize', centerModals);
}

function _setModalCloseActions() {
  $(modalVerticalCenterClass).on('hidden.bs.modal', function(e) {
    $(this).find('.modal-content').attr('style','');
    if ($(this).find('.modal-dialog').hasClass('fullscreen')) $(this).find('.modal-dialog').removeClass('fullscreen');  
  });
}

 
/* ! ---------- NAVIGATION ---------- */
function _nav_setActions() {
    
  // action on the "back to top" button (in compact nav)
  $('#yw-nav-fixed .top-btn').on('click', function() {
    $(document).scrollTop(0);
  });
  
}

/**
 * Commande la fermeture du menu
 * si on clique en-dehors du menu
 */
function _nav_closeListener(e) {
  
  var parent = ($.inArray(resolution,['sm','md','lg'])!=-1) ? '.header-dropdown .header-menu' : '.nav-menu';
  
  if($(e.target).parents(parent).length!=1) {
    _nav_close();
  }
}

function _nav_open(direct) {
    
  $('header .header-user li').addClass('open');
  
  eventDispatcher.addEventListener('resolutionChange', _nav_resolutionListener);
    
  setTimeout(function() {
    if ($('header .header-user li').hasClass('open')) $('body').on('click', _nav_closeListener);
  }, 500);
  
  _console("resolution : "+resolution);
  
  // ouverture du menu pour ordinateurs
  if ($.inArray(resolution,['sm','md','lg'])!=-1) _nav_openLarge(direct);
  
  // ouverture du menu pour tablettes et mobiles
  if ($.inArray(resolution,['xs'])!=-1) _nav_openSmall(direct);
  
  $w.on('resize', _nav_windowsizeChange);
  _nav_windowsizeChange();
  
  
//  $("header .notif-item[data-toggle='tooltip']").tooltip({delay:{"show":500, "hide":0}});
  
}

function _nav_openSmall(direct) {
  
  if (direct==true) {
    $('.nav-menu').removeClass('open')
                  .stop(false,false)
                  .css({opacity:1, display:'block'});
  }
  else {
    $('.nav-menu').addClass('open')
                  .stop(false,false)
                  .css({opacity:0,display:'block'})
                  .transition({opacity:1, duration:300, easing:"easeOutCubic"});
  }
  bodyST = $(document).scrollTop();
  if (!$('body').hasClass('modal-open')) {
    $('body').addClass('modal-open')
             .css({top:-bodyST,
                   height:'calc(100% + '+bodyST+'px)'});
  }
  
}

function _nav_openLarge(direct) {
  
  if (direct==true) {
    $('.header-dropdown').removeClass('open')
                         .stop(false,false)
                         .css({opacity:1, display:'block'});
  }
  else {
    $('.header-dropdown').addClass('open')
                         .stop(false,false)
                         .css({opacity:0,display:'block'})
                         .transition({opacity:1, duration:300, easing:"easeOutCubic"});
  }
}

function _nav_closeSmall(direct) {
  
  if (direct==true) {
    $('.nav-menu').removeClass('open')
                  .stop(false,false)
                  .css({opacity:0, display:'none'});
  }
  else {
    $('.nav-menu').removeClass('open')
                  .stop(false,false)
                  .transition({opacity:0, duration:300, easing:"easeOutCubic"})
                  .css({display:'none'});
  }
  if ($('body').hasClass('modal-open')){
     $('body').removeClass('modal-open')
              .scrollTop(bodyST)
              .css({top:'', 
                    height:'100%'});
  }
  
}

function _nav_closeLarge(direct) {
  
  if (direct==true) {
    $('.header-dropdown').removeClass('open')
                         .stop(false,false)
                         .css({opacity:0, display:'none'});
  }
  else {
    $('.header-dropdown').removeClass('open')
                         .stop(false,false)
                         .transition({opacity:0, duration:300, easing:"easeOutCubic"})
                         .css({display:'none'});
  }
}

/**
 *  Ferme le menu "user" de la nav.
 */
function _nav_close(direct) {
  
  // fermeture du menu pour ordinateurs
//  if ($.inArray(resolution,['md','lg'])!=-1) _nav_closeLarge(direct);
//  
//  // fermeture du menu pour tablettes et mobiles
//  if ($.inArray(resolution,['xs','sm'])!=-1) _nav_closeSmall(direct);

  _nav_closeLarge(direct);
  _nav_closeSmall(direct);
  
  $('header .header-user  li').removeClass('open');
  $('body').off('click', _nav_closeListener);
  
  eventDispatcher.removeEventListener('resolutionChange', _nav_resolutionListener);
  
  $w.off('resize', _nav_windowsizeChange);
  
//  $("header .notif-item[data-toggle='tooltip']").tooltip('destroy');

}

function _nav_resolutionListener(e) {
  if ($('header .header-user  li').hasClass('open')) {
        
    
    if (($.inArray(resolution,['sm','md','lg'])!=-1) && ($('.nav-menu').hasClass('open'))) {
       _nav_openLarge();
       _nav_closeSmall();
       
    }
    if (($.inArray(resolution,['xs'])!=-1) && ($('.header-dropdown').hasClass('open'))) {
       _nav_closeLarge();
       _nav_openSmall();
    }
    
    $('header .open .notif-list > ul').attr('style','');
    menurefheight = -1;
    _nav_windowsizeChange();
  }
}

// redim de la liste des notif en fonction de la hauteur disponible
function _nav_windowsizeChange() {
  
  if (resolution!='xs') {
  
    // hauteur de la liste
    var notiflistheight = ($('header .open .notif-list>ul>li').length * $('header .open .notif-list>ul>li:first-child').innerHeight()) + 10;
    var menuheight = $('header .header-menu').height()+$('.navbar-container').height();
    if (menurefheight == -1) {
      menurefheight = menuheight;
      _console("menurefheight["+menurefheight+"]");
    }
    _console("("+resolution+"): $w.h["+$w.innerHeight()+"] < menurefheight["+menurefheight+"]");
    var lh;
    
    if ($w.innerHeight()<menurefheight) {
      
      if (!$('header .open .notif-list > ul').hasClass('scrollable')) $('header .open .notif-list > ul').addClass('scrollable');
      
      lh = Math.max($('header .open .notif-list>ul>li:first-child').innerHeight(), notiflistheight - (menurefheight - $w.innerHeight()));
      
      $('header .open .notif-list > ul').height(lh);
      
    } else {
      if ($('header .open .notif-list > ul').hasClass('scrollable')) $('header .open .notif-list > ul').removeClass('scrollable');
      $('header .open .notif-list > ul').attr('style','');
    }
  }
  else {
    
    if ($('header .open .notif-list > ul').hasClass('scrollable')) $('header .open .notif-list > ul').removeClass('scrollable');
    $('header .open .notif-list > ul').attr('style','');
    menurefheight = -1;
    
    if ($('header .nav-menu.open').length>0) {
      var conth = $('header .nav-menu.open').height()+$('header .nav-menu.open').offset().top;
      var menuh = $('header .nav-menu.open .header-menu').height()+$('header .nav-menu.open .header-menu').offset().top;
      var notifbtm = $('header .nav-menu.open .header-menu .notif-list').offset().top+$('header .nav-menu.open .header-menu .notif-list').outerHeight(true);
      var tbtop = $('header .nav-menu.open .header-menu .toolbar').offset().top;
      _console("("+resolution+"): menuh["+menuh+"] <= conth["+conth+"] -- tbtop["+tbtop+"] <= notifbtm["+notifbtm+"]");
      if (menuh<=conth) {
        if (!$('header .nav-menu.open .header-menu .toolbar').hasClass('fixed')) $('header .nav-menu.open .header-menu .toolbar').addClass('fixed');
        if (tbtop+5<notifbtm) {
          if ($('header .nav-menu.open .header-menu .toolbar').hasClass('fixed')) $('header .nav-menu.open .header-menu .toolbar').removeClass('fixed');
        }
      } else {
        if ($('header .nav-menu.open .header-menu .toolbar').hasClass('fixed')) $('header .nav-menu.open .header-menu .toolbar').removeClass('fixed');
      }
    }
  }  
  
}



function _initSlickExperiences() {
  
  _console('largeur slide : '+expslider_width[resolution]);
      
  // carousel "on deck"  
  experiences_slider = $('#experience-slider').slick({
                        dots: false,
                        infinite: false,
                        slidesToShow: 4,
                        swipe: $('html').hasClass('touch'),
                        prevArrow: $('#yw-experiences .slider-prev'),
                        nextArrow: $('#yw-experiences .slider-next'),
                        responsive: [
                          {
                            breakpoint: 1200,
                            settings: {
                              slidesToShow: 4,
                            }
                          },
                          {
                            breakpoint: 992,
                            settings: {
                              slidesToShow: 3,
                            }
                          },
                          {
                            breakpoint: 768,
                            settings: {
                              slidesToShow: 1,
                            }
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              slidesToShow: 1,
                            }
                          }
                        ]
                     });
    
  
    // arrows display update
    $('#experience-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      if (nextSlide==0) {
        $('#yw-experiences .slider-prev').addClass('disabled');
      } else {
        $('#yw-experiences .slider-prev').removeClass('disabled');
      }
      if (nextSlide+$('#experience-slider').slick('slickGetOption','slidesToShow')>=$('.experience-item').length) {
        $('#yw-experiences .slider-next').addClass('disabled');
      } else {
        $('#yw-experiences .slider-next').removeClass('disabled');
      }

  
    });
  
  
    if ($('html').hasClass('no-touch')) {
      $(document).on('mouseenter mouseleave', '.experience-item', function() {
        if (!$(this).hasClass('inactive') && $(this).hasClass('slick-active'))  $(this).find('.content-zone').toggleClass('open');
      });
    } else {
      $(document).on('click', '.experience-item',function() {
        if (!$(this).hasClass('inactive') && $(this).hasClass('slick-active'))  $(this).find('.content-zone').toggleClass('open');
      });
    }
  
}







function _initSlickProgramme() {
  
      
  // carousel "on deck"
  
  programme_slider = $('#programme-slider').slick({
                        dots: false,
                        slidesToShow: 4,
                        prevArrow: $('#yw-programme-calendar .slider-prev'),
                        nextArrow: $('#yw-programme-calendar .slider-next'),
                        swipe: $('html').hasClass('touch'),
                        responsive: [
                          {
                            breakpoint: 1200,
                            settings: {
                              slidesToShow: 4,
                            }
                          },
                          {
                            breakpoint: 992,
                            settings: {
                              slidesToShow: 3,
                            }
                          },
                          {
                            breakpoint: 768,
                            settings: {
                              slidesToShow: 1,
                            }
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              slidesToShow: 1,
                            }
                          }
                        ]
                     });
  
    
  
  // filters the day and the experience
  $('#yw-programme-calendar .expe-group').on('click', function(e) {
    
    
    if (!$(this).parents('.jour-slide').hasClass('inactive')) {
    
      var expe = $(this).data('expe');
      
      _filtreProgramme(expe, $(this).data('jour'));
      
      
      $(".filtre-link[data-experience='"+expe+"']").addClass('selected');
      $(".filtre-link[data-experience!='"+expe+"']").removeClass('selected');
      $('#yw-prg-filtres-mob-dropdown').html($(".filtre-link[data-experience='"+expe+"']").html().replace(/<br( \/)?>/,' ')+'<span class="chevron"></span>');
    }
  });
  
}


function _updateSlickProgramme() { }


function _initFiltreProgramme() {
  
  $('.filtre-link').on('click', function(e) {
    e.preventDefault();
    $(".filtre-link[data-experience='"+$(this).data('experience')+"']").addClass('selected');
    $(".filtre-link[data-experience!='"+$(this).data('experience')+"']").removeClass('selected');
    _filtreProgramme($(this).data('experience'));
    $('#yw-prg-filtres-mob-dropdown').html($(this).html().replace(/<br( \/)?>/,' ')+'<span class="chevron"></span>');
  });
  
}

function _filtreProgramme(expe, date) {
  
  _console('_filtreProgramme('+expe+')');
  
  if (expe=="all") {
    $("#yw-programme-calendar .jour-experience").fadeOut({duration:0,complete:function() {
                                                              $(this).removeClass('filtered')
                                                                     .dequeue()
                                                                     .fadeIn();
                                                            }
                                                          });  
    $('#yw-programme-calendar').attr('data-filtre','');
    
    $('#yw-programme-experience').fadeOut();
    $('#yw-programme-experience .titre').text('');
    $('#yw-programme-experience .description').text('');
    
  }
  else {
    $("#yw-programme-calendar .jour-experience").fadeOut({duration:0,complete:function() {
        if ($(this).data('id')==expe) {
          $(this).addClass('filtered')
                 .fadeIn();
        }
        else {
          $(this).removeClass('filtered');
        }
      
      }});
    $('#yw-programme-calendar').attr('data-filtre',expe);
    
    var $expe_source = $('#exp-'+expe);
    
    $('#yw-programme-experience').fadeOut({complete:function(){
      
        $('#yw-programme-experience .titre').html($expe_source.find('.nom').html()).attr('style',$expe_source.find('.nom').attr('style'));
        $('#yw-programme-experience .description').html($expe_source.find('.contenu').html());
        $('#yw-programme-experience').fadeIn();
      }
    });
    
   
  }
  /*
  if (date!=undefined) {
     
    $('.jour-slide').each(function(i,e) {
      if ($(this).attr('data-jour')!= date) {
        if (!$(this).hasClass('inactive')) $(this).addClass('inactive');
      } else {
        if ($(this).hasClass('inactive')) $(this).removeClass('inactive');
      }
    });
    
  } else {
  */  
    $('.jour-slide').each(function(i,e) {
   //   if (i < _prg_slider_id) {
   //     if (!$(this).hasClass('inactive')) $(this).addClass('inactive');
  //    } else if (i >= _prg_slider_id + prgslider_nbre[resolution]) {
   //     if (!$(this).hasClass('inactive')) $(this).addClass('inactive');
   //   } else {
        if ($(this).hasClass('inactive')) $(this).removeClass('inactive');
   //   }
    });
 // }
  
  
}

  function _initPartage() {
  
  if ($('html').hasClass('no-touch')) {
    /*
    $(document).find('.btn-share').hover(
      function(e) {
        $(this).addClass('open');
        _console('over '+$(this).attr('class'));
      },
      function(e) {
        _console('out');
        if ($(this).hasClass('open')) $(this).removeClass('open');
      }
    );
    */
     $(document).on('mouseenter mouseleave', '.btn-share', function() {
        $(this).toggleClass('open');
      });
  }
  else {
    
    $(document).on('mouseover', '.btn-share', function() {
      if ($(this).hasClass('open')) {
        $(this).removeClass('open');
      } else {
        $(this).addClass('open');
      }
    });
    
  }
  
  
  $(document).on('click', '.sh-app', function(e) {
    e.preventDefault();
    
    var __share_url,
        __section = $(this).parents('.btn-share').data('section');
    
    
    if ($(this).hasClass('sh-facebook')) {
      if ($('html').hasClass('mobile')) {
        __share_url = 'http://m.facebook.com/sharer.php?u=' + encodeURIComponent(_share_target_url+__section);
  //      __share_url = 'fb://share?link=' + _share_target_url;
      } else {
        __share_url = 'http://www.facebook.com/sharer/sharer.php?s=100&p[url]=' + encodeURIComponent(_share_target_url+__section);
      }
    }
    if ($(this).hasClass('sh-twitter')) {
        __share_url = 'https://twitter.com/share';
    }
    if ($(this).hasClass('sh-whatsapp')) {
        __share_url = 'https://api.whatsapp.com/send?text=' + _share_target_url+__section;
    }
    if ($(this).hasClass('sh-messenger')) {
      if ($('html').hasClass('mobile')) {
        __share_url = 'fb-messenger://share?link=' + encodeURIComponent(_share_target_url+__section);
      } else {
        __share_url = 'http://www.facebook.com/sharer/sharer.php?s=100&p[url]=' + _share_target_url+__section;
      }
    }

    
    newwindow = window.open(__share_url, '', 'height=300,width=500');
    if (window.focus) {
        newwindow.focus()
    }
    return false;
    
  });
   
  
}

/*
function _initPartage() {
  
  if ($('html').hasClass('no-touch')) {
    
    $('.btn-share').on('mouseover', function() {
      _console('over');
      if (!$(this).hasClass('open')) $(this).addClass('open');
    });
    $('.btn-share').on('mouseover', function() {
      _console('out');
      if ($(this).hasClass('open')) $(this).removeClass('open');
    });
  }
  else {
    
    $('.btn-share').on('mouseover', function() {
      if ($(this).hasClass('open')) {
        $(this).removeClass('open');
      } else {
        $(this).addClass('open');
      }
    });
    
  }
  
  
  $('.sh-app').on('click', function(e) {
    e.preventDefault();
    
    var __share_url;  
    
    if ($(this).hasClass('sh-facebook')) {
      if ($('html').hasClass('mobile')) {
        __share_url = 'http://m.facebook.com/sharer.php?u=' + _share_target_url;
      } else {
        __share_url = 'http://www.facebook.com/sharer/sharer.php?s=100&p[url]=' + _share_target_url;
      }
    }
    if ($(this).hasClass('sh-twitter')) {
        __share_url = 'https://twitter.com/share';
    }
    if ($(this).hasClass('sh-whatsapp')) {
        __share_url = 'https://api.whatsapp.com/send?text=' + _share_target_url;
    }
    if ($(this).hasClass('sh-messenger')) {
        __share_url = 'fb-messenger://share?link=' + encodeURIComponent(_share_target_url);
    }

    
    newwindow = window.open(__share_url, '', 'height=300,width=500');
    if (window.focus) {
        newwindow.focus()
    }
    return false;
    
  });
   
  
}

*/

/**
 * INIT MAP SECTION
 */
function _map_init() {
  
  // map init when API loaded
  google.maps.event.addDomListener(window, 'load', _yw_gmap_initialize);

  
  // filter items actions init
  $('#yw-plan .plan-expitem').on('click', function(e) {
    $(this).toggleClass('disabled');
    _map_toggleMarkerType($(this).data('experience'));
  });
  
  // filters reset when resolution goes to XS
  eventDispatcher.addEventListener('resolutionChange', function(res) {
    if (res=='xs') {
      $('#yw-plan .plan-expitem').each(function(i,e) {
        if ($(e).hasClass('disabled')) {
          $(e).removeClass('disabled');
          _map_toggleMarkerType($(e).data('experience'));
        }
      });
    }
  })
  
}

/**
 * Init Google Maps
 */
function _yw_gmap_initialize() {
    
  // launch spots init (need google API ready to perform this init)
  _map_initSpots();
  
  var styledMap = new google.maps.StyledMapType(gmap_style, {name: "YelloWeek"});
  
  
  var mapOptions = {
    center: new google.maps.LatLng(_map_center[0],_map_center[1]),
    zoom: 12,
    scrollwheel: false,
    streetViewControl: false,
    mapTypeControl: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  
  var map = new google.maps.Map(document.getElementById("yw-map"), mapOptions);
      
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
  
  
  // set markers on map
  _map_locations.forEach(function(feature) {
    
    var marker = new google.maps.Marker({
      position: feature.position,
      icon: _map_icons[feature.type].icon,
      map: map
    });
    
    
    var __infoW = _infoWindow_tpl.replace(/%COLOR%/, feature.color);
        __infoW = __infoW.replace(/%EXPE%/, feature.experience);
        __infoW = __infoW.replace(/%DATES%/, feature.dates);
        __infoW = __infoW.replace(/%NOM%/, feature.nom);
        __infoW = __infoW.replace(/%CONTACT%/, feature.contact);
        __infoW = __infoW.replace(/%URL%/, feature.id);
        
        
    var infowindow = new google.maps.InfoWindow({
      content: __infoW,
      maxWidth: 296,
    });
    
    _infowindow[feature.id] = infowindow;
    
    $(marker).data('id',feature.id);
          
    marker.addListener('click', function() {
      
      var __id = $(this).data('id');
      
      _console(_infowindowid+" m.id: "+__id);
      
      if (_infowindowid != __id) {
        if (_infowindowid!=-1) _infowindow[_infowindowid].close();
        
        _infowindowid = __id;
        infowindow.open(__infoW, marker);
        _setIWstyle();
      }
    });
    
    // markers store by 'experience' in array
    if (!_map_markers[feature.type]) _map_markers[feature.type] = [];    
    _map_markers[feature.type].push(marker);
  
  });
  
  
  google.maps.event.addListener(map, 'click', function() {
    _console('fermeture sur "MAP" id : '+_infowindowid);      
    for (var p in _infowindow) _infowindow[p].close();
    _infowindowid = -1;
  });
  
//    google.maps.event.addListenerOnce(map, 'idle', function() {
//        google.maps.event.trigger(map, 'resize');
//    });
   
//  setTimeout(function() {
//    google.maps.event.trigger(map,'resize');       
//  }, 1000);
  
} 
  
  function _setIWstyle() {
    
    _console('_setIWstyle()');

    $('.gm-style-iw').prev('div').css('display','none');

  }
  
  
/**
 * hide/display markers on map
 */
function _map_toggleMarkerType(experience) {
          
  for (var i = 0; i < _map_markers[experience].length; i++) {
    var marker = _map_markers[experience][i];
    if (!marker.getVisible()) {
      marker.setVisible(true);
    } else {
      marker.setVisible(false);
    }
  }

}