<?php

namespace WCM\AstroFields\Comments\Commands;

use WCM\AstroFields\PublicForm\Commands\ViewCmd;

/**
 * Class CommentViewCmd
 * @package WCM\AstroFields\Comments\Commands
 */
class CommentViewCmd extends ViewCmd
{
	/** @type string */
	protected $context = 'comment_form_field_{proxy}';
}