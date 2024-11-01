<?php
/*
Plugin Name: Was Here Widget
Plugin URI: http://sudocode.net/projects/was-here/
Description: Adds a widget in the Dashboard's Widgets menu to place the Was Here App to display recent visitors in the sidebar.
Author: Arvin Castro
Version: 1.2
Author URI: http://sudocode.net/
*/

/* WP Plugin Tutorial: http://justintadlock.com/archives/2009/05/26/the-complete-guide-to-creating-widgets-in-wordpress-28 */

/* Add our function to the widgets_init hook. */
add_action('widgets_init',    'sudocode_was_here_load_widget');
add_action('wp_print_styles', 'sudocode_was_here_load_style');

/* Function that registers our widget. */
function sudocode_was_here_load_widget() {
	register_widget('sudocode_was_here_widget');
}
function sudocode_was_here_load_style() {
    $stylesheet = "/was-here-widget/was-here.css";
    $stylesheeturl = WP_PLUGIN_URL.$stylesheet;
    $stylesheetfile = WP_PLUGIN_DIR.$stylesheet;
    if (file_exists($stylesheetfile)) {
      wp_register_style("SudocodeWasHereWidgetStyleSheet", $stylesheeturl);
      wp_enqueue_style("SudocodeWasHereWidgetStyleSheet");
    }
}

class sudocode_was_here_widget extends WP_Widget {

	public function sudocode_was_here_widget() {
		/* Widget settings. */
		$widget_ops = array(
			'classname' => 'Was Here',
			'description' => 'Adds the Was Here Recent Readers widget that displays visitors to your blog.'
			);

		/* Widget control settings. */
		$control_ops = array(
			'width' => 300,
			'height' => 400,
			'id_base' => 'sudocode-was-here-widget'
			);

		/* Create the widget. */
		$this->WP_Widget( 'sudocode-was-here-widget', 'Was Here', $widget_ops, $control_ops);

	}

	function widget($args, $instance) {

		extract($args);

		/* User-selected settings. */
		$title = apply_filters('widget_title', $instance['title']);
		$count = is_numeric($instance['count']) ? $instance['count']: 20;
		$url   = site_url();

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Title of widget (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		echo '<script src="http://sudocode.net/apps/was-here/widget.php?url='.urlencode($url).'&count='.$count.'" type="text/javascript"></script>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['count'] = (int) strip_tags($new_instance['count']);
		return $instance;
	}

	function form($instance) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Recent Readers', 'count' => '20');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:85%;" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'count' ); ?>">Number of Avatars:</label>
			<input id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" value="<?php echo $instance['count']; ?>" style="width:85%;" />
		</p>
		<?php
	}
}

?>