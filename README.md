# PHP_EfficientExceptionAndErrorHandler
An efficient PHP exception and error handler. Using this source program we can efficiently handle exception and report error.

Before using we have to add the following lines where we need to handle exception and error.

<?php
require_once 'ExceptionAndErrorHandler.php';
    
// error_reporting — Sets which PHP errors are reported
error_reporting(E_ALL);
// error_reporting(0);
// error_reporting(E_ALL | E_STRICT);
// IMPORTANT # From PHP 5.4.0 E_STRICT is a part of E_ALL
// error_reporting(E_ALL | ~E_NOTICE);
    
    
// set_error_handler — Sets a user-defined error handler function

set_error_handler("pc_error_handler");

?>
