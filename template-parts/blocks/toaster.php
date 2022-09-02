<?php
// load wp classnames (advanced options -> add custom class name)

$className = 'toaster';

if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($className)?>">
<?php if(have_rows('toasters')) : ?>
<table>
<thead>
<th></th>
<th>Price</th>
<th>Our Rating</th>
<th>Cust. Rating</th>
<th>Dimentions</th>
<th>Weight</th>
<th>Watts</th>
</thead>
<tbody>
<?php while (have_rows('toasters')) : the_row(); ?>
<tr>
<td>
<img src="<?php echo get_sub_field('image')['sizes']['thumbnail']?>">
<p><?php the_sub_field('name')?></p>
</td>
<td><?php the_sub_field('price')?></td>
<td><?php the_sub_field('our_rating')?></td>
<td><?php the_sub_field('average_customer_rating')?></td>
<td><?php the_sub_field('dimentions')?></td>
<td><?php the_sub_field('weight')?></td>
<td><?php the_sub_field('watts')?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
<?php endif;?>
</div>