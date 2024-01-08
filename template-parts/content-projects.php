<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empty_Studio
 */

?>

<!-- detail이 생성되면 포스트 마다 id가 생성될 것인데, 그 포스트들을 보여줄 것이라는 코드 -->
<!-- 주의사항 : 관리자 페이지 Settings > Permalinks에서 Pernalink structure를 Post name으로 설정해주어야 함 -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="detail-info">
        <div class="detail-info-title">
            <?php the_title(); ?>
        </div>
        <div class="detail-info-des">
            <?php the_field('project_desc'); ?>
        </div>
        <div class="detail-info-credit">
            <?php the_field('project_credit'); ?>
        </div>
    </div>





    <div class="detail-content">
        <div class="detail-start-img" style="background-image:url(<?php the_field('project_image'); ?>)">
        </div>

        <div class="detail-section">
            <!-- col 1 -->
            <div class="detail-col">
                <div class="detail-1col-img" style="background-image:url(<?php the_field('detail_col1_image'); ?>)">
                </div>
            </div>
            <div class="detail-text">
                <?php the_field('detail_col1_text'); ?>
            </div>
        </div>
        <div class="detail-section">
            <!-- col 2 -->
            <div class="detail-col">
                <div class="detail-2col-img" style="background-image:url(<?php the_field('detail_col2_image'); ?>)">
                </div>
                <div class="detail-2col-img" style="background-image:url(<?php the_field('detail_col2_image2'); ?>)">
                </div>
            </div>
            <div class="detail-text">
                <?php the_field('detail_col2_text'); ?>
            </div>
        </div>
        <div class="detail-section">
            <!-- col 3 -->
            <div class="detail-col">
                <div class="detail-3col-img" style="background-image:url(<?php the_field('detail_col3_image'); ?>)">
                </div>
                <div class="detail-3col-img" style="background-image:url(<?php the_field('detail_col3_image2'); ?>)">
                </div>
                <div class="detail-3col-img" style="background-image:url(<?php the_field('detail_col3_image3'); ?>)">
                </div>
            </div>

            <div class="detail-text">
                <?php the_field('detail_col3_text'); ?>
            </div>
        </div>

        <?php get_template_part('template-parts/detail-explore') ?>

    </div>
</article><!-- #post-<?php the_ID(); ?> -->