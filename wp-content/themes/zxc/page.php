<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zxc
 */

get_header();
?>

	<!-- main -->
	<main class="main">
        <section id="feat">
			<div class="container">
                <div class="row features">
				<?php
				$about_inner_1 = get_field('about_inner_1');

				if( $about_inner_1 ): ?>
					<div class="col-md-4 text-center wow fadeInUp"  data-wow-delay= "100ms">
						<span class="typcn typcn-pencil x3"></span>
						<h4><?php echo $about_inner_1['about_inner_title']; ?></h4>
						<p><?php echo $about_inner_1['about_inner_text']; ?></p>
					</div>
				<?php endif; ?>
				<?php
				$about_inner_2 = get_field('about_inner_2');

				if( $about_inner_2 ): ?>
					<div class="col-md-4 text-center wow fadeInUp"  data-wow-delay= "300ms">
						<span class="typcn typcn-camera-outline x3"></span>
						<h4><?php echo $about_inner_2['about_inner_title']; ?></h4>
						<p><?php echo $about_inner_2['about_inner_text']; ?></p>
					</div>
				<?php endif; ?>
				<?php
				$about_inner_3 = get_field('about_inner_3');

				if( $about_inner_3 ): ?>
					<div class="col-md-4 text-center wow fadeInUp"  data-wow-delay= "500ms">
						<span class="typcn typcn-bookmark x3"></span>
						<h4><?php echo $about_inner_3['about_inner_title']; ?></h4>
						<p><?php echo $about_inner_3['about_inner_text']; ?></p>
					</div>
				<?php endif; ?>
                </div>
            </div>
        </section>
        <section id="about" class="number wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .number .container-fluid [approximately row 102] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 opaline col-md-offset-6">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3><?php the_field('o_sebe_title'); ?></h3>
                                    <h5><?php the_field('o_sebe_subtitle'); ?></h5>
                                    <p><?php the_field('o_sebe_text'); ?></p>
                                </div>
                            </div>
                            <div class="row text-center">
								<?php $o_sebe_group_1 = get_field('o_sebe_group_1');
								if( $o_sebe_group_1 ): ?>
									<div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-6 wow fadeInUp">
										<h5><?php echo $o_sebe_group_1['o_sebe_group_title']; ?></h5>
										<h3 class="odometer 01"><?php echo $o_sebe_group_1['o_sebe_group_text']; ?></h3>
									</div>
								<?php endif; ?>
								<?php $o_sebe_group_2 = get_field('o_sebe_group_2');
								if( $o_sebe_group_2 ): ?>
									<div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-6 wow fadeInUp">
										<h5><?php echo $o_sebe_group_2['o_sebe_group_title']; ?></h5>
										<h3 class="odometer 01"><?php echo $o_sebe_group_2['o_sebe_group_text']; ?></h3>
									</div>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news" class="blog wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2><?php the_field('news_title'); ?></h2>
                        <p><?php the_field('news_text'); ?></p>
                    </div>
                    <div class="col-md-5">
                        <a href="#">
                            <img src="https://unsplash.it/1200/1200?image=839" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="history" class="story wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .story .container-fluid [approximately row 141] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 opaline">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <p class="lead"><i>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</i></p>
                                    <p><i>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</i></p>
                                    <h6 class="lead"> – Fermentum Dapibus</h6>
                                    <p><small>Nibh Etiam Risus Bibendum<br>Nullam id dolor id nibh ultricies vehicula ut id elit.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clients wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php the_field('partners_img_1'); ?>" class="img-responsive" />
                    </div>
                    <div class="col-md-4">
                        <img src="<?php the_field('partners_img_2'); ?>" class="img-responsive" />
                    </div>
                    <div class="col-md-4">
                        <img src="<?php the_field('partners_img_3'); ?>" class="img-responsive" />
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="prefooter wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .prefooter .container-fluid [approximately row 154] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Maecenas sed diam eget risus varius<br> blandit sit amet non magna.</h3>
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Email Here...">
                                    <br>
                                    <button type="button" class="btn btn-danger">Submit Newsletter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</main>

<?php
get_sidebar();
get_footer();
