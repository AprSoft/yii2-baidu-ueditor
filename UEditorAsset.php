<?php
namespace AprSoft\UEditor;

use yii;
use yii\web\AssetBundle;


/**
 * @todo Class UEditor Asset
 * @package AprSoft\UEditor
 */
class UEditorAsset extends AssetBundle {

    public $sourcePath;

    public $js = [
        'ueditor.config.js',
        'ueditor.all.min.js',
    ];

    public $css = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        parent::init();
    }
}
