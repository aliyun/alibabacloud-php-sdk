<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ScalingConstraints extends Model
{
    /**
     * @description 最大值。
     *
     * @example 2000
     *
     * @var int
     */
    public $maxCapacity;

    /**
     * @description 最小值。
     *
     * @example 0
     *
     * @var int
     */
    public $minCapacity;
    protected $_name = [
        'maxCapacity' => 'MaxCapacity',
        'minCapacity' => 'MinCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }
        if (null !== $this->minCapacity) {
            $res['MinCapacity'] = $this->minCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScalingConstraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }
        if (isset($map['MinCapacity'])) {
            $model->minCapacity = $map['MinCapacity'];
        }

        return $model;
    }
}
