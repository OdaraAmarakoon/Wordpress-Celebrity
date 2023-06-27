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

<?php if (get_field('welcome_to_content')) : ?>
    
<?php endif; ?>


services_content

<!-- section 03 -->
<?php if (get_field('services_content')) : ?>
<section class="section-services">
    <div class="container">
        <div class="content-wrapper">
        <?php the_field('services_content'); ?>
        </div>        
        <div class="grid">
            <div class="column-grid">
                <div class="column-image1 col-image">
                <?php getImage(get_field('left_image_service'),); ?>                
                </div>
                <div class="sec3-circle">
                    <p>invisalign</p>
                </div>
            </div>
            <div class="column-grid">
                <div class="column-image2 col-image">
                <?php getImage(get_field('middle_image_service'),); ?>                        
                </div>
                <div class="sec3-circle">
                    <p>invisalign</p>
                </div>
            </div>
            <div class="column-grid">
                <div class="column-image3 col-image">
                    <?php getImage(get_field('right_image_service'),); ?>                        
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
                    <a href="#" class="theme-btn">
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
                    <div class="col-sm-12 col-md-4 col-lg-2">
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