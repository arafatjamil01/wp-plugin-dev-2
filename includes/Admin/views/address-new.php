<div class="wrap">
	<h1 class="wp-heading-inline"><?php _e( 'New Address', 'weac' ); ?></h1>
	<form action="" method="post">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="name"><?php _e( 'Name', 'weac' ); ?></label>
					</th>
					<td>
						<input name="name" type="text" id="name" value="" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="address"><?php _e( 'Address', 'weac' ); ?></label>
					</th>
					<td>
						<textarea name="address" id="address" cols="30" rows="10" class="regular-text"></textarea>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="phone"><?php _e( 'Phone', 'weac' ); ?></label>
					</th>
					<td>
						<input name="phone" type="text" id="phone" value="" class="regular-text">
					</td>
				</tr>
			</tbody>
		</table>
		<?php
			wp_nonce_field( 'new-address' );
			submit_button( __( 'Add Address', 'weac' ), 'primary', 'submit_address' );
			?>
	</form>
</div>
