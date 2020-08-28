<?php
/**
 * Plugin Name: Comments Sticky Moderate
 * Description: Moves moderation options at top of each comment to speed up manual approval.
 * Version: 1.0.0
 * Author: WPJohnny
 * Author URI: https://wpjohnny.com
 * Donate link: https://www.paypal.me/wpjohnny
 * Text Domain: comments-sticky-moderate
 */

defined( 'ABSPATH' ) || exit;

add_action( 'admin_footer-edit-comments.php', 'csm_print_script' );
/**
 * Print the script.
 *
 * @since 1.0.0
 * @return void
 */
function csm_print_script() {
	?>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.wp-list-table .comment').each(function() {
				var row                 = jQuery(this),
					row_column_comment  = row.find('.column-comment'),
					comment_row_actions = row_column_comment.find('.row-actions').detach();
					
				comment_row_actions.css({left: '0'});
				comment_row_actions.prependTo(row_column_comment);
			});
		});
	</script>
	<?php
}