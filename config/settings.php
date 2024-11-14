<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$settings = [
    'app' => $_ENV['APP_NAME'],
];

return $settings;
