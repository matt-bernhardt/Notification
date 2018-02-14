<?php
/**
 * Attachment trashing user login merge tag
 *
 * @package notification
 */

namespace underDEV\Notification\Defaults\MergeTag\Media;

use underDEV\Notification\Defaults\MergeTag\StringTag;


/**
 * Attachment trashing user login merge tag class
 */
class AttachmentTrashingUserLogin extends StringTag {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug'        => 'attachment_trashing_user_login',
			'name'        => __( 'Attachment author email' ),
			'description' => __( 'Will be resolved to an attachment trashing user login' ),
			'resolver'    => function() {
				return get_the_author_meta( 'user_login', $this->trigger->trashing_user );
			},
		) );

	}

	/**
	 * Function for checking requirements
	 *
	 * @return boolean
	 */
	public function check_requirements( ) {
		return isset( $this->trigger->trashing_user );
	}

}