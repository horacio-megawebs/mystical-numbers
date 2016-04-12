
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
"keyword","Beginnings",
"text-guide","This is the year for new beginnings, for new starts, to new ideas, to any new thing. It is time to plant and to sow seeds. The seeds planted this year will take effect in the following eight years. Remember, the seeds do not grow from one day to another. First they have to germinate and take root. It is until then that begin to grow. Gives your ideas time to take root. Develops a plan for what you want in this cycle of nine years, and started to work in this from now on. I know yourself and moves forward with determination. Take control. Look toward yourself instead of to the associations or unions. During this period, the independence and self-promotion have a strong influence. Lays the Foundation now. Keep yourself busy and things in motion. This is the year to be a pioneer and open gap.",
"text-phrase","I OPEN NEW PATHS AND START NEW BUSINESSES"},
{"number","2",
"keyword","Cooperate",
"text-guide","The seeds that plantaste last year are under land ready to germinate. This year deserve some rest and quiet. Make sure you have them. Study and acquire knowledge. Practice diplomacy and the touch. Share and teamwork are the best. I know very cooperative. This year do not force anything. Be patient and wait. What is correct for you, will come. Pay attention to the details. It brings together what you need. Look behind the scenes. The opportunities are already on the way. Think, plans and stay calm. Stay calm. The love is favored. It is a good year for relations and partnerships.",
"text-phrase","I AM CONFIDENT THAT THE PROCESS OF LIFE WILL DEVELOP IN THE DIVINE ORDER CORRECT"}
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
