<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource;

use AlibabaCloud\Tea\Model;

class capacityUnit extends Model
{
    /**
     * @var int
     */
    public $maxCapacityUnit;

    /**
     * @var int
     */
    public $minCapacityUnit;

    /**
     * @var int
     */
    public $usedCapacit;
    protected $_name = [
        'maxCapacityUnit' => 'MaxCapacityUnit',
        'minCapacityUnit' => 'MinCapacityUnit',
        'usedCapacit'     => 'UsedCapacit',
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
        if (null !== $this->usedCapacit) {
            $res['UsedCapacit'] = $this->usedCapacit;
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
        if (isset($map['UsedCapacit'])) {
            $model->usedCapacit = $map['UsedCapacit'];
        }

        return $model;
    }
}
