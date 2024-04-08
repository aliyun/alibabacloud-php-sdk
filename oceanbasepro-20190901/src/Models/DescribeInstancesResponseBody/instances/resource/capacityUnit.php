<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;

use AlibabaCloud\Tea\Model;

class capacityUnit extends Model
{
    /**
     * @description The maximum number of capacity units.
     *
     * @example 4
     *
     * @var int
     */
    public $maxCapacityUnit;

    /**
     * @description The minimum number of capacity units.
     *
     * @example 1
     *
     * @var int
     */
    public $minCapacityUnit;

    /**
     * @description The number of used capacity units.
     *
     * @example 2
     *
     * @var int
     */
    public $usedCapacityUnit;
    protected $_name = [
        'maxCapacityUnit'  => 'MaxCapacityUnit',
        'minCapacityUnit'  => 'MinCapacityUnit',
        'usedCapacityUnit' => 'UsedCapacityUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCapacityUnit) {
            $res['MaxCapacityUnit'] = $this->maxCapacityUnit;
        }
        if (null !== $this->minCapacityUnit) {
            $res['MinCapacityUnit'] = $this->minCapacityUnit;
        }
        if (null !== $this->usedCapacityUnit) {
            $res['UsedCapacityUnit'] = $this->usedCapacityUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityUnit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxCapacityUnit'])) {
            $model->maxCapacityUnit = $map['MaxCapacityUnit'];
        }
        if (isset($map['MinCapacityUnit'])) {
            $model->minCapacityUnit = $map['MinCapacityUnit'];
        }
        if (isset($map['UsedCapacityUnit'])) {
            $model->usedCapacityUnit = $map['UsedCapacityUnit'];
        }

        return $model;
    }
}
