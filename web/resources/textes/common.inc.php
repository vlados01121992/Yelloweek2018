<?php 

$yw = isset($yw) ? $yw : array();

$yw['places'] = array('calgary'=>'Calgary', 'edmonton'=>'Edmonton', 'halifax'=>'Halifax', 'montreal'=>'Montréal', 'toronto'=>'Toronto', 'vancouver'=>'Vancouver');

$yw['jours'] = array(
  array('fr-ca' => 'dimanche', 'en-ca' => 'sunday'),
  array('fr-ca' => 'lundi', 'en-ca' => 'monday'),
  array('fr-ca' => 'mardi', 'en-ca' => 'tuesday'),
  array('fr-ca' => 'mercredi', 'en-ca' => 'wednesday'),
  array('fr-ca' => 'jeudi', 'en-ca' => 'thursday'),
  array('fr-ca' => 'vendredi', 'en-ca' => 'friday'),
  array('fr-ca' => 'samedi', 'en-ca' => 'saturday')
);
$yw['mois'] = array(
  1 => array('fr-ca' => 'janvier', 'en-ca' => 'january'),
  2 => array('fr-ca' => 'février', 'en-ca' => 'february'),
  3 => array('fr-ca' => 'mars', 'en-ca' => 'march'),
  4 => array('fr-ca' => 'avril', 'en-ca' => 'april'),
  5 => array('fr-ca' => 'mai', 'en-ca' => 'may'),
  6 => array('fr-ca' => 'juin', 'en-ca' => 'june'),
  7 => array('fr-ca' => 'juillet', 'en-ca' => 'july'),
  8 => array('fr-ca' => 'août', 'en-ca' => 'august'),
  9 => array('fr-ca' => 'septembre', 'en-ca' => 'september'),
  10 => array('fr-ca' => 'octobre', 'en-ca' => 'october'),
  11 => array('fr-ca' => 'novembre', 'en-ca' => 'november'),
  12 => array('fr-ca' => 'décembre', 'en-ca' => 'december')
);

$yw['launch'] = array(
    'choisissez' => array(
      'fr-ca' => 'Choisissez votre ville',
      'en-ca' => 'Choose your city'
    )
);


$yw['common'] = array(
    'titre_date' => array(
      'fr-ca' => '18 au 24 juin',
      'en-ca' => 'June 18th to 24th'
      ),
    'share' => array(
      'fr-ca' => 'Partager',
      'en-ca' => 'Share'
    ),
    'partage' => array(
      'titre' => array(
        'fr-ca' => 'Veuve Clicquot | YelloWeek 2018',
        'en-ca' => 'Veuve Clicquot | YelloWeek 2018'
      ),
      'description' => array(
        'fr-ca' => 'Cette année, Veuve Clicquot célèbre le 6e anniversaire de l’événement de champagne annuel le plus aimé du Canada : la semaine Yelloweek.',
        'en-ca' => 'Prepare yourself to live the most delicious week in the most iconic places of Montréal: a festive and gourmand series of “à la Clicquot” events.'
      ),
      'image' => 'img/gui/intro_bg-xs@2x.jpg'
    ),
    'intro' => array(
        'titre' => array(
          'fr-ca' => '<div class="first">Célébrez la</div><div class="second">#yelloweek</div><div class="first">avec nous</div>',
          'en-ca' => '<div class="first">dare to</div><br /><div class="second">#liveclicquot</div>'
        ),
        'contenu' => array(
          'fr-ca' => '<p>Cette année, Veuve Clicquot célèbre le 6e anniversaire de l’événement de champagne annuel le plus aimé du Canada : la semaine Yelloweek.</p><p>Du 18 au 24 juin prochain, la Maison vous invite à vivre une semaine festive et rocambolesque inspirée par le CARNAVAL CLICQUOT&nbsp;!</p>',
          'en-ca' => '<p>Prepare yourself to live the most delicious week in the most iconic places of Montréal: a festive and gourmand series of <span class="oblique">“à la Clicquot”</span> events.</p><p>5 unique experiences provided by the best bar, restaurant & clubs of the city. Take part of this unique week, and share your photos on instagram #YELLOWEEK</p>'
        ),
        'instagram' => array(
          'fr-ca' => 'join us now on<br />instagram',
          'en-ca' => 'join us now on<br />instagram'
        )
    ),
    'nouveau' => array(
        'titre' => array(
          'fr-ca' => 'Clicquot Pop-up',
          'en-ca' => 'Clicquot Pop-up'
        ),
        'chapo' => array(
          'fr-ca' => 'INTEGER POSUERE ERAT<br />A ANTE VENENATIS DAPIBUS<br />POSUERE VELIT ALIQUET.',
          'en-ca' => 'INTEGER POSUERE ERAT<br />A ANTE VENENATIS DAPIBUS<br />POSUERE VELIT ALIQUET.'
        ),
        'contenu' => array(
          'fr-ca' => '<p>Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p><p class="strong">Aenean lacinia bibendum nulla sed consectetur.</p>',
          'en-ca' => '<p>Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p><p class="strong">Aenean lacinia bibendum nulla sed consectetur.</p>'
        ),
        'btn-plus' => array(
          'fr-ca' => 'en savoir plus',
          'en-ca' => 'more details &amp; reservation'
        )
    ),
    'experiences' => array(
        'nav' => array(
          'fr-ca' => '<span class="strong">Expériences</span><br />YelloWeek 2018',
          'en-ca' => '2018 YelloWeek<br /><span class="strong">Experiences</span>'
        ),
        'titre' => array(
          'fr-ca' => 'Découvrez toutes les&nbsp;expériences',
          'en-ca' => 'Discover all YelloWeek’s&nbsp;Experiences'
        ),
        'liste' => array(
          
          'popup' => array(
              'titre' => array(
                  'fr-ca' => 'yellow<br />POP-UP',
                  'en-ca' => 'yellow<br />POP-UP'
              ),
              'shortname' => array(
                  'fr-ca' => 'pop-up',
                  'en-ca' => 'pop-up'
              ),
              'image' => 'content/experiences-popup-md.jpg',
              'colors' => array('#FFA616', '#FFA616'),
              'contenu' => array(
                  'fr-ca' => 'En français tempor incididunt ut lâboré et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat',
                  'en-ca' => 'In english tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat'
              ),
          ),
          
          'brunch' => array(
              'titre' => array(
                  'fr-ca' => 'yellow<br />BRUNCH',
                  'en-ca' => 'yellow<br />BRUNCH'
              ),
              'shortname' => array(
                  'fr-ca' => 'brunch',
                  'en-ca' => 'brunch'
              ),
              'image' => 'content/experiences-brunch-md.jpg',
              'colors' => array('#51CFA3', '#51CFA3'),
              'contenu' => array(
                  'fr-ca' => 'En français tempor incididunt ut lâboré et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat',
                  'en-ca' => 'In english tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat'
              ),
          ),
          'table' => array(
              'titre' => array(
                  'fr-ca' => 'yellow<br />TABLE',
                  'en-ca' => 'yellow<br />TABLE'
              ),
              'shortname' => array(
                  'fr-ca' => 'table',
                  'en-ca' => 'table'
              ),
              'image' => 'content/experiences-table-md.jpg',
              'colors' => array('#43B365', '#43B365'),
              'contenu' => array(
                  'fr-ca' => 'En français tempor incididunt ut lâboré et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat',
                  'en-ca' => 'In english tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat'
              ),
          ),
          'tasting' => array(
              'titre' => array(
                  'fr-ca' => 'yellow<br />TASTING',
                  'en-ca' => 'yellow<br />TASTING'
              ),
              'shortname' => array(
                  'fr-ca' => 'tasting',
                  'en-ca' => 'tasting'
              ),
              'image' => 'content/experiences-tasting-md.jpg',
              'colors' => array('#51C1CF', '#51C1CF'),
              'contenu' => array(
                  'fr-ca' => 'En français tempor incididunt ut lâboré et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat',
                  'en-ca' => 'In english tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat'
              ),
          ),
          'bytheglass' => array(
              'titre' => array(
                  'fr-ca' => 'yellow<br />BY THE GLASS',
                  'en-ca' => 'yellow<br />BY THE GLASS'
              ),
              'shortname' => array(
                  'fr-ca' => 'by the glass',
                  'en-ca' => 'by the glass'
              ),
              'image' => 'content/experiences-bytheglass-md.jpg',
              'colors' => array('#FABEC8', '#FABEC8'),
              'contenu' => array(
                  'fr-ca' => 'En français tempor incididunt ut lâboré et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat',
                  'en-ca' => 'In english tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat'
              ),
          ),
          'night' => array(
              'titre' => array(
                  'fr-ca' => 'yellow<br />NIGHT',
                  'en-ca' => 'yellow<br />NIGHT'
              ),
              'shortname' => array(
                  'fr-ca' => 'night',
                  'en-ca' => 'night'
              ),
              'image' => 'content/experiences-night-md.jpg',
              'colors' => array('#535353', '#F7F7F7'),
              'contenu' => array(
                  'fr-ca' => 'En français tempor incididunt ut lâboré et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat',
                  'en-ca' => 'In english tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat'
              ),
          )
        )
    ),
    'programme' => array(
        'nav' => array(
          'fr-ca' => '<span class="strong">le programme</span><br />complet',
          'en-ca' => 'the full<br /><span class="strong">program</span>'
        ),
        'titre' => array(
          'fr-ca' => 'le programme<br />complet',
          'en-ca' => 'the full<br />program'
        ),
        'btn-all' => array(
          'fr-ca' => 'toutes<br />les expériences',
          'en-ca' => 'view all<br />experiences'
        ),
        'btn-filtre' => array(
          'fr-ca' => 'filtrer le programme par...',
          'en-ca' => 'filter the program by...'
        ),
        'plusieurs' => array(
          'fr-ca' => ' lieux disponibles',
          'en-ca' => ' locations available',
        )
    ),
    'boutique' => array(
        'nav' => array(
          'fr-ca' => '<span class="strong">yellow</span><br />boutique',
          'en-ca' => 'the yellow<br /><span class="strong">boutique</span>'
        ),
        'titre' => array(
          'fr-ca' => 'yellow<br />boutique',
          'en-ca' => 'yellow<br />boutique'
        ),
        'soustitre' => array(
          'fr-ca' => 'Looking to buy a clicquot bag<br />or some yellow flutes?',
          'en-ca' => 'Looking to buy a clicquot bag<br />or some yellow flutes?'
        ),
        'contenu' => array(
          'fr-ca' => '<span class="strong">Rendez-vous at Alton Gray</span><p>Your premier retail destination for accessible luxury shopping, conceived to capture the essence and atmosphere of a luxury neighborhood boutique, and the convenience and category offerings of an upscale department store.</p><p class="info"><span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488</p>',
          'en-ca' => '<span class="strong">Rendez-vous at Alton Gray</span><p>Your premier retail destination for accessible luxury shopping, conceived to capture the essence and atmosphere of a luxury neighborhood boutique, and the convenience and category offerings of an upscale department store.</p><p class="info"><span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488</p>'
        ),
        'bouton' => array(
          'fr-ca' => 'découvrir le site internet',
          'en-ca' => 'discover the website'
        ),
        'lien' => array(
          'fr-ca' => 'http://www.google.fr',
          'en-ca' => 'http://www.google.com'
        )
    ),
    'hotel' => array(
        'nav' => array(
          'fr-ca' => '<span class="strong">yellow</span><br />hotel',
          'en-ca' => 'the yellow<br /><span class="strong">hotel</span>'
        ),
        'titre' => array(
          'fr-ca' => 'yellow<br />hotel',
          'en-ca' => 'yellow<br />hotel'
        ),
        'soustitre' => array(
          'fr-ca' => 'TREAT YOURSELF<br />AND STAY AT SOFITEL MONTRÉAL<br />GOLDEN MILE DURING YELLOWEEK!',
          'en-ca' => 'TREAT YOURSELF<br />AND STAY AT SOFITEL MONTRÉAL<br />GOLDEN MILE DURING YELLOWEEK!'
        ),
        'contenu' => array(
          'fr-ca' => '<span class="strong">Hotel package starting from $309.35<br />including breakfast and a bottle of Veuve Clicquot</span><p>During Yelloweek, savour a flute of Veuve Clicquot at Renoir bar and reserve your Yellow Brunch this Sunday June 24th 2018!</p>',
          'en-ca' => '<span class="strong">Hotel package starting from $309.35<br />including breakfast and a bottle of Veuve Clicquot</span><p>During Yelloweek, savour a flute of Veuve Clicquot at Renoir bar and reserve your Yellow Brunch this Sunday June 24th 2018!</p>'
        ),
        'produits' => array(
          array(
            'nom' => array(
              'fr-ca' => 'Veuve Clicquot Carte Jaune',
              'en-ca' => 'Veuve Clicquot Yellow Label'
            ),
            'prix' => array(
              'fr-ca' => 'Verre $29<br />Demi-bouteille $95<br />Bouteille $170',
              'en-ca' => 'Glass $29<br />Half-bottle $95<br />Bottle $170'
            )
          ),
          array(
            'nom' => array(
              'fr-ca' => 'Veuve Clicquot Rosé',
              'en-ca' => 'Veuve Clicquot Rosé'
            ),
            'prix' => array(
              'fr-ca' => 'Verre $32<br />Demi-bouteille $210<br />Bouteille $170',
              'en-ca' => 'Glass $32<br />Half-bottle $210<br />Bottle $170'
            )
          ),
          array(
            'nom' => array(
              'fr-ca' => 'Brunch',
              'en-ca' => 'Brunch'
            ),
            'prix' => array(
              'fr-ca' => '$56',
              'en-ca' => '$56'
            )
          )
        ),
        'mention' => array(
          'fr-ca' => 'Pairing menu available on request',
          'en-ca' => 'Pairing menu available on request'
        ),
        'infos' => array(
          'fr-ca' => '<span class="strong">Address</span> 1155 Sherbrooke St W, Montreal, QC H3A 2N3, Canada<br /><span class="strong">Phone</span> +1 514 285 9000',
          'en-ca' => '<span class="strong">Address</span> 1155 Sherbrooke St W, Montreal, QC H3A 2N3, Canada<br /><span class="strong">Phone</span> +1 514 285 9000'
        ),
        'bouton' => array(
          'fr-ca' => 'découvrir le site internet',
          'en-ca' => 'discover the website'
        ),
        'lien' => array(
          'fr-ca' => 'http://www.google.fr',
          'en-ca' => 'http://www.google.com'
        )
    ),
    'plan' => array(      
        'nav' => array(
          'fr-ca' => 'le<br /><span class="strong">plan</span>',
          'en-ca' => 'the<br /><span class="strong">city map</span>'
        ),
        'titre' => array(
          'fr-ca' => 'overview<br />city map',
          'en-ca' => 'overview<br />city map'
        ),
        'more_btn' => array(
          'fr-ca' => 'En savoir plus',
          'en-ca' => 'More details'
        ),
    )
  ); 

?>