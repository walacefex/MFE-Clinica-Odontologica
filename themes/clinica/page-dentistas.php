<?php get_header();?>

<section class="container-fluid servicos">
    <h2 class="font-weight-bold text-white text-center display-4">Dentistas</h2>
</section>

<?php
$args = array(
    'post_type' => 'dentista',
    'posts_per_page' => -1,
);
$posts = new WP_Query($args);
while ($posts->have_posts()): $posts->the_post();
    $servico1 = get_post(get_post_meta(get_the_ID(), 'servicos1', true));
    $servico2 = get_post(get_post_meta(get_the_ID(), 'servicos2', true));

    echo $servico1->post_title. "<br/>"; //nome do serviço 1
    echo get_permalink(get_post_meta(get_the_ID(), 'servicos1', true)) . "<br/>"; //link do serviço 1
    echo $servico2->post_title. "<br/>"; //nome do serviço 2
    echo get_permalink(get_post_meta(get_the_ID(), 'servicos2', true)) . "<br/>"; //link do serviço 2
    echo get_the_title() . "<br/>"; // titulo do dentista
    echo get_the_content() . "<br/>"; // textinho do dentista
    echo get_the_post_thumbnail() . "<br/>"; // foto do dentista
    echo get_the_permalink() . "<br/>"; // link do dentista

endwhile;
wp_reset_query();
?>

<?php get_footer();?>