--TEST--
Release in museum
--FILE--
<?php
require_once dirname(__FILE__) . '/1-urlRelease.php';
echo urlRelease('5.4.0');
?>
--EXPECT--
http://museum.php.net/php5/php-5.4.0.tar.bz2
