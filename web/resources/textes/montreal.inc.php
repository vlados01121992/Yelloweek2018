<?php 

$yw = isset($yw) ? $yw : array();

$yw['montreal'] = array(
    'nom' => 'Montréal',
    'plan' => array(
        'center' => '45.5332664,-73.5945571'
    ),
    'boutique' => array(
        'nav' => array(
          'fr-ca' => 'yellow<br />boutique',
          'en-ca' => 'yellow<br />boutique'
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
          'fr-ca' => '<p><span class="strong">Rendez-vous at Alton Gray</span></p><p>Your premier retail destination for accessible luxury shopping, conceived to capture the essence and atmosphere of a luxury neighborhood boutique, and the convenience and category offerings of an upscale department store.</p><p class="info"><span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488</p>',
          'en-ca' => '<p><span class="strong">Rendez-vous at Alton Gray</span></p><p>Your premier retail destination for accessible luxury shopping, conceived to capture the essence and atmosphere of a luxury neighborhood boutique, and the convenience and category offerings of an upscale department store.</p><p class="info"><span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488</p>'
        ),
        'bouton' => array(
          'fr-ca' => 'découvrir le site internet',
          'en-ca' => 'discover the website'
        ),
        'lien' => array(
          'fr-ca' => 'http://www.google.fr',
          'en-ca' => 'http://www.google.com'
        )
    ),  // end 'boutique'
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
          'fr-ca' => '<p><span class="strong">Hotel package starting from $309.35<br />including breakfast and a bottle of Veuve Clicquot</span></p><p>During Yelloweek, savour a flute of Veuve Clicquot at Renoir bar and reserve your Yellow Brunch this Sunday June 24th 2018!</p>',
          'en-ca' => '<p><span class="strong">Hotel package starting from $309.35<br />including breakfast and a bottle of Veuve Clicquot</span></p><p>During Yelloweek, savour a flute of Veuve Clicquot at Renoir bar and reserve your Yellow Brunch this Sunday June 24th 2018!</p>'
        ),
        'produits' => array(
          array(
            'nom' => array(
              'fr-ca' => 'Veuve Clicquot<br />Carte Jaune',
              'en-ca' => 'Veuve Clicquot<br />Yellow Label'
            ),
            'prix' => array(
              'fr-ca' => 'Verre $29<br />Demi-bouteille $95<br />Bouteille $170',
              'en-ca' => 'Glass $29<br />Half-bottle $95<br />Bottle $170'
            )
          ),
          array(
            'nom' => array(
              'fr-ca' => 'Veuve Clicquot<br />Rosé',
              'en-ca' => 'Veuve Clicquot<br />Rosé'
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
    ), // end 'hotel'
    
    'locations' => array(
      'bota-bota' =>  array(
          'nom' => array(
            'fr-ca' => 'Bota Bota',
            'en-ca' => 'Bota Bota'
          ),
          'dates' => array(
            'fr-ca' => '18 au 24 juin',
            'en-ca' => 'June 18<span class="sup">th</span> to 24<span class="sup">th</span>'
          ),
          'bouton' => array(
            'fr-ca' => 'Réserver maintenant',
            'en-ca' => 'Reserve now'
          ),
          'lien' => array(
            'fr-ca' => 'http://www.google.fr',
            'en-ca' => 'http://www.google.com'
          ),
          'image' => array('img/content/bota-bota.jpg','img/content/bota-bota-xs.jpg'),
          'logo' => 'img/content/bota-bota-logo.png',
          'description' => array(
            'fr-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>En français justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>',
            'en-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>In English justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>'
          ),
          'contact' => array(
            'fr-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488',
            'en-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488'
          ),
          'gps' => '45.4997247,-73.5533017'
      ),
      'burgundy-lion' => array(
          'nom' => array(
            'fr-ca' => 'Burgundy Lion',
            'en-ca' => 'Burgundy Lion'
          ),
          'dates' => array(
            'fr-ca' => '18 au 24 juin',
            'en-ca' => 'June 18<span class="sup">th</span> to 24<span class="sup">th</span>'
          ),
          'bouton' => array(
            'fr-ca' => 'Réserver maintenant',
            'en-ca' => 'Reserve now'
          ),
          'lien' => array(
            'fr-ca' => 'http://www.google.fr',
            'en-ca' => 'http://www.google.com'
          ),
          'image' => array('img/content/bota-bota.jpg','img/content/bota-bota-xs.jpg'),
          'logo' => 'img/content/bota-bota-logo.png',
          'description' => array(
            'fr-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>En français justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>',
            'en-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>In English justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>'
          ),
          'contact' => array(
            'fr-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488',
            'en-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488'
          ),
          'gps' => '45.5258195,-73.5375437'
      ),
      'les-contrebandiers' => array(
          'nom' => array(
            'fr-ca' => 'Les Contrebandiers',
            'en-ca' => 'Les Contrebandiers'
          ),
          'dates' => array(
            'fr-ca' => '18 au 24 juin',
            'en-ca' => 'June 18<span class="sup">th</span> to 24<span class="sup">th</span>'
          ),
          'bouton' => array(
            'fr-ca' => 'Réserver maintenant',
            'en-ca' => 'Reserve now'
          ),
          'lien' => array(
            'fr-ca' => 'http://www.google.fr',
            'en-ca' => 'http://www.google.com'
          ),
          'image' => array('img/content/bota-bota.jpg','img/content/bota-bota-xs.jpg'),
          'logo' => 'img/content/bota-bota-logo.png',
          'description' => array(
            'fr-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>En français justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>',
            'en-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>In English justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>'
          ),
          'contact' => array(
            'fr-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488',
            'en-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488'
          ),
          'gps' => '45.5209137,-73.5223167'
      ),
      'scarlet-exclusive' => array(
  
          'nom' => array(
            'fr-ca' => 'Scarlet Exclusive',
            'en-ca' => 'Scarlet Exclusive'
          ),
          'dates' => array(
            'fr-ca' => '18 au 24 juin',
            'en-ca' => 'June 18<span class="sup">th</span> to 24<span class="sup">th</span>'
          ),
          'bouton' => array(
            'fr-ca' => 'Réserver maintenant',
            'en-ca' => 'Reserve now'
          ),
          'lien' => array(
            'fr-ca' => 'http://www.google.fr',
            'en-ca' => 'http://www.google.com'
          ),
          'image' => array('img/content/bota-bota.jpg','img/content/bota-bota-xs.jpg'),
          'logo' => 'img/content/bota-bota-logo.png',
          'description' => array(
            'fr-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>En français justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>',
            'en-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>In English justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>'
          ),
          'contact' => array(
            'fr-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488',
            'en-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488'
          ),
          'gps' => '45.57021,-73.8920385'
      ),
      'alton-gray' => array(
         'nom' => array(
            'fr-ca' => 'Alton Gray',
            'en-ca' => 'Alton Gray'
          ),
          'dates' => array(
            'fr-ca' => '18 au 24 juin',
            'en-ca' => 'June 18<span class="sup">th</span> to 24<span class="sup">th</span>'
          ),
          'bouton' => array(
            'fr-ca' => 'Réserver maintenant',
            'en-ca' => 'Reserve now'
          ),
          'lien' => array(
            'fr-ca' => 'http://www.google.fr',
            'en-ca' => 'http://www.google.com'
          ),
          'image' => array('img/content/bota-bota.jpg','img/content/bota-bota-xs.jpg'),
          'logo' => 'img/content/bota-bota-logo.png',
          'description' => array(
            'fr-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>En français justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>',
            'en-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>In English justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>'
          ),
          'contact' => array(
            'fr-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488',
            'en-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488'
          ),
          'gps' => '45.5715312,-73.7557763'
      ),
      'l-atelier-de-joel-robuchon' => array(
          'nom' => array(
            'fr-ca' => 'L’Atelier de Joël Robuchon',
            'en-ca' => 'L’Atelier de Joël Robuchon'
          ),
          'dates' => array(
            'fr-ca' => '18 au 24 juin',
            'en-ca' => 'June 18<span class="sup">th</span> to 24<span class="sup">th</span>'
          ),
          'bouton' => array(
            'fr-ca' => 'Réserver maintenant',
            'en-ca' => 'Reserve now'
          ),
          'lien' => array(
            'fr-ca' => 'http://www.google.fr',
            'en-ca' => 'http://www.google.com'
          ),
          'image' => array('img/content/l-atelier-de-joel-robuchon.jpg','img/content/l-atelier-de-joel-robuchon-xs.jpg'),
          'logo' => 'img/content/l-atelier-de-joel-robuchon-logo.png',
          'description' => array(
            'fr-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>En français justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p><p><h4>MENU</h4><p><span class="strong">Veuve Clicquot « carte Jaune »</span><br />Royale crémeuse de foie gras voilée d’une émulsion parmesane au Maury « vieilles vignes »</p><p><span class="strong">Veuve Clicquot La Grande Dame 2006</span><br />La Langoustine en papillote croustillante au basilic</p><p><span class="strong">Veuve Clicquot Vintage 2008</span><br />La Caille caramélisée au foie gras de canard avec pomme purée</p><p><span class="strong">Veuve Clicquot Rosé Vintage 2004</span><br />Le Cerf de Boileau et foie gras en une interprétation « Rossini », élixirs aux canneberges</p><p><span class="strong">Veuve Clicquot Demi-Sec</span><br />La Bulle de sucre soufflé au citron-yuzu, sorbet à la coriandre</p><p><span class="oblique">220$ par personne - 4 services avec Accord</span></p>',
            'en-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>In English justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p><p><h4>MENU</h4><p><span class="strong">Veuve Clicquot « carte Jaune »</span><br />Royale crémeuse de foie gras voilée d’une émulsion parmesane au Maury « vieilles vignes »</p><p><span class="strong">Veuve Clicquot La Grande Dame 2006</span><br />La Langoustine en papillote croustillante au basilic</p><p><span class="strong">Veuve Clicquot Vintage 2008</span><br />La Caille caramélisée au foie gras de canard avec pomme purée</p><p><span class="strong">Veuve Clicquot Rosé Vintage 2004</span><br />Le Cerf de Boileau et foie gras en une interprétation « Rossini », élixirs aux canneberges</p><p><span class="strong">Veuve Clicquot Demi-Sec</span><br />La Bulle de sucre soufflé au citron-yuzu, sorbet à la coriandre</p><p><span class="oblique">220$ par personne - 4 services avec Accord</span></p>'
          ),
          'contact' => array(
            'fr-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488',
            'en-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488'
          ),
          'gps' => '45.5053947,-73.5279687'
      ),
      'flyjin' => array(
          'nom' => array(
            'fr-ca' => 'Flyjin',
            'en-ca' => 'Flyjin'
          ),
          'dates' => array(
            'fr-ca' => '18 au 24 juin',
            'en-ca' => 'June 18<span class="sup">th</span> to 24<span class="sup">th</span>'
          ),
          'bouton' => array(
            'fr-ca' => 'Réserver maintenant',
            'en-ca' => 'Reserve now'
          ),
          'lien' => array(
            'fr-ca' => 'http://www.google.fr',
            'en-ca' => 'http://www.google.com'
          ),
          'image' => array('img/content/bota-bota.jpg','img/content/bota-bota-xs.jpg'),
          'logo' => 'img/content/bota-bota-logo.png',
          'description' => array(
            'fr-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>En français justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>',
            'en-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>In English justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>'
          ),
          'contact' => array(
            'fr-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488',
            'en-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488'
          ),
          'gps' => '45.5015509,-73.5588749'
      ),
      'joverse' => array(
          'nom' => array(
            'fr-ca' => 'Joverse',
            'en-ca' => 'Joverse'
          ),
          'dates' => array(
            'fr-ca' => '18 au 24 juin',
            'en-ca' => 'June 18<span class="sup">th</span> to 24<span class="sup">th</span>'
          ),
          'bouton' => array(
            'fr-ca' => 'Réserver maintenant',
            'en-ca' => 'Reserve now'
          ),
          'lien' => array(
            'fr-ca' => 'http://www.google.fr',
            'en-ca' => 'http://www.google.com'
          ),
          'image' => array('img/content/bota-bota.jpg','img/content/bota-bota-xs.jpg'),
          'logo' => 'img/content/bota-bota-logo.png',
          'description' => array(
            'fr-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>En français justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>',
            'en-ca' => '<p><span class="strong">For each glass of Veuve Clicquot, you will be offered a bouchée created by the chef!</span></p><p>In English justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, consectetur ac, vestibulum at eros. Praesent commodo.</p>'
          ),
          'contact' => array(
            'fr-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488',
            'en-ca' => '<span class="strong">Address</span> 3035 Boul Le Carrefour, Laval, QC<br /><span class="strong">Phone</span> +1 450 934 9488'
          ),
          'gps' => '45.5055519,-73.5590518'
      )
      
    ), // end 'locations'
    
    'programme' => array(
      // ! [ 18 JUIN ]
      '2018-06-18' => array(
          // !   •  BRUNCH
          array(
                'experience' => 'brunch',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'burgundy-lion'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'les-contrebandiers'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'scarlet-exclusive'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'alton-gray'
          ),
          
          // !   •  TASTING
          array(
                'experience' => 'tasting',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  TABLE
          array(
                'experience' => 'table',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  BY THE GLASS
          array(
                'experience' => 'bytheglass',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'bytheglass',
                'location' => 'burgundy-lion'
          ),
          
          // !   •  POP-UP
          array(
                'experience' => 'popup',
                'location' => 'flyjin'
          ),
          
          // !   •  NIGHT
          array(
                'experience' => 'night',
                'location' => 'joverse'
          )
      ),
      // ! [ 19 JUIN ]
      '2018-06-19' => array(
          // !   •  BRUNCH
          array(
                'experience' => 'brunch',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'burgundy-lion'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'les-contrebandiers'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'scarlet-exclusive'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'alton-gray'
          ),
          
          // !   •  TASTING
          array(
                'experience' => 'tasting',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  TABLE
          array(
                'experience' => 'table',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  BY THE GLASS
          array(
                'experience' => 'bytheglass',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'bytheglass',
                'location' => 'burgundy-lion'
          ),
          
          // !   •  POP-UP
          array(
                'experience' => 'popup',
                'location' => 'flyjin'
          ),
          
          // !   •  NIGHT
          array(
                'experience' => 'night',
                'location' => 'joverse'
          )
      ),
       // ! [ 20 JUIN ]
      '2018-06-20' => array(
          
          // !   •  BRUNCH
          array(
                'experience' => 'brunch',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'burgundy-lion'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'les-contrebandiers'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'scarlet-exclusive'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'alton-gray'
          ),
          
          // !   •  TASTING
          array(
                'experience' => 'tasting',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  TABLE
          array(
                'experience' => 'table',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  BY THE GLASS
          array(
                'experience' => 'bytheglass',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'bytheglass',
                'location' => 'burgundy-lion'
          ),
          
          // !   •  POP-UP
          array(
                'experience' => 'popup',
                'location' => 'flyjin'
          ),
          
          // !   •  NIGHT
          array(
                'experience' => 'night',
                'location' => 'joverse'
          )
      ),
      // ! [ 21 JUIN ]
      '2018-06-21' => array(
          
          // !   •  BRUNCH
          array(
                'experience' => 'brunch',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'burgundy-lion'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'les-contrebandiers'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'scarlet-exclusive'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'alton-gray'
          ),
          
          // !   •  TASTING
          array(
                'experience' => 'tasting',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  TABLE
          array(
                'experience' => 'table',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  BY THE GLASS
          array(
                'experience' => 'bytheglass',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'bytheglass',
                'location' => 'burgundy-lion'
          ),
          
          // !   •  POP-UP
          array(
                'experience' => 'popup',
                'location' => 'flyjin'
          ),
          
          // !   •  NIGHT
          array(
                'experience' => 'night',
                'location' => 'joverse'
          )
      ),
      // ! [ 22 JUIN ]
      '2018-06-22' => array(
          
          // !   •  BRUNCH
          array(
                'experience' => 'brunch',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'burgundy-lion'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'les-contrebandiers'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'scarlet-exclusive'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'alton-gray'
          ),
          
          // !   •  TASTING
          array(
                'experience' => 'tasting',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  TABLE
          array(
                'experience' => 'table',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  BY THE GLASS
          array(
                'experience' => 'bytheglass',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'bytheglass',
                'location' => 'burgundy-lion'
          ),
          
          // !   •  POP-UP
          array(
                'experience' => 'popup',
                'location' => 'flyjin'
          ),
          
          // !   •  NIGHT
          array(
                'experience' => 'night',
                'location' => 'joverse'
          )
      ),
      // ! [ 23 JUIN ]
      '2018-06-23' => array(
          
          // !   •  BRUNCH
          array(
                'experience' => 'brunch',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'burgundy-lion'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'les-contrebandiers'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'scarlet-exclusive'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'alton-gray'
          ),
          
          // !   •  TASTING
          array(
                'experience' => 'tasting',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  TABLE
          array(
                'experience' => 'table',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  BY THE GLASS
          array(
                'experience' => 'bytheglass',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'bytheglass',
                'location' => 'burgundy-lion'
          ),
          
          // !   •  POP-UP
          array(
                'experience' => 'popup',
                'location' => 'flyjin'
          ),
          
          // !   •  NIGHT
          array(
                'experience' => 'night',
                'location' => 'joverse'
          )
      ),
      // ! [ 24 JUIN ]
      '2018-06-24' => array(
          
          // !   •  BRUNCH
          array(
                'experience' => 'brunch',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'burgundy-lion'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'les-contrebandiers'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'scarlet-exclusive'
          ),
          array(
                'experience' => 'brunch',
                'location' => 'alton-gray'
          ),
          
          // !   •  TASTING
          array(
                'experience' => 'tasting',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  TABLE
          array(
                'experience' => 'table',
                'location' => 'l-atelier-de-joel-robuchon'                
          ),
          
          // !   •  BY THE GLASS
          array(
                'experience' => 'bytheglass',
                'location' => 'bota-bota'
          ),
          array(
                'experience' => 'bytheglass',
                'location' => 'burgundy-lion'
          ),
          
          // !   •  POP-UP
          array(
                'experience' => 'popup',
                'location' => 'flyjin'
          ),
          
          // !   •  NIGHT
          array(
                'experience' => 'night',
                'location' => 'joverse'
          )
      ),
      
    ), // end 'programme'
  );


?>