<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\textWatermarks;

use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @var string
     */
    public $adaptive;

    /**
     * @var string
     */
    public $borderColor;

    /**
     * @var int
     */
    public $borderWidth;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fontAlpha;

    /**
     * @var string
     */
    public $fontColor;

    /**
     * @var string
     */
    public $fontName;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var string
     */
    public $left;

    /**
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
