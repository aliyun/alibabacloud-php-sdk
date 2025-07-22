<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\AddRecordTemplateRequest;

use AlibabaCloud\Tea\Model;

class clockWidgets extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $fontColor;

    /**
     * @example 1
     *
     * @var int
     */
    public $fontSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $fontType;

    /**
     * @example 0.7576
     *
     * @var float
     */
    public $x;

    /**
     * @example 0.7576
     *
     * @var float
     */
    public $y;

    /**
     * @example 0
     *
     * @var int
     */
    public $ZOrder;
    protected $_name = [
        'fontColor' => 'FontColor',
        'fontSize' => 'FontSize',
        'fontType' => 'FontType',
        'x' => 'X',
        'y' => 'Y',
        'ZOrder' => 'ZOrder',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
