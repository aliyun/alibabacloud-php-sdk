<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutRequest\panes;

use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutRequest\panes\texts\boxColor;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutRequest\panes\texts\fontColor;
use AlibabaCloud\Tea\Model;

class texts extends Model
{
    /**
     * @example 0.9
     *
     * @var float
     */
    public $alpha;

    /**
     * @example 0.6
     *
     * @var float
     */
    public $boxAlpha;

    /**
     * @example 5
     *
     * @var int
     */
    public $boxBorderw;

    /**
     * @var boxColor
     */
    public $boxColor;

    /**
     * @example 0
     *
     * @var int
     */
    public $font;

    /**
     * @var fontColor
     */
    public $fontColor;

    /**
     * @example 36
     *
     * @var int
     */
    public $fontSize;

    /**
     * @var bool
     */
    public $hasBox;

    /**
     * @example 0
     *
     * @var int
     */
    public $layer;

    /**
     * @description This parameter is required.
     *
     * @example 文字水印
     *
     * @var string
     */
    public $texture;

    /**
     * @description This parameter is required.
     *
     * @example 0.2
     *
     * @var float
     */
    public $x;

    /**
     * @description This parameter is required.
     *
     * @example 0.2
     *
     * @var float
     */
    public $y;
    protected $_name = [
        'alpha'      => 'Alpha',
        'boxAlpha'   => 'BoxAlpha',
        'boxBorderw' => 'BoxBorderw',
        'boxColor'   => 'BoxColor',
        'font'       => 'Font',
        'fontColor'  => 'FontColor',
        'fontSize'   => 'FontSize',
        'hasBox'     => 'HasBox',
        'layer'      => 'Layer',
        'texture'    => 'Texture',
        'x'          => 'X',
        'y'          => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alpha) {
            $res['Alpha'] = $this->alpha;
        }
        if (null !== $this->boxAlpha) {
            $res['BoxAlpha'] = $this->boxAlpha;
        }
        if (null !== $this->boxBorderw) {
            $res['BoxBorderw'] = $this->boxBorderw;
        }
        if (null !== $this->boxColor) {
            $res['BoxColor'] = null !== $this->boxColor ? $this->boxColor->toMap() : null;
        }
        if (null !== $this->font) {
            $res['Font'] = $this->font;
        }
        if (null !== $this->fontColor) {
            $res['FontColor'] = null !== $this->fontColor ? $this->fontColor->toMap() : null;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }
        if (null !== $this->hasBox) {
            $res['HasBox'] = $this->hasBox;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->texture) {
            $res['Texture'] = $this->texture;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return texts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alpha'])) {
            $model->alpha = $map['Alpha'];
        }
        if (isset($map['BoxAlpha'])) {
            $model->boxAlpha = $map['BoxAlpha'];
        }
        if (isset($map['BoxBorderw'])) {
            $model->boxBorderw = $map['BoxBorderw'];
        }
        if (isset($map['BoxColor'])) {
            $model->boxColor = boxColor::fromMap($map['BoxColor']);
        }
        if (isset($map['Font'])) {
            $model->font = $map['Font'];
        }
        if (isset($map['FontColor'])) {
            $model->fontColor = fontColor::fromMap($map['FontColor']);
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }
        if (isset($map['HasBox'])) {
            $model->hasBox = $map['HasBox'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['Texture'])) {
            $model->texture = $map['Texture'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
