<?php
/**
 * Author: dungang
 * Date: 2017/4/11
 * Time: 8:15
 */

namespace dungang\inlineattachment\assets;


use yii\web\AssetBundle;

class JqueryInlineAttachmentAsset extends AssetBundle
{

    public $sourcePath = '@bower/inline-attachment/dist';

    public $depends = ['dungang\inlineattachment\assets\InlineAttachmentAsset'];

    public function init()
    {
        if (YII_DEBUG) {
            $this->js = ['jquery.inline-attachment.js'];

        } else {
            $this->js = ['jquery.inline-attachment.min.js'];
        }
    }
}