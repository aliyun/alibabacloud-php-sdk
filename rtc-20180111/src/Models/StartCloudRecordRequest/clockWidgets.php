<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\clockWidgets\boxColor;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\clockWidgets\fontColor;
use AlibabaCloud\Tea\Model;

class clockWidgets extends Model
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
     * @example 30
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

    /**
     * @example 8
     *
     * @var int
     */
    public $zone;
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
        'x'          => 'X',
        'y'          => 'Y',
        'zone'       => 'Zone',
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
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clockWidgets
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
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
