<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\texts\boxColor;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\texts\fontColor;

class texts extends Model
{
    /**
     * @var float
     */
    public $alpha;

    /**
     * @var float
     */
    public $boxAlpha;

    /**
     * @var int
     */
    public $boxBorderw;

    /**
     * @var boxColor
     */
    public $boxColor;

    /**
     * @var int
     */
    public $font;

    /**
     * @var fontColor
     */
    public $fontColor;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var bool
     */
    public $hasBox;

    /**
     * @var int
     */
    public $layer;

    /**
     * @var string
     */
    public $texture;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $y;
    protected $_name = [
        'alpha' => 'Alpha',
        'boxAlpha' => 'BoxAlpha',
        'boxBorderw' => 'BoxBorderw',
        'boxColor' => 'BoxColor',
        'font' => 'Font',
        'fontColor' => 'FontColor',
        'fontSize' => 'FontSize',
        'hasBox' => 'HasBox',
        'layer' => 'Layer',
        'texture' => 'Texture',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        if (null !== $this->boxColor) {
            $this->boxColor->validate();
        }
        if (null !== $this->fontColor) {
            $this->fontColor->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['BoxColor'] = null !== $this->boxColor ? $this->boxColor->toArray($noStream) : $this->boxColor;
        }

        if (null !== $this->font) {
            $res['Font'] = $this->font;
        }

        if (null !== $this->fontColor) {
            $res['FontColor'] = null !== $this->fontColor ? $this->fontColor->toArray($noStream) : $this->fontColor;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
