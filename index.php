<?php
require_once 'config.php';
require_once __DIR__.'/src/models/recipe-model.php';

// Fetching all recipes
$friends = getAllFriends();

// Generate the web page
require_once __DIR__.'/src/views/index.php';
require_once __DIR__.'/add.php';