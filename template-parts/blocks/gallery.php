<?php
$className = 'gallery';

if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($className); ?>">
<?php while (have_rows('gallery')) : the_row(); ?>
<div>
<img src="<?php echo get_sub_field('image')['sizes']['thumbnail']?>">
</div>
<p><?php the_sub_field('image_name')?></p>
<?php endwhile ?>

</div>