<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\EraseLogoInVideoRequest;

use AlibabaCloud\Tea\Model;

class boxes extends Model
{
    /**
     * @var float
     */
    public $w;

    /**
     * @var float
     */
    public $h;

    /**
     * @var float
     */
    public $y;

    /**
     * @var float
     */
    public $x;
    protected $_name = [
        'w' => 'W',
        'h' => 'H',
        'y' => 'Y',
        'x' => 'X',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->w) {
            $res['W'] = $this->w;
        }
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return boxes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        return $model;
    }
}
