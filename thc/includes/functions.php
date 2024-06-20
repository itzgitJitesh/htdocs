<?php

require 'config.php';

// Function to fetch content based on the page parameter
function get_page_content($page) {
    $content_dir = 'content/';
    $file = $content_dir . $page . '.phtml';
    if (file_exists($file)) {
        include($file);
    } else {
        include($content_dir . '404.phtml');
    }
}
