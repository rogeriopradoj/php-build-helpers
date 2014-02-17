<?php
/**
 * returns url for downloading a PHP 5 version release 
 * Check if the release is on museum.php.net, otherwise, use distributions url
 * 
 * @param  string $version format X.Y.Z
 * @return string url
 */
function urlRelease($version)
{
    $urlDistribution = 'http://www.php.net/distributions/php-{version}.tar.bz2';
    $urlMuseum       = 'http://museum.php.net/php5/php-{version}.tar.bz2';
    $urlApiReleases = 'http://www.php.net/releases/index.php?serialize=1&version=5.5.6&max=1000';
    $listReleases = unserialize(file_get_contents($urlApiReleases));


    if (isset($listReleases[$version]['museum'])) {
        return str_replace('{version}', $version, $urlMuseum);
    }

    return str_replace('{version}', $version, $urlDistribution);
}
