<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData;

use AlibabaCloud\Tea\Model;

class location extends Model
{
    /**
     * @description The height of the face area. Unit: pixels.
     *
     * @example 26
     *
     * @var int
     */
    public $h;

    /**
     * @description The width of the face area. Unit: pixels.
     *
     * @example 83
     *
     * @var int
     */
    public $w;

    /**
     * @description The distance from the upper-left corner of the face area to the y-axis with the upper-left corner of the image as the coordinate origin. Unit: pixels.
     *
     * @example 41
     *
     * @var int
     */
    public $x;

    /**
     * @description The distance from the upper-left corner of the face area to the x-axis with the upper-left corner of the image as the coordinate origin. Unit: pixels.
     *
     * @example 84
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'h' => 'H',
        'w' => 'W',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }
        if (null !== $this->w) {
            $res['W'] = $this->w;
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
     * @return location
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['W'])) {
            $model->w = $map['W'];
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
