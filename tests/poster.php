<?php

require '../vendor/autoload.php';

use niweisi\Poster\PosterManager;
use niweisi\Poster\Exception\Exception;

$fileName = 'output/poster.jpg';
$font_family = 'output/font/msyh.ttc'; // 自定义字体
# 合成图片
try {

//    print_r(__DIR__);exit;
    $result = PosterManager::Poster($fileName) //生成海报，这里写保存路径和文件名，可以指定图片后缀。默认png
    ->buildIm(638, 826, [255, 255, 255, 127], false)
        ->buildImage('images/top_bg.png')
        ->buildImage('https://test.acyapi.51acy.com/wechat/poster/top_bg.png')
        ->buildImage('https://test.acyapi.51acy.com/wechat/poster/half_circle.png', 254, 321)
        ->buildImage('https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=2854425629,4097927492&fm=26&gp=0.jpg', 253, 326, 0, 0, 131, 131, false, 'circle')
        ->buildImage('https://test.acyapi.51acy.com/wechat/poster/fengexian.png', 0, 655)
        ->buildText('苏 轼', 'center', 477, 16, [51, 51, 51, 1], 0,
            $font_family // 字体路径
        )
        ->buildText('明月几时有，把酒问青天。不知天上宫阙，今夕是何年。', 'center', 515, 14, [153, 153, 153, 1])
        ->buildText('我欲乘风归去，又恐琼楼玉宇，高处不胜寒。', 'center', 535, 14, [153, 153, 153, 1])
        ->buildText('起舞弄清影，何似在人间。转朱阁，低绮户，照无眠。', 'center', 555, 14, [153, 153, 153, 1])
        ->buildText('不应有恨，何事长向别时圆？', 'center', 575, 14, [153, 153, 153, 1])
        ->buildText('人有悲欢离合，月有阴晴圆缺，此事古难全。', 'center', 595, 14, [153, 153, 153, 1])
        ->buildText('但愿人长久，千里共婵娟。', 'center', 615, 14, [153, 153, 153, 1])
        ->buildText('长按识别', 497, 720, 15, [153, 153, 153, 1])
        ->buildText('查看TA的更多作品', 413, 757, 15, [153, 153, 153, 1])
        ->buildQr('http://www.520yummy.com', 37,
            692,
            0, 0,
            100, 100, // 二维码大小
            4, 1
        )
        ->getPoster();
//    # 给图片添加水印
//    $result = PosterManager::Poster() //给指定图片添加水印，这里为空就好
//    ->buildImDst(__DIR__.'/test.jpeg')
//        ->buildImage('https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=2854425629,4097927492&fm=26&gp=0.jpg','-20%','-20%',0,0,0,0,false)
//        ->setPoster();
//    # 生成二维码
//    $result = PosterManager::Poster()->Qr('http://www.baidu.com','poster/1.png');
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<img width="100%" src="/<?php echo $fileName . '?ver=' . time(); ?>"/>
