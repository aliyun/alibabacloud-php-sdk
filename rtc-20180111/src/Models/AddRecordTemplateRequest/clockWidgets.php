<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\AddRecordTemplateRequest;

use AlibabaCloud\Tea\Model;

class clockWidgets extends Model
{
    /**
     * @var int
     */
    public $fontType;

    /**
     * @var int
     */
    public $fontColor;

    /**
     * @var float
     */
    public $y;

    /**
     * @var int
     */
    public $ZOrder;

    /**
     * @var float
     */
    public $x;

    /**
     * @var int
     */
    public $fontSize;
    protected $_name = [
        'fontType'  => 'FontType',
        'fontColor' => 'FontColor',
        'y'         => 'Y',
        'ZOrder'    => 'ZOrder',
        'x'         => 'X',
        'fontSize'  => 'FontSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fontType) {
            $res['FontType'] = $this->fontType;
        }
        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->ZOrder) {
            $res['ZOrder'] = $this->ZOrder;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
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
        if (isset($map['FontType'])) {
            $model->fontType = $map['FontType'];
        }
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['ZOrder'])) {
            $model->ZOrder = $map['ZOrder'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }

        return $model;
    }
}
