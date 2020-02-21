<?php
/**
 * Trait with cache access.
 *
 * @package notification
 */

namespace BracketSpace\Notification\Traits;

/**
 * Cache trait
 */
trait Cache {

	/**
	 * ====================================
	 * Post type
	 * ====================================
	 */

	/**
	 * Gets nice, translated post name for post type slug
	 *
	 * @since  [Next]
	 * @param  string $post_type post type slug.
	 * @return string post name
	 */
	public static function get_post_type_name( $post_type ) {
		$post_types = notification_cache( 'post_types' );
		return $post_types[ $post_type ] ?? '';
	}

	/**
	 * Gets nice, translated post name
	 *
	 * @since  [Next]
	 * @return string post name
	 */
	public function get_current_post_type_name() {
		return self::get_post_type_name( $this->get_post_type() );
	}

	/**
	 * Gets post type slug
	 *
	 * @since  [Next]
	 * @return string post type slug
	 */
	public function get_post_type() {
		return $this->post_type;
	}

	/**
	 * ====================================
	 * Comment type
	 * ====================================
	 */

	/**
	 * Gets nice, translated comment type
	 *
	 * @since  [Next]
	 * @return string
	 */
	public function get_current_comment_type_name() {
		return self::get_comment_type_name( $this->get_comment_type() );
	}

	/**
	 * Gets nice, translated post name for post type slug
	 *
	 * @since  [Next]
	 * @param  string $comment_type Comment type slug.
	 * @return string               Comment type name.
	 */
	public static function get_comment_type_name( $comment_type ) {
		$comment_types = notification_cache( 'comment_types' );
		return $comment_types[ $comment_type ] ?? '';
	}

	/**
	 * Gets comment type slug
	 *
	 * @since  [Next]
	 * @return string
	 */
	public function get_comment_type() {
		return $this->comment_type;
	}

}
