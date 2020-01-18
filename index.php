<?php

require 'vendor/autoload.php';

$version = 'V' . ($_GET['version'] ?? '74');

if (! is_dir('code_examples' . DIRECTORY_SEPARATOR . $version)) {
    http_response_code(404);
    exit;
}

require 'code_examples' . DIRECTORY_SEPARATOR . $version . DIRECTORY_SEPARATOR . 'index.php';
