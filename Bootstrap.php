<?php

namespace WCM;

/**
 * Plugin Name: (WCM) AstroFields Comments
 * Description: Comment Fields Extension for the AstroFields framework
 */

// Drop in Composer autoloader
require_once plugin_dir_path( __FILE__ )."vendor/autoload.php";


add_action( 'comment_form_before_fields', function()
{
	$author_label = new CommentViewCmd;
	$author_label
		->setView( new LabelView )
		->setProvider( new Label )
		->setTemplate( new LabelTmpl );
	$author_view = new CommentViewCmd;
	$author_view->setTemplate( new InputFieldTmpl );

	$author_field = new Entity( 'comment_form_field_author' );
	$author_field
		->attach( $author_label, array(
			'proxy' => array( 'author', ),
			'label' => 'Hello!',
		) )
		->attach( $author_view, array(
			'default' => 'Hello!',
			'proxy'   => array( 'author', )
		) );


	$email_view = new CommentViewCmd;
	$email_view->setTemplate( new InputFieldTmpl );

	$email_field = new Entity( 'comment_form_field_email' );
	$email_field->attach( $email_view, array(
		'proxy' => array( 'email', ),
			'default' => 'Email',
	) );


	$url_view = new CommentViewCmd;
	$url_view->setTemplate( new InputFieldTmpl );

	$url_field = new Entity( 'comment_form_field_url' );
	$url_field->attach( $url_view, array(
		'proxy' => array( 'url', ),
		'default' => 'URL',
	) );

	$comment_view = new CommentViewCmd;
	$comment_view->setTemplate( new TextareaFieldTmpl );

	$comment_field = new Entity( 'comment_form_field_comment' );
	$comment_field
		->attach( $comment_view, array(
			'proxy' => array( 'comment', ),
		) );
} );