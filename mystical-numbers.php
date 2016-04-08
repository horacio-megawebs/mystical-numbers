
{"en-days":[
{"number":"1", 
"title": "Time to start", 
"text-guide":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique orci a urna ornare euismod. Ut in consequat diam. Duis vel commodo massa. Ut ac ipsum turpis. Sed suscipit hendrerit lobortis. Phasellus eleifend dolor vitae fermentum aliquam. Sed ac quam ultricies risus condimentum hendrerit ac sit amet nunc.",
"text-phrase":"¡Abro nuevas puertas a la vida!",
"text-phrase-guide":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque est et magna commodo, sed venenatis nisi sodales. Integer non mollis justo. Curabitur congue velit lectus, nec faucibus justo pharetra eu. Nam euismod consectetur diam, nec aliquet metus feugiat et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed a nisl sit amet nulla lacinia sodales. Ut vulputate, est tincidunt tristique bibendum, risus ex dapibus nisi, in interdum nibh lectus sed magna. Donec et quam eu magna sollicitudin auctor at quis lacus. Suspendisse semper risus eget justo imperdiet, a feugiat orci dapibus."},
{"number":"2",
"title":"Cooperate",
"text-guide":"",
"text-phrase":"",
"text-phrase-guide":""}
]},
{"en-years":[
{"number":"1",
"keyword","",
"text-guide","",
"text-phrase",""},
{"number","2",
"keyword","",
"text-guide","",
"text-phrase",""}
]
}

<?php
/*Plugin Name: Mystical Numbers 
  Description: This plugin will tell you your daily, monthly and anually positive vibrations.
  Version: 0.1
  Author: Horacio Salva
  Author URI: http://www.megawebs.com.ar/index.php/en/about
  License: GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function mystical_install() {
  add_option('the-numbers','')
}

register_activation_hook(__FILE__,'mystical_install');


?>
