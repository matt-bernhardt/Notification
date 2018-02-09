<?php
/**
 * Default triggers
 */

use underDEV\Notification\Defaults\Recipient;

register_recipient( 'email', new Recipient\Email );
register_recipient( 'email', new Recipient\Administrator );
register_recipient( 'email', new Recipient\User );
register_recipient( 'email', new Recipient\Role );
