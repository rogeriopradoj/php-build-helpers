<?php

$releases = [
    '5.5.9',
    '5.4.0',
];

foreach ($releases as $version) {
    printf('Version: %s - Url: %s <br>', $version, urlRelease($version));
}
