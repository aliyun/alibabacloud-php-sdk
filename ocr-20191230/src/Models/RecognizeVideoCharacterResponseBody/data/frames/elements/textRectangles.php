<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterResponseBody\data\frames\elements;

use AlibabaCloud\Tea\Model;

class textRectangles extends Model
{
    /**
     * @description 文字区域角度，角度范围[0, 360]
     *
     * @var int
     */
    public $angle;

    /**
     * @description 文字区域高度
     *
     * @var int
     */
    public $height;

    /**
     * @description 文字区域左上角x坐标
     *
     * @var int
     */
    public $left;

    /**
     * @description 文字区域左上角y坐标
     *
     * @var int
     */
    public $top;

    /**
     * @description 文字区域宽度
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'angle'  => 'Angle',
        'height' => 'Height',
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textRectangles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
