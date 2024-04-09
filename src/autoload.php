<?php

require_once __DIR__ . '/../vendor/autoload.php';

function exception_error_handler($errno, $errstr, $errfile, $errline)
{
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
}

set_error_handler(__NAMESPACE__ . '\exception_error_handler');
