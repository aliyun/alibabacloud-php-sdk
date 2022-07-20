<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\textWatermarks;

use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @description 根据输出视频大小调整字体 size。 true / false, default: false
     *
     * @var string
     */
    public $adaptive;

    /**
     * @description 边框颜色
     *
     * @var string
     */
    public $borderColor;

    /**
     * @description 边框宽度
     *
     * @var int
     */
    public $borderWidth;

    /**
     * @description 水印文本，不需要 base64 encode，字符串需要 utf-8 编码
     *
     * @var string
     */
    public $content;

    /**
     * @description 透明度
     *
     * @var string
     */
    public $fontAlpha;

    /**
     * @description 颜色
     *
     * @var string
     */
    public $fontColor;

    /**
     * @description 字体
     *
     * @var string
     */
    public $fontName;

    /**
     * @description 字体大小
     *
     * @var int
     */
    public $fontSize;

    /**
     * @description 水印位置，距离左边距离
     *
     * @var string
     */
    public $left;

    /**
     * @description 水印位置，距离上边距离
     *
     * @var string
     */
    public $top;
    protected $_name = [
        'adaptive'    => 'Adaptive',
        'borderColor' => 'BorderColor',
        'borderWidth' => 'BorderWidth',
        'content'     => 'Content',
        'fontAlpha'   => 'FontAlpha',
        'fontColor'   => 'FontColor',
        'fontName'    => 'FontName',
        'fontSize'    => 'FontSize',
        'left'        => 'Left',
        'top'         => 'Top',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptive) {
            $res['Adaptive'] = $this->adaptive;
        }
        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }
        if (null !== $this->borderWidth) {
            $res['BorderWidth'] = $this->borderWidth;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fontAlpha) {
            $res['FontAlpha'] = $this->fontAlpha;
        }
        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overwriteParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adaptive'])) {
            $model->adaptive = $map['Adaptive'];
        }
        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }
        if (isset($map['BorderWidth'])) {
            $model->borderWidth = $map['BorderWidth'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FontAlpha'])) {
            $model->fontAlpha = $map['FontAlpha'];
        }
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }

        return $model;
    }
}
