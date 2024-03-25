<div class="av_location_stack flex_column av_one_full flex_column_div av-zero-column-padding">
  <div class="stack-wrapper">
    <div class="stack" data-stack=""><a class="stack__zoom no-scroll" href="#map-modal-travel" data-map-modal-open="">
        <div class="c-icon-default">
          <svg class="c-icon">
            <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#zoom"></use>
          </svg>
          <div class="u-invisible"><?php _e( 'Vergrößern', 'enfold_child' ); ?></div>
        </div></a><a class="stack__zoom" href="#map-modal-around" data-map-modal-open="">
        <div class="c-icon-default">
          <svg class="c-icon">
            <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#zoom"></use>
          </svg>
          <div class="u-invisible"><?php _e( 'Vergrößern', 'enfold_child' ); ?></div>
        </div></a><a class="stack__zoom no-scroll" href="#map-modal-campusmile" data-map-modal-open="">
        <div class="c-icon-default">
          <svg class="c-icon">
            <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#zoom"></use>
          </svg>
          <div class="u-invisible"><?php _e( 'Vergrößern', 'enfold_child' ); ?></div>
        </div></a>
      <div class="stack__items">
        <div class="stack__item stack__item--one" data-stack-item="" id="stack-level-1"><img class="stack__img" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/preview-travel.png" alt="<?php _e( 'Die Erreichbarkeit', 'enfold_child' ); ?>"><a class="stack__img-zoom" href="#map-modal-travel" data-map-modal-open=""></a></div>
        <div class="stack__item stack__item--two" data-stack-item="" id="stack-level-2"><img class="stack__img" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/preview-around.png" alt="<?php _e( 'Die Umgebung', 'enfold_child' ); ?>"><a class="stack__img-zoom" href="#map-modal-around" data-map-modal-open=""></a></div>
        <div class="stack__item stack__item--three" data-stack-item="" id="stack-level-3"><img class="stack__img" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/preview-campusmile.png" alt="<?php _e( 'Die „Campus-Meile“', 'enfold_child' ); ?>"><a class="stack__img-zoom" href="#map-modal-campusmile" data-map-modal-open=""></a></div>
      </div>
      <div class="stack__nav" data-stack-nav=""><a class="stack__nav-item stack__nav-item--one no-scroll" href="#stack-level-1" data-stack-nav-item="">
          <svg class="c-icon">
            <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#right-chevron"></use>
          </svg><?php _e( 'Die Erreichbarkeit', 'enfold_child' ); ?></a><a class="stack__nav-item stack__nav-item--two no-scroll" href="#stack-level-2" data-stack-nav-item="">
          <svg class="c-icon">
            <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#right-chevron"></use>
          </svg><?php _e( 'Die Umgebung', 'enfold_child' ); ?></a><a class="stack__nav-item stack__nav-item--three no-scroll" href="#stack-level-3" data-stack-nav-item="">
          <svg class="c-icon">
            <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#right-chevron"></use>
          </svg><?php _e( 'Die „Campus-Meile“', 'enfold_child' ); ?></a></div>
    </div>
    <div class="c-modals" data-map-modal-wrapper="">
      <div class="c-modal" id="map-modal-travel" data-map-modal="travel">
        <div class="c-modal__map" data-map="travel"></div>
        <div class="nord"><img src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/nord.png"></div>
        <div id="legendeTravel" class="legend">
	        <h2><?php _e( 'Die Erreichbarkeit', 'enfold_child' ); ?><a onclick="jQuery('.legend').toggleClass('closed');"></a></h2>
	        <p><img class="ubahn flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/ubahn1-small.png">&nbsp;&nbsp;<?php _e( 'Nächstgelegene U-Bahnhaltestelle (700 m): Glauburgstraße + Dt. Nationalbibliothek, Line U5', 'enfold_child' ); ?></p>
	        <p><img class="bus flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/bus1-small.png">&nbsp;&nbsp;<?php _e( 'Nächstgelegene Bushaltestelle (30 m): Nibelungenplatz, Busline 32', 'enfold_child' ); ?><br></p>
	        <p><img class="tram flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/tram1-small.png">&nbsp;&nbsp;<?php _e( 'Nächstgelegene Straßenbahnhaltestelle (40 m): Nibelungenplatz + Rohrbachstraße, Linien 12 + 18', 'enfold_child' ); ?></p>
	        <p><img class="flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/ubahn.png">&nbsp;&nbsp;<?php _e( 'U-Bahnstation', 'enfold_child' ); ?></p>
			<p><img class="flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/bus.png">&nbsp;&nbsp;<?php _e( 'Bushaltestelle', 'enfold_child' ); ?></p>
	        <p><img class="flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/tram.png">&nbsp;&nbsp;<?php _e( 'Straßenbahnstation', 'enfold_child' ); ?></p>
	        <p><img class="flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/sbahn.png">&nbsp;&nbsp;<?php _e( 'S-Bahnstation', 'enfold_child' ); ?></p>
	        <p><img class="flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/taxi.png">&nbsp;&nbsp;<?php _e( 'Taxistand vor dem Gebäude, Nibelungenplatz', 'enfold_child' ); ?></p>
	        <p><img class="flLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/a66-small.png">&nbsp;&nbsp;<?php _e( 'Autobahn A66 zum Flughafen (2 Minuten)', 'enfold_child' ); ?></p>
	        <p><span><?php _e( 'PKW', 'enfold_child' ); ?></span> – <?php _e( 'In wenigen Fahrminuten sind die Autobahnen A66 & A661 zu erreichen.', 'enfold_child' ); ?></p>
	        <p><?php _e( 'Alle 3-4 Min. fährt ein Bus oder eine Straßenbahn vom Nibelungenplatz zur Stadtmitte. Alle U-Bahnen fahren über Konstablerwache.', 'enfold_child' ); ?> <br><?php _e( 'Von den Stationen Konstablerwache oder Hauptwache fahren im Minutentakt zahlreiche S- und U-Bahnen zum Hauptbahnhof.', 'enfold_child' ); ?></p>
	        <p><br><?php _e( 'Fahren Sie mit der Maus über die angezeigten Icons auf der Karte.', 'enfold_child' ); ?>
		       <br><?php _e( 'Hier werden Ihnen weitere Informationen angezeigt.', 'enfold_child' ); ?>
		    </p>
			<table border="0" class="print">
				<tr>
					<td><a class="blue" target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/CityGate_Karte_Erreichbarkeit.pdf">PDF drucken (Deutsch)</a></td>
					<td><a class="blue" target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/CityGate_Karte_Erreichbarkeit-en.pdf">Print PDF (English)</a></td>
				</tr>
			</table>
        </div>

        <a class="c-modal__close" href="javascript:void(0);" data-map-modal-close>
          <div class="c-icon-default c-icon-default--large">
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#close"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Schließen', 'enfold_child' ); ?></div>
          </div></a>
        <div class="c-modal__map-zoom c-zoom-control"><a class="c-zoom-control__control c-zoom-control__control--in" href="#" data-map-zoom-in>
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#plus"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Zoom in', 'enfold_child' ); ?></div></a><a class="c-zoom-control__control c-zoom-control__control--out" href="#" data-map-zoom-out>
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#minus"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Zoom out', 'enfold_child' ); ?></div></a></div>

      </div>
      <div class="c-modal" id="map-modal-around" data-map-modal="around">
        <div class="c-modal__map" data-map="around"></div>
        <div class="nord"><img src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/nord.png"></div>
        <div id="legendeAround" class="legend">
	        <h2><?php _e( 'Die Umgebung', 'enfold_child' ); ?><a onclick="jQuery('.legend').toggleClass('closed');"></a></h2>
	        <table border="0" cellpadding="0" cellspacing="0">
		        <tr>
			        <td><img class="circle" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/circle-legende.png"></td>
			        <td valign="top" align="left">
				        <p><span><?php _e( 'Essen und Trinken innerhalb von 100 – 500m', 'enfold_child' ); ?></span></p>
				        <p><img class="flLeft gastro" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/gastro-res.png">&nbsp;&nbsp;<?php _e( 'Restaurant', 'enfold_child' ); ?></p>
				        <p><img class="flLeft gastro" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/gastro-imbiss.png">&nbsp;&nbsp;<?php _e( 'Imbiss', 'enfold_child' ); ?></p>
				        <p><img class="flLeft gastro" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/gastro-cafe.png">&nbsp;&nbsp;<?php _e( 'Café', 'enfold_child' ); ?></p>
						<p><img class="flLeft gastro" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/gastro-bar.png">&nbsp;&nbsp;<?php _e( 'Bar/Kneipe', 'enfold_child' ); ?></p>
						<p><img class="flLeft gastro" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/markers/gastro-shopping.png">&nbsp;&nbsp;<?php _e( 'Supermarkt', 'enfold_child' ); ?></p>
				    </td>
		        </tr>
	        </table>
			<p><?php _e( 'Fahren Sie mit der Maus über die angezeigten Icons auf der Karte.', 'enfold_child' ); ?>
						<br><?php _e( 'Hier werden Ihnen weitere Informationen angezeigt.', 'enfold_child' ); ?>
		    </p>
		    <table border="0" class="print">
				<tr>
					<td><a class="orange" target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/CityGate_Karte_Umgebung.pdf">PDF drucken (Deutsch)</a></td>
					<td><a class="orange" target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/CityGate_Karte_Umgebung-en.pdf">Print PDF (English)</a></td>
				</tr>
			</table>


        </div>

        <a class="c-modal__close" href="javascript:void(0);" data-map-modal-close>
          <div class="c-icon-default c-icon-default--large">
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#close"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Schließen', 'enfold_child' ); ?></div>
          </div></a>
        <div class="c-modal__map-zoom c-zoom-control"><a class="c-zoom-control__control c-zoom-control__control--in" href="#" data-map-zoom-in>
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#plus"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Zoom in', 'enfold_child' ); ?></div></a><a class="c-zoom-control__control c-zoom-control__control--out" href="#" data-map-zoom-out>
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#minus"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Zoom out', 'enfold_child' ); ?></div></a></div>
      </div>
      <div class="c-modal" id="map-modal-campusmile" data-map-modal="campusmile">
        <div class="c-modal__map" data-map="campusmile"></div>
        <div class="nord"><img src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/nord.png"></div>
        <div id="legendeCampus" class="legend">
	        <h2><?php _e( 'Die "Campus-Meile"', 'enfold_child' ); ?><a onclick="jQuery('.legend').toggleClass('closed');"></a></h2>
	        <p><span><?php _e( 'Von der Campus-Meile zur Stadt der Wissenschaft, Forschung, Innovation und Integration', 'enfold_child' ); ?></span></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/campus1-small.png">&nbsp;&nbsp;<?php _e( 'CITY GATE / Frankfurt University of Applied Sciences (UAS)', 'enfold_child' ); ?></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/campus2-small.png">&nbsp;&nbsp;<?php _e( 'Campus Frankfurt University of Applied Sciences (UAS)', 'enfold_child' ); ?></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/campus3-small.png">&nbsp;&nbsp;<?php _e( 'Frankfurt School of Finance & Management', 'enfold_child' ); ?></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/campus4-small.png">&nbsp;&nbsp;<?php _e( 'Frankfurt School Dorms', 'enfold_child' ); ?></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/campus5-small.png">&nbsp;&nbsp;<?php _e( 'The Flag Campusmeile, Student Apartments', 'enfold_child' ); ?></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/campus6-small.png">&nbsp;&nbsp;<?php _e( 'The Flag, Student Apartments', 'enfold_child' ); ?></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/campus7-small.png">&nbsp;&nbsp;<?php _e( 'Deutsches Institut f. int. Pädagogische Forschung', 'enfold_child' ); ?></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/campus8-small.png">&nbsp;&nbsp;<?php _e( 'Goethe Universität Frankfurt (Campus Westend)', 'enfold_child' ); ?></p>
	        <p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/bibliothek-small.png">&nbsp;&nbsp;<?php _e( 'Deutsche Nationalbilbliothek', 'enfold_child' ); ?></p>
	        <!--p><img class="flLeft campus" src="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/layout/merz-small.png">&nbsp;&nbsp;Merz Pharma GmbH & Co. KGaA - Headquarters</p-->
	        <p><br><?php _e( 'Fahren Sie mit der Maus über die angezeigten Icons auf der Karte.', 'enfold_child' ); ?>
		       <br><?php _e( 'Hier werden Ihnen weitere Informationen angezeigt.', 'enfold_child' ); ?>
		    </p>
		    <table border="0" class="print">
				<tr>
					<td><a class="green" target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/CityGate_Karte_Campus.pdf">PDF drucken (Deutsch)</a></td>
					<td><a class="green" target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/CityGate_Karte_Campus-en.pdf">Print PDF (English)</a></td>
				</tr>
			</table>
        </div>

        <a class="c-modal__close" href="javascript:void(0);" data-map-modal-close>
          <div class="c-icon-default c-icon-default--large">
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#close"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Schließen', 'enfold_child' ); ?></div>
          </div></a>
        <div class="c-modal__map-zoom c-zoom-control"><a class="c-zoom-control__control c-zoom-control__control--in" href="#" data-map-zoom-in>
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#plus"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Zoom in', 'enfold_child' ); ?></div></a><a class="c-zoom-control__control c-zoom-control__control--out" href="#" data-map-zoom-out>
            <svg class="c-icon">
              <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/images/svg/sprite.svg#minus"></use>
            </svg>
            <div class="u-invisible"><?php _e( 'Zoom out', 'enfold_child' ); ?></div></a></div>
      </div>
    </div>
  </div>
</div>

<script>
    window.MAP_ASSETS_BASE = '<?php echo get_stylesheet_directory_uri(); ?>/citygate-animations/';

    window.MAP_LOCATIONS = {

nibelungenallee: [{
  name: '<?php _e( 'Campus-Meile', 'enfold_child' ); ?>',
  coords: {
    lat: 50.131253,
    lng: 8.687117
  }
}],

adickesallee: [{
  name: '<?php _e( 'Campus-Meile', 'enfold_child' ); ?>',
  coords: {
    lat: 50.131992,
    lng: 8.679159
  }
}],

miquelallee: [{
  name: '<?php _e( 'Campus-Meile', 'enfold_child' ); ?>',
  coords: {
    lat: 50.131643,
    lng: 8.669279
  }
}],

arrowA66: [{
  name: '<?php _e( 'Zu den Autobahnen', 'enfold_child' ); ?>',
  coords: {
    lat: 50.131361,
    lng: 8.662252
  }
}],

taxi: [{
  name: '<?php _e( 'Taxi-Stand Nibelungenplatz', 'enfold_child' ); ?>',
  coords: {
    lat: 50.128496,
    lng: 8.691983
  }
}],

undergroundNearby: [{
  name: '<?php _e( 'U5 / Deutsche Nationalbibliothek', 'enfold_child' ); ?>',
  coords: {
    lat: 50.131033,
    lng: 8.683963
  }
}, {
  name: '<?php _e( 'U5 / Glauburgstraße', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'U-Bahnhaltestelle „Glauburgstraße“ in ca. 9 Gehminuten', 'enfold_child' ); ?></p><p><?php _e( 'Mit der U-Bahn fährt man 6 Minuten, Taktung alle 7-8 Min.', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.126769,
    lng: 8.685508
  }
}],

gastroResTravel: [{
  name: '<?php _e( 'Mensa Goethe Universität Frankfurt', 'enfold_child' ); ?>',
  coords: {
    lat: 50.127175,
    lng: 8.666923
  }
}, {
  name: '<?php _e( 'essWERK/ Mensa University of Applied Sciences (UAS)', 'enfold_child' ); ?>',
  coords: {
    lat: 50.130116,
    lng: 8.693307
  }
}, {
  name: '<?php _e( 'Café Kostbar / Mensacafé und Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Im Gebäude CITY GATE', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.1290807,
    lng: 8.6915482
  }
}],

underground: [{
  name: '<?php _e( 'U5 / Musterschule', 'enfold_child' ); ?>',
  coords: {
    lat: 50.121830,
    lng: 8.686194
  }
}, {
  name: '<?php _e( 'U4 / Merianplatz', 'enfold_child' ); ?>',
  coords: {
    lat: 50.111817,
    lng: 8.668246
  }
}, {
  name: '<?php _e( 'U4 / Höhenstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.123041,
    lng: 8.701494
  }
}, {
  name: '<?php _e( 'U4 / Willy-Brandt-Platz', 'enfold_child' ); ?>',
  coords: {
    lat: 50.109199,
    lng: 8.674800
  }
}, {
  name: '<?php _e( 'U4, U5, U6, U7 / Konstablerwache', 'enfold_child' ); ?>',
  coords: {
    lat: 50.114527,
    lng: 8.687977
  }
}, {
  name: '<?php _e( 'U6, U7 / Zoo', 'enfold_child' ); ?>',
  coords: {
    lat: 50.115377,
    lng: 8.698854
  }
}, {
  name: '<?php _e( 'U6, U7 / Alte Oper', 'enfold_child' ); ?>',
  coords: {
    lat: 50.115666,
    lng: 8.669479
  }
}, {
  name: '<?php _e( 'U5 / Hauptfriedhof', 'enfold_child' ); ?>',
  coords: {
    lat: 50.136260,
    lng: 8.684392
  }
}, {
  name: '<?php _e( 'U5 / Marbachweg/Sozialzentrum', 'enfold_child' ); ?>',
  coords: {
    lat: 50.142091,
    lng: 8.683984
  }
}, {
  name: '<?php _e( 'U5 / Gießener Straße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.143617,
    lng: 8.691022
  }
}, {
  name: '<?php _e( 'U5 / Theobald-Ziegler-Straße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.147935,
    lng: 8.690078
  }
}, {
  name: '<?php _e( 'U5 / Ronneburgstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.150658,
    lng: 8.688598
  }
}, {
  name: '<?php _e( 'U1, U2, U3 / Dornbusch', 'enfold_child' ); ?>',
  coords: {
    lat: 50.138639,
    lng: 8.670423
  }
}, {
  name: '<?php _e( 'U1, U2, U3 / Fritz-Tarnow-Straße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.142517,
    lng: 8.668814
  }
}, {
  name: '<?php _e( 'U1, U2, U3 / Hügelstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.147990,
    lng: 8.666282
  }
}, {
  name: '<?php _e( 'U1, U2, U3 / Holzhausenstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.126783,
    lng: 8.673770
  }
}, {
  name: '<?php _e( 'U1, U2, U3 / Grüneburgweg', 'enfold_child' ); ?>',
  coords: {
    lat: 50.121844,
    lng: 8.675723
  }
}, {
  name: '<?php _e( 'U1, U2, U3 / Eschenheimer Tor', 'enfold_child' ); ?>',
  coords: {
    lat: 50.117400,
    lng: 8.679264
  }
}, {
  name: '<?php _e( 'U1, U2, U3, U6, U7 /Hauptwache', 'enfold_child' ); ?>',
  coords: {
    lat: 50.113699,
    lng: 8.679500
  }
}, {
  name: '<?php _e( 'U4 / Hauptbahnhof', 'enfold_child' ); ?>',
  coords: {
    lat: 50.107148,
    lng: 8.663664
  }
}, {
  name: '<?php _e( 'U4 / Festhalle / Messe', 'enfold_child' ); ?>',
  coords: {
    lat: 50.112034,
    lng: 8.655124
  }
}, {
  name: '<?php _e( 'U6 / Ostbahnhof', 'enfold_child' ); ?>',
  coords: {
    lat: 50.112460,
    lng: 8.707094
  }
}, {
  name: '<?php _e( 'U7 / Habsburgerallee', 'enfold_child' ); ?>',
  coords: {
    lat: 50.117331,
    lng: 8.708382
  }
}, {
  name: '<?php _e( 'U7 / Parlamentsplatz', 'enfold_child' ); ?>',
  coords: {
    lat: 50.120441,
    lng: 8.713918
  }
}, {
  name: '<?php _e( 'U7 / Eissporthalle', 'enfold_child' ); ?>',
  coords: {
    lat: 50.123687,
    lng: 8.717480
  }
}, {
  name: '<?php _e( 'U4 / Merianplatz', 'enfold_child' ); ?>',
  coords: {
    lat: 50.120220,
    lng: 8.695593
  }
}, {
  name: '<?php _e( 'U4 / Bornheim Mitte', 'enfold_child' ); ?>',
  coords: {
    lat: 50.125586,
    lng: 8.706880
  }
}, {
  name: '<?php _e( 'U4 / Bornheim Seckbacher Landstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.134472,
    lng: 8.712029
  }
}],

busNearby: [{
  name: '<?php _e( 'Linie 32 / Nibelungenplatz/ University of Applied Sciences (UAS)', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Bushaltestelle „Nibelungenplatz/UAS“ direkt vor dem Objekt', 'enfold_child' ); ?></p><p><?php _e( 'Mit dem Bus fährt man 8 Min. vom Nibelungenplatz zur Konstablerwache (4 Haltestellen); Taktung alle 10 Min.', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.1291633,
    lng: 8.6928035
  }
}],

bus: [{
  name: '<?php _e( 'Linie 32 / Deutsche Nationalbibliothek', 'enfold_child' ); ?>',
  coords: {
    lat: 50.131916,
    lng: 8.683510
  }
}, {
  name: '<?php _e( 'Linie 32 / Bürgerhospital', 'enfold_child' ); ?>',
  coords: {
    lat: 50.130293,
    lng: 8.688467
  }
}, {
  name: '<?php _e( 'Linie 32 / Günthersburgallee', 'enfold_child' ); ?>',
  coords: {
    lat: 50.126676,
    lng: 8.697763
  }
}],

tramNearby: [{
  name: '<?php _e( 'Linie 18 / Nibelungenplatz/Frankfurt University of Applied Sciences (UAS)', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Tram-Haltestelle „Nibelungenplatz/ UAS“ in ca. 3 Gehminuten', 'enfold_child' ); ?></p><p><?php _e( 'Mit der Straßenbahn fährt man 8 Min. vom Nibelungenplatz zur Konstablerwache (4 Haltestellen); Taktung alle 10 Min.', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.129816,
    lng: 8.693898
  }
}],

tram: [{
  name: '<?php _e( 'Linie 12 / Rothschildallee', 'enfold_child' ); ?>',
  coords: {
    lat: 50.128083,
    lng: 8.695695
  }
}, {
  name: '<?php _e( 'Linie 12, Linie 18 / Rohrbachstraße/Friedberger Landstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.127120,
    lng: 8.692181
  }
}, {
  name: '<?php _e( 'Linie 12 / Rohrbachstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.128901,
    lng: 8.700378
  }
}, {
  name: '<?php _e( 'Linie 18 / Münzenbergerstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.132945,
    lng: 8.695378
  }
}, {
  name: '<?php _e( 'Linie 18 / Wasserpark', 'enfold_child' ); ?>',
  coords: {
    lat: 50.135820,
    lng: 8.696752
  }
}, {
  name: '<?php _e( 'Linie 12, Linie 18 / Friedberger Platz', 'enfold_child' ); ?>',
  coords: {
    lat: 50.135820,
    lng: 8.696752
  }
}, {
  name: '<?php _e( 'Linie 12, Linie 18 / Hessendenkmahl', 'enfold_child' ); ?>',
  coords: {
    lat: 50.118624,
    lng: 8.689113
  }
}, {
  name: '<?php _e( 'Linie 12, Linie 18 / Konstablerwache', 'enfold_child' ); ?>',
  coords: {
    lat: 50.114033,
    lng: 8.686955
  }
}],

sbahn: [{
  name: '<?php _e( 'Hauptbahnhof', 'enfold_child' ); ?>',
  coords: {
    lat: 50.106529,
    lng: 8.662162
  }
}, {
  name: '<?php _e( 'Taunusanlage', 'enfold_child' ); ?>',
  coords: {
    lat: 50.114208,
    lng: 8.669629
  }
}, {
  name: '<?php _e( 'Hauptwache', 'enfold_child' ); ?>',
  coords: {
    lat: 50.113712,
    lng: 8.678963
  }
}, {
  name: '<?php _e( 'Konstablerwache', 'enfold_child' ); ?>',
  coords: {
    lat: 50.114607,
    lng: 8.686903
  }
}, {
  name: '<?php _e( 'Ostendstraße', 'enfold_child' ); ?>',
  coords: {
    lat: 50.113217,
    lng: 8.696258
  }
}],

gastroRes: [{
  name: '<?php _e( 'Megaron / griechisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Spohrstraße 26', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128115,
    lng: 8.691089
  }
}, {
  name: '<?php _e( 'Umi Sushi / japanisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Friedberger Landstraße 140', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128495,
    lng: 8.692858
  }
}, {
  name: '<?php _e( 'Little India / indisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Glauburgstraße 6', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127546,
    lng: 8.691476
  }
}, {
  name: '<?php _e( 'Al Terrazzino / italienisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Rothschildallee 52', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.129090,
    lng: 8.693800
  }
}, {
  name: '<?php _e( 'Schandis / persisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Nordendstraße 2', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.129310,
    lng: 8.691497
  }
}, {
  name: '<?php _e( 'L‘isola Sarda / itlalienisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Rothschildallee 38', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128682,
    lng: 8.694678
  }
}, {
  name: '<?php _e( 'Combui / vietnamesisch Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Friedberger Landstraße 138', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128436,
    lng: 8.692731
  }
}, {
  name: '<?php _e( 'Saigon / vietnamesisch Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Hallgartenstraße 61', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.129749,
    lng: 8.696097
  }
}, {
  name: '<?php _e( 'Aqui Santo Domingo / karibisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Rotlintstraße 94', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.129404,
    lng: 8.695835
  }
}, {
  name: '<?php _e( 'Odyssee Kult / internationale Küche', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Weberstraße 77', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127733,
    lng: 8.686302
  }
}, {
  name: '<?php _e( 'Bellavista / itlalienisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Friedberger Landstraße 95', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.125394,
    lng: 8.691350
  }
}, {
  name: '<?php _e( 'Quan Van / vietnamesisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Schwarzburgstraße 74', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127523,
    lng: 8.684787
  }
}, {
  name: '<?php _e( 'Berliner / regionale Küche', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Weberstraße 84', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127542,
    lng: 8.686778
  }
}, {
  name: '<?php _e( 'Alhambra / spanisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Lortzingstraße 15', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127874,
    lng: 8.689590
  }
}, {
  name: '<?php _e( 'Gilgamesch / orientalisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Rotlintstraße 81', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.129565,
    lng: 8.695315
  }
}, {
  name: '<?php _e( 'Adolon / griechisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Weberstraße 90', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128060,
    lng: 8.686692
  }
}, {
  name: '<?php _e( 'Alma / portugiesisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Schwarzburgstraße 78', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127499,
    lng: 8.684572
  }
}, {
  name: '<?php _e( 'Café Größenwahn / frankfurter Küche & international', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Lenaustraße 97', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128562,
    lng: 8.688735
  }
}, {
  name: '<?php _e( 'New Backstage / regionale Küche', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Rothschildallee 36', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128218,
    lng: 8.695493
  }
}, {
  name: '<?php _e( 'Mounir / marokkanische Küche', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Rohrbachstraße 41', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127579,
    lng: 8.693895
  }
}, {
  name: '<?php _e( 'essWERK / Mensa University of Applied Science (UAS)', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Im Unicampus', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.1305732,
    lng: 8.6920740
  }
}, {
  name: '<?php _e( 'Mensa Goethe Universität Frankfurt (UAS)', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Im Campus Westend', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.1282966,
    lng: 8.6663355
  }
}],

gastroImbiss: [{
  name: '<?php _e( 'Pizzeria Olbia / italienisches Restaurant', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Glauburgstraße 14', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127392,
    lng: 8.690573
  }
}, {
  name: '<?php _e( 'Phoenix Tea House / Tee + Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Friedberger Landstraße 82', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.124549,
    lng: 8.692047
  }
}, {
  name: '<?php _e( 'Lucille / Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Friedberger Landstraße 100', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.125826,
    lng: 8.692288
  }
}, {
  name: '<?php _e( 'Subway', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Im Gebäude CITY GATE', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128708,
    lng: 8.691953
  }
}],

gastroCafe: [{
  name: '<?php _e( 'Café Awake', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'im Gebäude CITY GATE', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128818,
    lng: 8.692039
  }
}, {
  name: '<?php _e( 'Rosa Canina / Eisdiele', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Spohrstraße 41', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.129171,
    lng: 8.690323
  }
}, {
  name: '<?php _e( 'Café Deolla / Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Nordendstraße 10', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128982,
    lng: 8.690766
  }
}, {
  name: '<?php _e( 'Glauburg Café / Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Glauburgstraße 28', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127072,
    lng: 8.688166
  }
}, {
  name: '<?php _e( 'Café Rotlint / Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Rotlintstraße 58', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.126958,
    lng: 8.694453
  }
}, {
  name: '<?php _e( 'Carte blanche / internationale Küche', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Egenolffstraße 39', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.126182,
    lng: 8.692398
  }
}, {
  name: '<?php _e( 'Café Kostbar / Mensacafé und Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Im Gebäude CITY GATE', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.1290670,
    lng: 8.6917414
  }
}],

gastroShopping: [{
  name: '<?php _e( 'REWE Supermarkt', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Im Gebäude CITY GATE', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128914,
    lng: 8.692275
  }
}],

gastroBar: [{
  name: '<?php _e( 'Luise / Café-Weinbar', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Rothschildallee 20', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127195,
    lng: 8.697220
  }
}, {
  name: '<?php _e( 'Zappbar / Musicbar', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Glauburgstraße 1', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.127303,
    lng: 8.691788
  }
}, {
  name: '<?php _e( 'Feinstaub / Musicbar', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Friedberger Landstraße 131', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128020,
    lng: 8.691908
  }
}, {
  name: '<?php _e( 'Tiefengrund / Musicbar', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Friedberger Landstraße 116', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.126815,
    lng: 8.692205
  }
}, {
  name: '<?php _e( 'Gudes Frankfurt / Kiosk', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Matthias-Beltz-Platz', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.125976,
    lng: 8.691635
  }
}, {
  name: '<?php _e( 'WeinBächer / Weintaverne', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Nibelungenallee 29', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.130200,
    lng: 8.688340
  }
}, {
  name: '<?php _e( 'Das kleine Haus / Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Spohrstraße 46', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.129433,
    lng: 8.690611
  }
}],

campusRestaurants: [{
  name: '<?php _e( 'Mensa Goethe Universität Frankfurt', 'enfold_child' ); ?>',
  coords: {
    lat: 50.127175,
    lng: 8.666923
  }
}, {
  name: '<?php _e( 'Mensa University of Applied Sciences (UAS)', 'enfold_child' ); ?>',
  coords: {
    lat: 50.130786,
    lng: 8.691775
  }
}, {
  name: '<?php _e( 'Café Kostbar / Mensacafé und Snacks', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'Im Gebäude CITY GATE', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.1291701,
    lng: 8.6920525
  }
}],

/*campus1: [
  {
    name: 'CITY GATE / Frankfurt University of Applied Sciences (UAS)',
    coords: {
      lat: 50.128695,
      lng: 8.691666,
    },
  },
],*/
campusMile: [{
  name: '<?php _e( 'Campus-Meile', 'enfold_child' ); ?>',
  coords: {
    lat: 50.131795,
    lng: 8.674388
  }
}],

campus2: [{
  name: '<?php _e( 'Campus Frankfurt University of Applied Sciences (UAS)', 'enfold_child' ); ?>',
  coords: {
    lat: 50.130113,
    lng: 8.693147
  }
}],

campus3: [{
  name: '<?php _e( 'Frankfurt School of Finance & Management', 'enfold_child' ); ?>',
  coords: {
    lat: 50.132054,
    lng: 8.682819
  }
}],

campus4: [{
  name: '<?php _e( 'Frankfurt School Dorms', 'enfold_child' ); ?>',
  coords: {
    lat: 50.132528,
    lng: 8.679502
  }
}],

campus5: [{
  name: '<?php _e( 'The Flag Campusmeile, Student Apartments', 'enfold_child' ); ?>',
  coords: {
    lat: 50.1325333,
    lng: 8.6771716
  }
}],

campus6: [{
  name: '<?php _e( 'The Flag Frankfurt, Student Apartments', 'enfold_child' ); ?>',
  coords: {
    lat: 50.1312838,
    lng: 8.6736083
  }
}],

campus7: [{
  name: '<?php _e( 'Deutsches Institut f. int. Pädagogische Forschung', 'enfold_child' ); ?>',
  coords: {
    lat: 50.1310752,
    lng: 8.6676444
  }
}],

campus8: [{
  name: '<?php _e( 'Goethe Universität Frankfurt (Campus Westend)', 'enfold_child' ); ?>',
  coords: {
    lat: 50.128051,
    lng: 8.666799
  }
}],

/*      merzHQ: [
        {
          name: 'Merz Pharma GmbH & Co. KGaA - Headquarters',
          coords: {
            lat: 50.126020,
            lng: 8.686210,
          },
        },
      ],
      */

/*universities: [
   {
    name: 'FH Frankfurt',
    text: `
      <p>...</p>
    `,
    coords: {
      lat: 50.128686,
      lng: 8.691686,
    },
  },
  {
    name: 'Frankfurt School of Finance & Management',
    text: `
      <p>...</p>
    `,
    coords: {
      lat: 50.132954,
      lng: 8.680820,
    },
  },
],*/

libraries: [{
  name: '<?php _e( 'Deutsche Nationalbibliothek', 'enfold_child' ); ?>',
  coords: {
    lat: 50.131040,
    lng: 8.683750
  }
}],

poiPalmengarten: [{
  name: '<?php _e( 'Palmengarten Frankfurt', 'enfold_child' ); ?>',
  coords: {
    lat: 50.122734,
    lng: 8.658230
  }
}],

poiZoo: [{
  name: '<?php _e( 'Zoo Frankfurt', 'enfold_child' ); ?>',
  coords: {
    lat: 50.116339,
    lng: 8.699472
  }
}],

poiOpera: [{
  name: '<?php _e( 'Alte Oper Frankfurt', 'enfold_child' ); ?>',
  coords: {
    lat: 50.116032,
    lng: 8.671916
  }
}],

citygate: [{
  name: '<?php _e( 'CITY GATE', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'CITY GATE Frankfurt', 'enfold_child' ); ?><br><?php _e( 'Nibelungenplatz 3', 'enfold_child' ); ?><br><?php _e( '60318 Frankfurt am Main', 'enfold_child' ); ?></p><p><?php _e( 'Frankfurt Innenstadt in ca. 25 Gehminuten.', 'enfold_child' ); ?><br><p><?php _e( 'Vollentwickelte Infrastruktur im Umfeld.', 'enfold_child' ); ?><br><?php _e( 'Hohe Dichte an Restaurants und Geschäften in direkter Nachbarschaft.', 'enfold_child' ); ?><br><?php _e( 'REWE Markt im Gebäude.', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.128759,
    lng: 8.692274
  }
}],

citygateUni: [{
  name: '<?php _e( 'Frankfurt University of Applied Sciences (UAS)', 'enfold_child' ); ?> <br><?php _e( 'im CITY GATE', 'enfold_child' ); ?>',
  text: '<p><?php _e( 'CITY GATE Frankfurt', 'enfold_child' ); ?><br><?php _e( 'Nibelungenplatz 3', 'enfold_child' ); ?><br><?php _e( '60318 Frankfurt am Main', 'enfold_child' ); ?></p><p><?php _e( 'Frankfurt Innenstadt in ca. 25 Gehminuten.', 'enfold_child' ); ?></p><p><?php _e( 'Hohe Dichte von Bildungsinstituten auf der Campus-Meile.', 'enfold_child' ); ?></p>',
  coords: {
    lat: 50.1284480,
    lng: 8.6925138
  }
}]
};
  </script>
