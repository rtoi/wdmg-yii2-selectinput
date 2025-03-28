<?php


namespace wdmg\widgets;

/**
 * @author          Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 * @copyright       Copyright (c) 2019 - 2021 W.D.M.Group, Ukraine
 * @license         https://opensource.org/licenses/MIT Massachusetts Institute of Technology (MIT) License
 */

use yii\web\AssetBundle;

class SelectInputAssets extends AssetBundle
{

    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . '/assets';
        $this->css = YII_DEBUG ? ['css/selectinput.css'] : ['css/selectinput.min.css'];
        $this->js = YII_DEBUG ? ['js/selectinput.js'] : ['js/selectinput.min.js'];
        $this->depends = [\yii\web\JqueryAsset::class];
    }

}