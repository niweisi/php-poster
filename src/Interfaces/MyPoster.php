<?php

namespace niweisi\Poster\Interfaces;

interface MyPoster
{
    public function buildIm($w, $h, $rgba = [], $alpha = false);

    public function buildImDst($src, $w = 0, $h = 0);

    public function buildImage($src, $dst_x = 0, $dst_y = 0, $src_x = 0, $src_y = 0, $src_w = 0, $src_h = 0, $alpha = false, $type = 'normal');

    public function buildText($content, $dst_x = 0, $dst_y = 0, $font = 16, $rgba = [], $max_w = 0, $font_family = '');

    public function buildQr($text, $dst_x = 0, $dst_y = 0, $src_x = 0, $src_y = 0, $src_w = 0, $src_h = 0, $size = 4, $margin = 1);

    public function Qr($text, $outfile = false, $level = 'L', $size = 4, $margin = 1, $saveandprint = 0);

    public function getPoster();

    public function setPoster();
}
