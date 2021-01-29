<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponseBody\data\results;

use AlibabaCloud\Tea\Model;

class textRectangles extends Model
{
    /**
     * @var int
     */
    public $top;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $angle;

    /**
     * @var int
     */
    public $left;
    protected $_name = [
        'top'    => 'Top',
        'width'  => 'Width',
        'height' => 'Height',
        'angle'  => 'Angle',
        'left'   => 'Left',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
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
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }

        return $model;
    }
}
