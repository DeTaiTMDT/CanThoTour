<?php
/**
 * Contact Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['contact-section-toggle']==1) { ?>
<section id="contact" class="contact dark <?php echo $integral['contact-custom-class']; ?>">
<div class="container">
	<div class="row">
		<div class="col-md-12 heading">
            <?php if ($integral['contact-title-icon']) { ?><i class="fa <?php echo $integral['contact-title-icon']; ?>"></i><?php } ?>
			<?php if ($integral['contact-title']) { ?><h2 class="bigtitle_dark"><span><?php echo $integral['contact-title']; ?></span></h2><?php } ?>
            <?php if ($integral['contact-subtitle']) { ?><p class="subtitle"><?php echo $integral['contact-subtitle']; ?></p><?php } ?>
		</div>
		<div class="col-md-12">			
			<?php
                $my_id = $integral['contact-text'];
                $post_id = get_post($my_id);
                $content = $post_id->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]>', $content);
                echo $content;
            ?>
		</div>
		<div class="col-md-6">
				<?php if ($integral['contactinfo-title']) { ?><h3><?php echo $integral['contactinfo-title']; ?></h3><?php } ?>
				<?php if ($integral['contact-phone']) { ?><div class="info">
				<span class="fa fa-phone fa-md"></span> <?php echo $integral['contact-phone']; ?>
				</div><?php } ?>
				<?php if ($integral['contact-email']) { ?><div class="info">
				<span class="fa fa-envelope fa-md"></span> <?php echo $integral['contact-email']; ?>
				</div><?php } ?>
				<?php if ($integral['contact-address']) { ?><div class="info">
				<span class="fa fa-home fa-md"></span> <?php echo str_replace("\n", "<br>", $integral['contact-address']); ?>
				</div><?php } ?>
				<ul class="socials">
                <?php if ($integral['contact-facebook']) { ?><li><a href="<?php echo $integral['contact-facebook']; ?>"><i class="fa fa-facebook fa-lg"></i></a></li><?php } ?> 
                <?php if ($integral['contact-twitter']) { ?><li><a href="<?php echo $integral['contact-twitter']; ?>"><i class="fa fa-twitter fa-lg"></i></a></li><?php } ?> 
                <?php if ($integral['contact-googleplus']) { ?><li><a href="<?php echo $integral['contact-googleplus']; ?>"><i class="fa fa-google-plus fa-lg"></i></a></li><?php } ?> 
                <?php if ($integral['contact-github']) { ?><li><a href="<?php echo $integral['contact-github']; ?>"><i class="fa fa-github fa-lg"></i></a></li><?php } ?> 
                <?php if ($integral['contact-behance']) { ?><li><a href="<?php echo $integral['contact-behance']; ?>"><i class="fa fa-behance fa-lg"></i></a></li><?php } ?>
                <?php if ($integral['contact-linkedin']) { ?><li><a href="<?php echo $integral['contact-linkedin']; ?>"><i class="fa fa-linkedin fa-lg"></i></a></li><?php } ?>
                <?php if ($integral['contact-instagram']) { ?><li><a href="<?php echo $integral['contact-instagram']; ?>"><i class="fa fa-instagram fa-lg"></i></a></li><?php } ?>
	            </ul>
		</div>
		<?php if ($integral['contact-form-code']) { ?>
        <div class="col-md-6">
			<?php echo do_shortcode($integral['contact-form-code']); ?>
		</div>
        <?php } ?>
	</div>
</div>
</section><!--contact-->
<?php } ?>