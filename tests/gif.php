<?php
require '../vendor/autoload.php';

use niweisi\Poster\GifCreator\GifCreator;

// Create an array containing file paths, resource var (initialized with imagecreatefromXXX),
// image URLs or even binary code from image files.
// All sorted in order to appear.


$frames = array(
    "../images/newyear.jpg",
    "../images/newyear_count.png",
);

// Create an array containing the duration (in millisecond) of each frames (in order too)
$durations = array(150, 150);

// Initialize and create the GIF !
$gc = new GifCreator();
$gc->create(
    $frames,
    $durations,
    0 // 动画停止前的GIF循环次数(设置为0以获得无限循环)
);
$gifBinary = $gc->getGif();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-type: image/gif');
header('Content-Disposition: filename="butterfly.gif"');
echo $gifBinary;
exit;
