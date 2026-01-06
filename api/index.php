<?php

// Set the script name to empty so Laravel reads the full URI
$_SERVER['SCRIPT_NAME'] = '';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

// Change to the public directory so Laravel can find its files
chdir(__DIR__ . '/../public');

// Forward Vercel requests to Laravel
require __DIR__ . '/../public/index.php';