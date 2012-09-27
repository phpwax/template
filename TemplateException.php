<?php
namespace Wax\Template;
/**
 *
 * @package PHP-Wax
 * @author Ross Riley
 **/
class TemplateException extends \RuntimeException
{
	function __construct( $message, $code="Application Error" ) {
  	parent::__construct( $message, $code);
  }
}


