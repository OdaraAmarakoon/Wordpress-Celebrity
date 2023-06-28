<?php /* Template Name: Home */ ?>
<?php get_header();
?>

<!-- Section01 -banner section -->
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

<!-- Section02 welcome section -->
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

<!-- section03 services section -->
<?php if (get_field('services_content')) : ?>
<section class="section-services">
    <div class="container">
        <div class="content-wrapper">
        <?php the_field('services_content'); ?>
        </div>        
        <div class="img-section">            
            <div class="column-image1 col-image">
                <?php getImage(get_field('left_image_service'),); ?>  
                <div class="sec3-circle"><?php the_field('packages_title'); ?></div>              
            </div> 
            <div class="column-image2 col-image">
                <?php getImage(get_field('middle_image_service'),); ?>  
                <div class="sec3-circle"><?php the_field('packages_title'); ?></div>              
            </div>
            <div class="column-image3 col-image">
                <?php getImage(get_field('right_image_service'),); ?>  
                <div class="sec3-circle"><?php the_field('packages_title'); ?></div>              
            </div>              
        </div>
        <?php if (get_field('service_btn')) : ?>
            <a href="#" class="theme-btn service-btn">
                <?php the_field('service_btn'); ?>
            </a>
        <?php endif; ?>
            
        </div>
    </section>
<?php endif; ?> 

<!-- Section05 Testimonials  -->
<?php if (get_field('testimonials_content')) : ?>
    <section class="testimonials-section">
    <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 ">
                    <div class="square">
                        <div class="circle-shape"><?php the_field('circle_text_contact'); ?></div> 
                        <?php getImage(get_field('quotation_mark1'), 'quot-left'); ?>
                        <?php getImage(get_field('quotation_mark2'), 'quot-right'); ?>
                        <?php if (get_field('testimonials_content')) : ?>
                            <div class="content-wrapper"><?php the_field('testimonials_content'); ?></div>
                        <?php endif; ?>                          
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 ">
                <?php getImage(get_field('testimonials_img'), 'quot-right'); ?>

                </div>
            </div                      
        </div>
    </section>
<?php endif; ?>

<!-- Section06 Cosmetic Section  -->

<?php if (get_field('cosmetic_content')) : ?>
    <section class="cosmetic-section">
        <?php getImage(get_field('cosmetic_background'), 'full-image'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="square">
                    <div class="circle-shape"><?php the_field('circle_text_contact'); ?></div> 
                    <div class="content-wrapper">
                        <?php the_field('cosmetic_content'); ?>
                        <?php if (get_field('cosmetic_button')) : ?>
                            <a href="#" class="theme-btn">
                                <?php the_field('cosmetic_button'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>






<?php get_footer(); ?>
