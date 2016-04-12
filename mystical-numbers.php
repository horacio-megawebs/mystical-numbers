
{"en-days":[
{"number":"1", 
"title": "Time to start", 
"text-guide":"Be independent. Do what you want to do. Go after what you want. Go to new places. Know new people. Test out new ideas. Start a new job. Stay active. Today is a great day for this first appointment. You will find that the men are important in your life today. Today be the leader. Trust in yourself and in your intuition. Be original and creative. Be ambitious. Feel your own power. Be brave. The anger, stubbornness, the impatience or concern can undermine your abilities. Look for the new.",
"text-phrase":"I OPEN NEW DOORS TO LIFE!",
"text-phrase-guide":"Today I put my trust in the Infinite wisdom within me to guide me and orient me in new areas of life. I am safe and secure as salgo, confident that the process of Life is there for me. Life supports me in all and each one of the steps in my way. I have food, home, shelter and love in ways that fill me with fully. I open my arms to the new, aware that soon I will be familiar. Knowing that all friends and lovers some time were strangers to me, I welcome new people to my life. Today is a glorious day for me."},
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
  add_option('the-numbers','{"en-days":[{"number":"1","title":"Time to start","text-guide":"Be independent. Do what you want to do. Go after what you want. Go to new places. Know new people. Test out new ideas. Start a new job. Stay active. Today is a great day for this first appointment. You will find that the men are important in your life today. Today be the leader. Trust in yourself and in your intuition. Be original and creative. Be ambitious. Feel your own power. Be brave. The anger, stubbornness, the impatience or concern can undermine your abilities. Look for the new.","text-phrase":"I OPEN NEW DOORS TO LIFE!","text-phrase-guide":"Today I put my trust in the Infinite wisdom within me to guide me and orient me in new areas of life. I am safe and secure as salgo, confident that the process of Life is there for me. Life supports me in all and each one of the steps in my way. I have food, home, shelter and love in ways that fill me with fully. I open my arms to the new, aware that soon I will be familiar. Knowing that all friends and lovers some time were strangers to me, I welcome new people to my life. Today is a glorious day for me."},{"number":"2","title":"Cooperate","text-guide":"","text-phrase":"","text-phrase-guide":""}]},{"en-years":[{"number":"1","keyword","Beginnings","text-guide","This is the year for new beginnings, for new starts, to new ideas, to any new thing. It is time to plant and to sow seeds. The seeds planted this year will take effect in the following eight years. Remember, the seeds do not grow from one day to another. First they have to germinate and take root. It is until then that begin to grow. Gives your ideas time to take root. Develops a plan for what you want in this cycle of nine years, and started to work in this from now on. I know yourself and moves forward with determination. Take control. Look toward yourself instead of to the associations or unions. During this period, the independence and self-promotion have a strong influence. Lays the Foundation now. Keep yourself busy and things in motion. This is the year to be a pioneer and open gap.","text-phrase","I OPEN NEW PATHS AND START NEW BUSINESSES"},{"number","2","keyword","Cooperate","text-guide","The seeds that plantaste last year are under land ready to germinate. This year deserve some rest and quiet. Make sure you have them. Study and acquire knowledge. Practice diplomacy and the touch. Share and teamwork are the best. I know very cooperative. This year do not force anything. Be patient and wait. What is correct for you, will come. Pay attention to the details. It brings together what you need. Look behind the scenes. The opportunities are already on the way. Think, plans and stay calm. Stay calm. The love is favored. It is a good year for relations and partnerships.","text-phrase","I AM CONFIDENT THAT THE PROCESS OF LIFE WILL DEVELOP IN THE DIVINE ORDER CORRECT"}]}')
}

function mystical_deactivate() {
  delete_option('the-numbers');
}

function mystical_footer {
  echo "<p>" . get_option('the-numbers') . "</p>";
}

register_activation_hook(__FILE__,'mystical_install');
register_deactivation_hook(__FILE__,'mystical_deactivate');
add_action('wp_footer', 'mystical_footer');

?>
