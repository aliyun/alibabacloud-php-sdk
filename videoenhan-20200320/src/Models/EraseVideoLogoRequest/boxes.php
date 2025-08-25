<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoRequest;

use AlibabaCloud\Dara\Model;

class boxes extends Model
{
    /**
     * @var float
     */
    public $h;

    /**
     * @var float
     */
    public $w;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
