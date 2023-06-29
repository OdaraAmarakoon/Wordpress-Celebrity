<?php /* Template Name: Home */ ?>
<?php get_header();
?>

<!-- Section01 -banner section -->
<section class="banner-section" id="contact">
<?php getImage(get_field('banner_background_image'), 'full-image bg'); ?>   
    <div class="container" >
        <div class="content-wrapper">
            <?php the_field('banner_content'); ?>

            <div class="social-media-1">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
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
                <div class="sec3-circle">BRACES<?php the_field('packages_title'); ?></div>              
            </div> 
            <div class="column-image2 col-image">
                <?php getImage(get_field('middle_image_service'),); ?>  
                <div class="sec3-circle">invisalign<?php the_field('packages_title'); ?></div>              
            </div>
            <div class="column-image3 col-image">
                <?php getImage(get_field('right_image_service'),); ?>  
                <div class="sec3-circle">whitening<?php the_field('packages_title'); ?></div>              
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

<!-- Section04 Testimonials  -->
<?php if (get_field('testimonials_content')) : ?>
    <section class="testimonials-section">
    <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 ">
                    <div class="square">
                        <div class="circle-shape"><?php the_field('text'); ?></div> 
                        <?php getImage(get_field('quotation_mark1'), 'quot-left'); ?>
                        <?php getImage(get_field('quotation_mark2'), 'quot-right'); ?>
                        <?php if (get_field('testimonials_content')) : ?>
                            <div class="content-wrapper"><?php the_field('testimonials_content'); ?></div>
                        <?php endif; ?>                          
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 ">
                <?php getImage(get_field('testimonials_img'), 'right-image'); ?>

                </div>
            </div                      
        </div>
    </section>
<?php endif; ?>

<!-- Section05 Cosmetic Section  -->

<?php if (get_field('cosmetic_content')) : ?>
    <section class="cosmetic-section">
        <?php getImage(get_field('cosmetic_background'), 'full-image'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="square">
                    <div class="circle-shape"><?php the_field('circle_text_cosmetic'); ?></div> 
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

<!-- Section06 Appointment section -->
<?php if (get_field('appointment_content')) : ?>
    <section class="appoinment-section">
        <?php getImage(get_field('appiontment_image'),); ?>
        <div class="ring2"></div>
        <div class="ring3"></div>
        <div class="container">
            <div class="content-wrapper">
                <?php the_field('appointment_content'); ?>
                <?php if (get_field('appointment_btn')) : ?>
                    <a href="#" class="theme-btn">
                        <?php the_field('appointment_btn'); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Section07 Team section -->
<?php if (get_field('team_content')) : ?>
    <section class="Team-section">
        <div class="container">
            <div class="content-wrapper">
                <?php the_field('team_content'); ?>
                <div class="row">
                <?php while (have_rows('team_images')) : the_row(); ?>
                    <div class="col-lg-4 team-detals">                        
                        <div class="team-image">
                            <?php getImage(get_sub_field('team_member'), 'full-image'); ?>
                        </div>
                        <div class="team-img-description">
                            <?php the_sub_field('member_name'); ?>
                        </div>
                        <h4></h4>                       
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<!-- Section08 Contact section -->
<?php if (get_field('form_text')) : ?>
    <section class="contact-section">
        <?php getImage(get_field('contact_background'), 'full-image'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="square">
                        <div class="circle-shape"><?php the_field('contact_circle_text'); ?></div> 
                        <div class="content-wrapper">
                            <?php if ($formID = get_field('banner_form')) : ?>                
                            <div class="contactus-form">
                                <?php if (get_field('form')) : ?>
                                <div class="content-wrapper"><?php the_field('form'); ?></div>
                                <?php endif; ?>
                                <?php echo do_shortcode('[forminator_form id="' . $formID . '"]'); ?>
                            </div>
                        </div>
            <?php endif; ?>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Section08 Galary section -->
<?php if (get_field('garaly_text')) : ?>
    <section class="Galary-section">
        <div class="container">
            <div class="galary-grid">
                <div class="full-image-parent">
                    <?php getImage(get_field('garaly_img1'), 'full-image bg'); ?>
                </div>
                <div class="full-image-parent">
                    <?php getImage(get_field('garaly_img2'), 'full-image bg'); ?>
                </div>
                <div class="instagram-box">
                    
                </div>
                <div class="full-image-parent">
                    <?php getImage(get_field('garaly_img3'), 'full-image bg'); ?>
                </div>
                <div class="full-image-parent">
                    <?php getImage(get_field('garaly_img4'), 'full-image bg'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>







<?php get_footer(); ?>
