<?php /* Template Name: Home */ ?>
<?php get_header();
?>


<section class="banner-section" id="contact">
<?php getImage(get_field('banner_background_image'), 'full-image bg'); ?>   
    <div class="container" id="schedule">
        <div class="content-wrapper">
            <?php the_field('banner_content'); ?>
        </div>
        <div class="social-media-1">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </div>
</section>        

<?php if (get_field('welcome_to_content')) : ?>
    <section class="section-welcome-to" id="welcome">
        
        <div class="container">
            <div class="content-wrapper">
                <div class="content">
                <?php the_field('welcome_to_content'); ?>
                </div>
                <div class="left-img"><?php getImage(get_field('left_image'),); ?></div>
                <div class="girl-ring"></div>
                <div class="right-img"><?php getImage(get_field('right_image'),); ?></div>
                <div class="boy-circle"></div>                   

            </div>
            
        </div>
    </section>
<?php endif; ?>


<?php if (have_rows('packages')) : ?>
    <section class="packages-section" id="our-prices">
        <div class="container">

            <?php if (get_field('packages_title')) : ?>
                <div class="content-wrapper"><?php the_field('packages_title'); ?></div>
            <?php endif; ?>

            <?php if (have_rows('packages')) : ?>
                <div class="row">
                    <?php while (have_rows('packages')) : the_row(); ?>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="item">
                                <div class="price"><span>$</span><?php the_sub_field('price'); ?></div>
                                <h5><?php the_sub_field('title'); ?></h5>
                                <?php if (get_sub_field('link')) : ?>
                                    <a href="<?php the_sub_field('link'); ?>" target="_blank" class="theme-btn">
                                        <?php the_field('packages_button_title'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

services_content

<!-- section 03 -->
<?php if (get_field('services_content')) : ?>

<section class="section-services">
    <div class="container">
        <div class="service-content">
            <h6>SERVICES</h6>
            <h3>Tailored services beyond the basics</h3>
            <h3>to give you the smile you deserve </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum</p>
        </div>        
        <div class="grid">
            <div class="column-grid">
                <div class="column-image1 col-image">
                    <img src="img/col1-image.jpg" alt="image1">
                </div>
                <div class="sec3-circle">
                    <p>invisalign</p>
                </div>
                    </div>
                    <div class="column-grid">
                        <div class="column-image2 col-image">
                            <img src="img/col2-image.jpg" alt="image2">
                        </div>
                        <div class="sec3-circle">
                            <p>invisalign</p>
                        </div>
                    </div>
                    <div class="column-grid">
                        <div class="column-image3 col-image">
                            <img src="img/col3-image.jpg" alt="image">
                        </div>
                        <div class="sec3-circle">
                            <p>invisalign</p>
                        </div>
                    </div>
                </div>

                <div class="service-btn-class">
                    <a href="#" class="main-btn service-btn">VIEW ALL SERVICES</a>
                </div>
            </div>
        </section>
    <?php endif; ?>       

<?php if (get_field('contact_content')) : ?>
    <section class="contact-section">
        <?php getImage(get_field('contact_background_image'), 'full-image'); ?>
        <div class="container">
            <div class="content-wrapper">
                <?php the_field('contact_content'); ?>
                <?php if (get_field('contact_button_text')) : ?>
                    <a href="#footer" class="theme-btn">
                        <?php the_field('contact_button_text'); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('testimonials')) : ?>
    <section class="testimonials-section" id="what-they-say">
        <div class="container">
            <?php if (get_field('testimonials_title')) : ?>
                <div class="content-wrapper"><?php the_field('testimonials_title'); ?></div>
            <?php endif; ?>
            <div class="swiper" id="testimonialsSwiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('testimonials')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="item">
                                <p><?php the_sub_field('testimonial'); ?></p>
                                <h5><?php the_sub_field('name'); ?></h5>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-nav">
                    <div class="swiper-btn testimonials-prev"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="swiper-btn testimonials-next"><i class="fa-solid fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('areas')) : ?>
    <section class="areas-section">
        <div class="container">
            <?php if (get_field('areas_title')) : ?>
                <div class="content-wrapper"><?php the_field('areas_title'); ?></div>
            <?php endif; ?>
            <div class="row">
                <?php while (have_rows('areas')) : the_row(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="item">
                            <div class="image">
                                <?php getImage(get_sub_field('image'), 'full-image'); ?>
                            </div>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php if (get_sub_field('link')) : ?>
                                <a href="<?php the_field('link'); ?>" target="_blank" class="full-link"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>