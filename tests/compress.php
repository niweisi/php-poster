<?php
require '../vendor/autoload.php';

use niweisi\Poster\Compress\Compress;

$html = file_get_contents('./test.html');
$html = Compress::html($html); // 压缩html文件
echo $html;
exit;
