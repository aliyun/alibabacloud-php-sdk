<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos\trackData;

use AlibabaCloud\Tea\Model;

class boxPosition extends Model
{
    /**
     * @description The height of the rectangle frame. Unit: pixels.
     *
     * @example 168
     *
     * @var int
     */
    public $h;

    /**
     * @description The width of the rectangle frame. Unit: pixels.
     *
     * @example 128
     *
     * @var int
     */
    public $w;

    /**
     * @description The x-axis coordinate of the upper-left corner. Unit: pixels.
     *
     * @example 517
     *
     * @var int
     */
    public $x;

    /**
     * @description The y-axis coordinate of the upper-left corner. Unit: pixels.
     *
     * @example 409
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
     * @return boxPosition
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
