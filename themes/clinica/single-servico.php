<?php 

while ( have_posts() ) : the_post(); 

echo get_the_title() . "<br/>"; // titulo do serviço
echo get_the_content() . "<br/>"; // textinho do serviço
echo get_the_post_thumbnail() . "<br/>"; // foto do servico

endwhile;