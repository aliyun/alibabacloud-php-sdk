<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest\targets;

use AlibabaCloud\Tea\Model;

class boundary extends Model
{
    /**
     * @description The height of the bounding box. The value can be an integer greater than or equal to 0 or a decimal within the range of [0,1):
     *
     *   An integer value greater than or equal to 0 indicates the height of the bounding box in pixels.
     *   A decimal value within the range of [0,1) indicates the height of the bounding box as a ratio of its height to the image height.
     *
     * This parameter is required.
     * @example 200
     *
     * @var float
     */
    public $height;

    /**
     * @description The reference position of the bounding box on the image. Valid values:
     *
     *   topright: the upper-right corner.
     *   topleft: the upper-left corner. This is the default value.
     *   bottomright: the lower-right corner.
     *   bottomleft: the lower-left corner.
     *
     * @example topleft
     *
     * @var string
     */
    public $referPos;

    /**
     * @description The width of the bounding box. The value can be an integer greater than or equal to 0 or a decimal within the range of [0,1):
     *
     *   An integer value greater than or equal to 0 indicates the width of the bounding box in pixels.
     *   A decimal value within the range of [0,1) indicates the width of the bounding box as a ratio of its width to the image width.
     *
     * This parameter is required.
     * @example 200
     *
     * @var float
     */
    public $width;

    /**
     * @description The horizontal offset relative to the reference position. The value can be an integer greater than or equal to 0 or a decimal within the range of [0,1):
     *
     *   An integer value greater than or equal to 0 indicates the horizontal offset in pixels.
     *   A decimal value within the range of [0,1) indicates the horizontal offset as a ratio of the offset to the image width.
     *
     * This parameter is required.
     * @example 0
     *
     * @var float
     */
    public $x;

    /**
     * @description The vertical offset relative to the reference position. The value can be an integer greater than or equal to 0 or a decimal within the range of [0,1):
     *
     *   An integer value greater than or equal to 0 indicates the vertical offset in pixels.
     *   A decimal value within the range of [0,1) indicates the vertical offset as a ratio of the offset to the image height.
     *
     * This parameter is required.
     * @example 0
     *
     * @var float
     */
    public $y;
    protected $_name = [
        'height'   => 'Height',
        'referPos' => 'ReferPos',
        'width'    => 'Width',
        'x'        => 'X',
        'y'        => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->referPos) {
            $res['ReferPos'] = $this->referPos;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
     * @return boundary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ReferPos'])) {
            $model->referPos = $map['ReferPos'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
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
