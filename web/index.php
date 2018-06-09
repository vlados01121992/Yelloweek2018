<?php 

  $locale = isset($_GET['locale']) ? $_GET['locale'] : 'fr-ca';
  $place = isset($_GET['place']) && !empty($_GET['place']) ? $_GET['place'] : 'common';
  $popin = isset($_GET['popin']) && !empty($_GET['popin']) ? $_GET['popin'] : '';
  $location = isset($_GET['location']) && !empty($_GET['location']) ? $_GET['location'] : '';
  
  $arguments = isset($_GET['arguments']) ? $_GET['arguments'] : '';
  
  $ar_r = explode('/', $arguments);
  
  $root_path = "";  //'../';
  
//  for($i=0;$i<mb_substr_count($arguments, '/');$i++) $root_path .= '../';
  for($i=0;$i<min(array(count($ar_r),2));$i++) $root_path .= '../';

    
  /**
   *  Affiche le texte provenant du tableau de textes
   *    en fonction du chemin et de la source
   *    La langue est définie par la variable globale '$locale'
   *
   *  @param  array $path
   *      tableau contenant les clés pour accéder à la chaîne
   *  @param  bool  $custom (default: false)
   *      indique si la chaîne doit provenir des chaînes communes à toutes les villes
   *      ou provenir des chaînes définies pour une ville en particulier
   *      (dans ce dernier cas, la ville est définie dans la variable globale '$place'
   */  
  function __p($path, $custom=false) {
    
    global $place, $yw, $locale;
    
    if ($custom) {
    
      $custom_ar = array_merge(array($place),$path);
      $l = count($custom_ar);
      $cs = $yw;
      for($i=0;$i<$l;$i++) {
        $cs = isset($cs[$custom_ar[$i]]) ? $cs[$custom_ar[$i]] : array();
      }
      
    } else {
      
      $common_ar = array_merge(array('common'),$path);
      $l = count($common_ar);
      $cm = $yw;
      for($i=0;$i<$l;$i++) {
        $cm = $cm[$common_ar[$i]];
      }
    }
    
    echo $custom ? (count($cs)>0) ? $cs[$locale] : '' : $cm[$locale];
    
  }
  
  /**
   *  Affiche le chemin vers le chemin passé en paramètre
   *    en fonction de la profondeur de l'arborescence
   *    conditionnée par la présence ou non d'un "trailing slash"
   *    Si l'url se termine par un "/", il faut ajouter un niveau d'arborescence
   *    et donc remonter d'un niveau pour attendre les fichiers placés à la racine
   *
   *  @param  string  $path
   *      Chemin vers la ressource appelée
   */
  function __asset($path) {
    global $root_path;
    echo $root_path.$path;
  }
  
  
  include_once('resources/textes/common.inc.php');
  if ($place=="common") {
    include_once('resources/launch.inc.php');  
  } else {
    include_once('resources/textes/'.$place.'.inc.php');
    if ($popin!='') {
      include_once('resources/popin.inc.php');
    } else {
      include_once('resources/main.inc.php');
    }
  }
  
?>