<?php
// HTTP
define('HTTP_SERVER', 'http://nhuaaptec-quartermain-1.c9.io/admin/');
define('HTTP_CATALOG', 'http://nhuaaptec-quartermain-1.c9.io/');

// HTTPS
define('HTTPS_SERVER', 'https://nhuaaptec-quartermain-1.c9.io/admin/');
define('HTTPS_CATALOG', 'https://nhuaaptec-quartermain-1.c9.io/');

// DIR
define('DIR_APPLICATION', '/home/ubuntu/workspace/admin/');
define('DIR_SYSTEM', '/home/ubuntu/workspace/system/');
define('DIR_DATABASE', '/home/ubuntu/workspace/system/database/');
define('DIR_LANGUAGE', '/home/ubuntu/workspace/admin/language/');
define('DIR_TEMPLATE', '/home/ubuntu/workspace/admin/view/template/');
define('DIR_CONFIG', '/home/ubuntu/workspace/system/config/');
define('DIR_IMAGE', '/home/ubuntu/workspace/image/');
define('DIR_CACHE', '/home/ubuntu/workspace/system/cache/');
define('DIR_DOWNLOAD', '/home/ubuntu/workspace/download/');
define('DIR_LOGS', '/home/ubuntu/workspace/system/logs/');
define('DIR_CATALOG', '/home/ubuntu/workspace/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', getenv('IP'));
define('DB_USERNAME', getenv('C9_USER'));
define('DB_PASSWORD', '');
define('DB_DATABASE', 'nhuaaptec');
define('DB_PREFIX', 'oc_');
?>