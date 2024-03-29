<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponseBody\data\results;

use AlibabaCloud\Tea\Model;

class textRectangles extends Model
{
    /**
     * @example -65
     *
     * @var int
     */
    public $angle;

    /**
     * @example 409
     *
     * @var int
     */
    public $height;

    /**
     * @example 511
     *
     * @var int
     */
    public $left;

    /**
     * @example 150
     *
     * @var int
     */
    public $top;

    /**
     * @example 77
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
