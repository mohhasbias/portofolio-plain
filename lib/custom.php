<?php
/**
 * Custom functions
 */

function setup_theme_admin_menus() {
	if( !current_user_can('manage_options') ){
		wp_die('You do not have sufficient permissions to access this page');
	}
    add_menu_page(__('Theme settings'), __('Example theme'), 'manage_options', 
        'tut_theme_settings', 'theme_settings_page');
    	
    add_submenu_page('tut_theme_settings', 
        __('Front Page Elements'), __('Front Page'), 'manage_options', 
        'tut_theme_settings', 'theme_front_page_settings');
}

function theme_settings_page() {
	echo "";
}


function theme_front_page_settings(){
	?>
	<script type="text/javascript">
		var elementCounter = 0;
		jQuery(document).ready(function($){
			$('#add-featured-post').click(function(){
				var elementRow = $('#front-page-element-placeholder').clone();
				var newId = "front-page-element-" + elementCounter;
				
				elementRow.attr("id", newId);
				elementRow.show();
				
				var inputField = $("select", elementRow);
				inputField.attr("name", "element-page-id-" + elementCounter);
				
				var labelField = $("label", elementRow);
				labelField.attr("for", "element-page-id-" + elementCounter);
				
				elementCounter++
				$("input[name=element-max-id]").val(elementCounter);
				
				$("#featured-posts-list").append(elementRow);
				
				$("a", elementRow).click(function(){
					$(elementRow).remove();
				});
				
				return false;
			});
		});
	</script>
	<div class="wrap">
		<?php screen_icon('themes'); ?> <h2>Front Page Elements</h2>
		
		<form method="POST" action="">
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="num_elements">
							Number of elements on a row:
						</label>
					</th>
					<td>
						<input type="text" name="num_elements" />
					</td>
				</tr>
			</table>
			
			<h3>Featured Post</h3>
			<ul id="featured-posts-list">
			</ul>
			
			<input type=hidden name="element-max-id" />
			
			<a href="#" id="add-featured-post">Add featured post</a>
			
			<?php $posts = get_posts(); ?>

			<li class="front-page-element hidden" id="front-page-element-placeholder">
				<label for="element-page-id">Featured post:</label>
				<select name="element-page-id">
					<?php foreach ($posts as $post) : ?>
						<option value="<?php echo $post->ID; ?>">
							<?php echo $post->post_title; ?>
						</option>
					<?php endforeach; ?>
				</select>
				<a href="#">Remove</a>
			</li>

		</form>
	</div>
	<?php
}

add_action("admin_menu", "setup_theme_admin_menus");