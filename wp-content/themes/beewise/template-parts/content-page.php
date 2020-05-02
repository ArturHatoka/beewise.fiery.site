<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beewise
 */

?>
<section id="first" class="first text-white d-flex">
    <div class="wrapper container d-flex align-items-center flex-column flex-lg-row px-0">
        <div class="col-12 mb-3 mb-lg-0 col-lg-7 col-xl-8 px-0 text-center text-lg-left">
            <?php the_title('<h1 class="first__title pb-2 pb-lg-4">', '</h1>'); ?>
            <?php the_content(); ?>
            <button type="button" class="first__btn btn-fill-yellow col-10 col-sm-6 py-3">
                <?php the_field('button_send'); ?>
            </button>
        </div>
        <div class="col-12 col-sm-10 col-lg-5 col-xl-4 pr-lg-0 pl-lg-4">
            <div class="first__form form d-flex justify-content-center">
            <?= do_shortcode( '[contact-form-7 id="69" title="Контактная форма 1"]'); ?>
            </div>
            <div class="first__soc_links soc_links d-flex flex-column">
                <span class="soc_links__title text-center"><?php the_field('text_soc'); ?></span>
                <?php if( have_rows('soc_icons') ): ?>
                    <div class="soc_links__icons d-flex align-items-center justify-content-center">
                        <?php while( have_rows('soc_icons') ): the_row(); ?>
                            <a href="<?php the_sub_field('soc_link'); ?>" class="soc_links__link">
                                <img class="soc_links__icon" src="<?php the_sub_field('soc_icon'); ?>" alt="<?php the_sub_field('soc_link'); ?>">
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="<?php the_field('id_heading_2'); ?>" class="about py-5">
    <div class="container d-flex flex-column px-0">
        <h2 class="about__title text-center"><?php the_field('heading_2'); ?></h2>
        <p class="about__desc col-12 text-center text-lg-left px-4 px-sm-0">
            <?php the_field('block_2_text'); ?>
        </p>
        <?php if( have_rows('advantages') ): ?>
            <div class="about__pluses d-flex flex-column flex-lg-row align-items-center align-items-lg-stretch justify-content-between pt-3 text-center text-lg-left">
                <?php while( have_rows('advantages') ): the_row(); ?>
                    <div class="about__plus plus col-10 col-md-8 col-lg-4 d-flex flex-column mb-3">
                        <div class="plus__header d-flex justify-content-center justify-content-lg-start align-items-center mb-2 flex-column flex-sm-row">
                            <div class="plus__img">
                                <img src="<?php the_sub_field('advantage_icon'); ?>" alt="<?php the_sub_field('advantage_heading'); ?>">
                            </div>
                            <h3 class="plus__title pl-3"><?php the_sub_field('advantage_heading'); ?></h3>
                        </div>
                        <p class="plus__content">
                            <?php the_sub_field('advantage_desc'); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>