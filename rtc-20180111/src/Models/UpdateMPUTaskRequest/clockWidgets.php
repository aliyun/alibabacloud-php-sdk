<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest;

use AlibabaCloud\Tea\Model;

class clockWidgets extends Model
{
    /**
     * @var float
     */
    public $alpha;

    /**
     * @var int
     */
    public $borderColor;

    /**
     * @var int
     */
    public $borderWidth;

    /**
     * @var bool
     */
    public $box;

    /**
     * @var int
     */
    public $boxBorderWidth;

    /**
     * @var int
     */
    public $boxColor;

    /**
     * @var int
     */
    public $fontColor;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var int
     */
    public $fontType;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $y;

    /**
     * @var int
     */
    public $ZOrder;
    protected $_name = [
        'alpha'          => 'Alpha',
        'borderColor'    => 'BorderColor',
        'borderWidth'    => 'BorderWidth',
        'box'            => 'Box',
        'boxBorderWidth' => 'BoxBorderWidth',
        'boxColor'       => 'BoxColor',
        'fontColor'      => 'FontColor',
        'fontSize'       => 'FontSize',
        'fontType'       => 'FontType',
        'x'              => 'X',
        'y'              => 'Y',
        'ZOrder'         => 'ZOrder',
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
        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }
        if (null !== $this->borderWidth) {
            $res['BorderWidth'] = $this->borderWidth;
        }
        if (null !== $this->box) {
            $res['Box'] = $this->box;
        }
        if (null !== $this->boxBorderWidth) {
            $res['BoxBorderWidth'] = $this->boxBorderWidth;
        }
        if (null !== $this->boxColor) {
            $res['BoxColor'] = $this->boxColor;
        }
        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }
        if (null !== $this->fontType) {
            $res['FontType'] = $this->fontType;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->ZOrder) {
            $res['ZOrder'] = $this->ZOrder;
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
        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }
        if (isset($map['BorderWidth'])) {
            $model->borderWidth = $map['BorderWidth'];
        }
        if (isset($map['Box'])) {
            $model->box = $map['Box'];
        }
        if (isset($map['BoxBorderWidth'])) {
            $model->boxBorderWidth = $map['BoxBorderWidth'];
        }
        if (isset($map['BoxColor'])) {
            $model->boxColor = $map['BoxColor'];
        }
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }
        if (isset($map['FontType'])) {
            $model->fontType = $map['FontType'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['ZOrder'])) {
            $model->ZOrder = $map['ZOrder'];
        }

        return $model;
    }
}
