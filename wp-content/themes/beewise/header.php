<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beewise
 */

$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <style>
        section.first { background-image: url('<?php background_image(); ?>'); }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header position-absolute text-white py-1" id="header">
    <div class="container d-flex flex-wrap align-items-center justify-content-between px-0 pt-3 pt-md-5 pb-4">
        <div class="col-12 col-lg-5 logo d-flex flex-wrap align-items-center px-0 justify-content-around">
            <div class="logo__img d-flex align-items-center justify-content-center col-6 col-sm-4 col-lg-5 col-xl-6">
                <img class="w-100 h-auto" src="<?= $custom_logo__url[0];?>" alt="LOGO">
			</div>
			<span class="logo_desc text-center mx-auto col-12 col-sm-8 col-lg-7 col-xl-6 px-0">
				<?php bloginfo('description'); ?>
			</span>
		</div>
		<?php $phone_number = get_field('phone_number');?>
		<a class="col-12 col-md-6 col-lg-4 phone d-flex align-items-center justify-content-center px-1 px-md-3" href="tel:<?= str_replace(['(',')',' ','-'],'',$phone_number) ?>">
            <div class="phone__img header__icon d-flex align-items-center justify-content-center">
				<img class="w-100 h-auto" src="<?php the_field('phone_icon'); ?>" alt="PHONE">
			</div>
			<span class="phone__number text-white">
				<?php the_field('phone_number'); ?>
			</span>
		</a>
        <a class="col-12 col-md-6 col-lg-3 mail d-flex align-items-center justify-content-center justify-content-md-end p-x0">
			<div class="mail__img header__icon d-flex align-items-center justify-content-center">
				<img class="w-100 h-auto" src="<?php the_field('mail_icon'); ?>" alt="MAIL">
			</div>
			<span class="main__text text-white">
				<?php the_field('mail_address'); ?>
			</span>
		</a>
	</div>
	<?php if( have_rows('menu') ): ?>
        <div class="mobile_menu" id="mobile_menu">
	        <button class="mobile_menu__button" type="button"></button>
        </div>
        <nav class="nav container mt-2 justify-content-center" id="menu">
            <ul class="list-group list-group-horizontal col-lg-12 col-xl-10 justify-content-around">
                <?php while( have_rows('menu') ): the_row(); ?>
                    <li class="list-group-item menu_item"><a class="text-white" href="<?php the_sub_field('menu_link'); ?>"><?php the_sub_field('menu_item'); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </nav>
	<?php endif; ?>
</header>
