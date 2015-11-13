<?php global $product; ?>
<?php
/*
<li>
	<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
		<?php echo $product->get_image(); ?>
		<span class="product-title"><?php echo $product->get_title(); ?></span>
	</a>
	<?php if ( ! empty( $show_rating ) ) echo $product->get_rating_html(); ?>
	<?php echo $product->get_price_html(); ?>
</li>
 */
?>
<div class="feedback-box">
	<?php $post = $product->get_post_data(); ?>
	<h3>
		<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">

			<?php echo $product->get_title(); ?>
		</a>
		</h3>
	<div class="message">
		<?php echo $post->post_excerpt ?>
		<div class="image" style="text-align: center; margin-top: 10px">
			<?php echo $product->get_image(); ?>
		</div>

	</div>

</div>
