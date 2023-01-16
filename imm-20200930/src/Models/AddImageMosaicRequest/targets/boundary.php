<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest\targets;

use AlibabaCloud\Tea\Model;

class boundary extends Model
{
    /**
     * @example 200
     *
     * @var float
     */
    public $height;

    /**
     * @example topleft
     *
     * @var string
     */
    public $referPos;

    /**
     * @example 200
     *
     * @var float
     */
    public $width;

    /**
     * @example 0
     *
     * @var float
     */
    public $x;

    /**
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
