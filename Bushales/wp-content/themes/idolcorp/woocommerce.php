<?php
/**
 * The Template for displaying all single posts
 *
 *
 * @package Idolcorp
 * @since Idolcorp 1.0
 */

get_header(); ?>
<div id="main" class="site-main">         
	<div class="container">
	    <div class="row content-wrap">              
	        <?php echo idolcorp_custom_layout_class_and_structure('primary');?>
	        <div id="content" class="site-content"> 
	            <section id="articlemain" class="post" role="main">


	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

</section>
	        </div>
	        <h1>Accessories</h1>

<?php
$taxonomyName = "product_cat";
//This gets top layer terms only.  This is done by setting parent to 0.  
    $parent_terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));

    echo '<ul>';
    foreach ($parent_terms as $pterm) {

        //show parent categories
        echo '<li><a href="' . get_term_link($pterm->name, $taxonomyName) . '">' . $pterm->name . '</a></li>';

        $thumbnail_id = get_woocommerce_term_meta($pterm->term_id, 'thumbnail_id', true);
        // get the image URL for parent category
        $image = wp_get_attachment_url($thumbnail_id);
        // print the IMG HTML for parent category
        echo "<img src='{$image}' alt='' width='400' height='400' />";

        //Get the Child terms
        $terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false));
        foreach ($terms as $term) {

            echo '<li><a href="' . get_term_link($term->name, $taxonomyName) . '">' . $term->name . '</a></li>';
            $thumbnail_id = get_woocommerce_term_meta($pterm->term_id, 'thumbnail_id', true);
            // get the image URL for child category
            $image = wp_get_attachment_url($thumbnail_id);
            // print the IMG HTML for child category
            echo "<img src='{$image}' alt='' width='400' height='400' />";
        }
    }
    echo '</ul>';
?> 


	        </div>
	               <?php idolcorp_sidebar_layout(); ?>                   
	    </div>
	</div><!-- .container -->
</div><!-- #main -->
</div><!-- Main div Close-->
<?php get_footer(); ?>