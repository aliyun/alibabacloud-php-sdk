<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskRequest\userPanes;

use AlibabaCloud\Tea\Model;

class texts extends Model
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
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $ZOrder;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var float
     */
    public $x;
    protected $_name = [
        'fontType'  => 'FontType',
        'fontColor' => 'FontColor',
        'y'         => 'Y',
        'text'      => 'Text',
        'ZOrder'    => 'ZOrder',
        'fontSize'  => 'FontSize',
        'x'         => 'X',
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
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->ZOrder) {
            $res['ZOrder'] = $this->ZOrder;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
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
        if (isset($map['FontType'])) {
            $model->fontType = $map['FontType'];
        }
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['ZOrder'])) {
            $model->ZOrder = $map['ZOrder'];
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        return $model;
    }
}
