<?php 

while ( have_posts() ) : the_post(); 
$servico1 = get_post(get_post_meta(get_the_ID(), 'servicos1', true));
$servico2 = get_post(get_post_meta(get_the_ID(), 'servicos2', true));

echo $servico1->post_title. "<br/>"; //nome do serviço 1
echo get_permalink(get_post_meta(get_the_ID(), 'servicos1', true)) . "<br/>"; //link do serviço 1
echo $servico2->post_title. "<br/>"; //nome do serviço 2
echo get_permalink(get_post_meta(get_the_ID(), 'servicos2', true)) . "<br/>"; //link do serviço 2
echo get_the_title() . "<br/>"; // titulo do dentista
echo get_the_content() . "<br/>"; // textinho do dentista
echo get_the_post_thumbnail() . "<br/>"; // foto do dentista

endwhile;