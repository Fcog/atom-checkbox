<?php
use Lean\Load;

$args = wp_parse_args( $args, [
	'name' => '',
	'label' => '',
	'class' => '',
	'value' => '',
	'checked' => false,
]);
?>

<div class="a__checkbox">
	<input
		<?php if ( $args['checked'] ) : ?>
		checked
		<?php endif; ?>
		type="checkbox"
		id="id-<?php echo esc_attr( $args['name'] ); ?>"
		class="a__checkbox__input <?php echo esc_attr( $args['class'] ); ?>"
		name="<?php echo esc_attr( $args['name'] ); ?>"
		value="<?php echo esc_attr( $args['value'] ); ?>">
	<label
		class="a__checkbox__style"
		for="id-<?php echo esc_attr( $args['name'] ); ?>">
	</label>
</div>
<?php if ( $args['label'] ) : ?>
<label
	class="a__checkbox__label"
	for="id-<?php echo esc_attr( $args['name'] ); ?>">
	<?php echo esc_html( $args['label'] ); ?>
</label>
<?php endif; ?>
