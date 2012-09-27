<?php
namespace Wax\Template;

/**
 *
 * @package PHP-Wax
 * @author Ross Riley
 **/
class ApplicationException extends \RuntimeException
{
	function __construct( $message, $code="Application Error" ) {
  	parent::__construct( $message, $code);
  }
}


