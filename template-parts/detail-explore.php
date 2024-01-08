<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empty_Studio
 */

?>

<div class="detail-explore">
    <?php
    $args = array(
        'post_type' => 'projects', // function.php에서 register_post_type의 첫번째 인자로 넣은 것과 같은 것을 넣어줌.
        'post_status' => 'publish', // 포스트 중에서 publish된 것 만 보여주겠다. (draft(작성중인 것)은 보여주지 않음)
        'posts_per_page' => 100, // 한 페이지 당 보여줄 갯수
        'order' => 'asc',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post(); ?>

            <a href="<?php the_permalink() ?>" class="archive-block" alt="<?php the_title(); ?>">
                <div title="<?php the_title(); ?>" class="archive-image"
                    style="background-image:url(<?php the_field('project_image'); ?>);"></div>
            </a>
        <?php endwhile; endif; ?>


</div>