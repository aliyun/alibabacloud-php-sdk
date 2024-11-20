<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\textWatermarks;

use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @description Indicates whether the text size was adjusted based on the output video dimensions. Valid values: true and false. Default value: false.
     *
     * @example false
     *
     * @var string
     */
    public $adaptive;

    /**
     * @description The border color.
     *
     * @example #006400
     *
     * @var string
     */
    public $borderColor;

    /**
     * @description The border width.
     *
     * @example 0
     *
     * @var int
     */
    public $borderWidth;

    /**
     * @description The watermark text. Base64 encoding is not required. The string must be encoded in UTF-8.
     *
     * @example 测试水印
     *
     * @var string
     */
    public $content;

    /**
     * @description The transparency of the watermark.
     *
     * @example 1.0
     *
     * @var string
     */
    public $fontAlpha;

    /**
     * @description The color of the text.
     *
     * @example #006400
     *
     * @var string
     */
    public $fontColor;

    /**
     * @description The font of the text.
     *
     * @example SimSun
     *
     * @var string
     */
    public $fontName;

    /**
     * @description The size of the text.
     *
     * @example 16
     *
     * @var int
     */
    public $fontSize;

    /**
     * @description The distance of the watermark from the left edge.
     *
     * @example 10
     *
     * @var string
     */
    public $left;

    /**
     * @description The distance of the watermark from the top edge.
     *
     * @example 10
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
