<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem\extInfo;

use AlibabaCloud\Tea\Model;

class pos extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $x;

    /**
     * @example 2
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'x' => 'x',
        'y' => 'y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->x) {
            $res['x'] = $this->x;
        }
        if (null !== $this->y) {
            $res['y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['x'])) {
            $model->x = $map['x'];
        }
        if (isset($map['y'])) {
            $model->y = $map['y'];
        }

        return $model;
    }
}
