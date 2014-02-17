--TEST--
Release out of museum
--FILE--
<?php
require_once dirname(__FILE__) . '/1-urlRelease.php';
echo urlRelease('5.5.9');
?>
--EXPECT--
http://www.php.net/distributions/php-5.5.9.tar.bz2
